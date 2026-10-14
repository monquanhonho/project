<?php
/**
 * Trang đăng nhập - EduManager
 */
require_once __DIR__ . '/auth.php';

if (isset($_GET['logout'])) {
    logout();
}

// Nếu đã đăng nhập rồi mà lỡ vào lại trang login, tự động chuyển hướng về trang tương ứng
if (current_user()) {
    $role = current_user()['role'] ?? 'student';
    
    if ($role === 'admin') {
        header('Location: ' . redirect_url('../index.php'));
    } else {
        header('Location: ' . redirect_url('../student/student.php'));
    }
    exit;
}

// Khởi tạo CSRF token nếu chưa có
if (empty($_SESSION['csrf'])) {
    $_SESSION['csrf'] = bin2hex(random_bytes(32));
}

$error = '';
$username = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if (!hash_equals($_SESSION['csrf'], $_POST['csrf'] ?? '')) {
        $error = 'Phiên đăng nhập đã hết hạn. Hãy tải lại trang và thử lại.';
    } elseif ($username === '' || $password === '') {
        $error = 'Nhập tên đăng nhập và mật khẩu.';
    } elseif (attempt_login($username, $password)) {
        $_SESSION['csrf'] = bin2hex(random_bytes(32));
        
        $role = current_user()['role'] ?? 'student';
        
        if ($role === 'admin') {
            header('Location: ' . redirect_url('../index.php'));
        } else {
            header('Location: ' . redirect_url('../student/student.php'));
        }
        exit;
    } else {
        $error = $GLOBALS['login_error'] ?? 'Tên đăng nhập hoặc mật khẩu chưa đúng.';
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Đăng nhập - EduManager</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= BASE_URL ?>/login.css">
</head>
<body>
  <main class="lg">

    <!-- Bên trái: bảng lịch học minh họa -->
    <aside class="lg-art" aria-hidden="true">
      <div class="lg-brand">
        <img src="<?= BASE_URL ?>/assets/logo.png" alt="" onerror="this.replaceWith(Object.assign(document.createElement('span'),{className:'lg-brand-txt',textContent:'EduManager'}))">
      </div>

      <div class="lg-art-body">
        <h2>Lớp học, giáo viên và học phí<br>trong cùng một màn hình.</h2>

        <div class="tt">
          <div class="tt-head"><span>T2</span><span>T3</span><span>T4</span><span>T5</span><span>T6</span></div>
          <div class="tt-grid">
            <div class="tt-col">
              <i class="s blue" style="--t:0;--h:2">IELTS A1</i>
              <i class="s green" style="--t:4;--h:2">Giao tiếp C1</i>
            </div>
            <div class="tt-col">
              <i class="s orange" style="--t:1;--h:2">TOEIC B2</i>
              <i class="s purple" style="--t:5;--h:2">Kids D3</i>
            </div>
            <div class="tt-col">
              <i class="s blue" style="--t:0;--h:2">IELTS A1</i>
              <i class="s purple" style="--t:5;--h:2">Kids D3</i>
            </div>
            <div class="tt-col">
              <i class="s orange" style="--t:1;--h:2">TOEIC B2</i>
            </div>
            <div class="tt-col">
              <i class="s blue" style="--t:0;--h:2">IELTS A1</i>
              <i class="s green" style="--t:4;--h:2">Giao tiếp C1</i>
            </div>
          </div>
        </div>
      </div>
    </aside>

    <!-- Bên phải: form đăng nhập -->
    <section class="lg-form-wrap">
      <form class="lg-form" method="post" novalidate>
        <input type="hidden" name="csrf" value="<?= e($_SESSION['csrf']) ?>">

        <h1>Đăng nhập</h1>
        <p class="lg-sub">Dùng tài khoản do trung tâm cấp.</p>

        <?php if ($error): ?>
          <div class="lg-err" role="alert">
            <svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 8v5M12 16h.01"/></svg>
            <span><?= e($error) ?></span>
          </div>
        <?php endif; ?>

        <div class="fld">
          <label for="username">Tên đăng nhập hoặc email</label>
          <input id="username" name="username" type="text" value="<?= e($username) ?>"
                 autocomplete="username" autocapitalize="none" spellcheck="false" required autofocus
                 <?= $error ? 'aria-invalid="true"' : '' ?>>
        </div>

        <div class="fld">
          <label for="password">Mật khẩu</label>
          <div class="pw">
            <input id="password" name="password" type="password" autocomplete="current-password" required
                   <?= $error ? 'aria-invalid="true"' : '' ?>>
            <button type="button" class="pw-toggle" id="pwToggle" aria-label="Hiện mật khẩu" aria-pressed="false">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
            </button>
          </div>
        </div>

        <div class="lg-row">
          <label class="chk"><input type="checkbox" name="remember"><span>Ghi nhớ đăng nhập</span></label>
          <a href="#" class="lg-link" onclick="alert('Liên hệ quản trị viên để đặt lại mật khẩu.');return false;">Quên mật khẩu?</a>
        </div>

        <button class="lg-btn" type="submit">Đăng nhập</button>

      </form>
    </section>

  </main>

  <script>
    const pw = document.getElementById('password'), tg = document.getElementById('pwToggle');
    tg.addEventListener('click', () => {
      const show = pw.type === 'password';
      pw.type = show ? 'text' : 'password';
      tg.setAttribute('aria-pressed', show);
      tg.setAttribute('aria-label', show ? 'Ẩn mật khẩu' : 'Hiện mật khẩu');
    });
  </script>
</body>
</html>