<?php
/**
 * Auth helper cho EduManager (login & session)
 * Đặt file này tại: public/auth.php
 */

// Bật hiển thị lỗi để dễ dàng debug nếu gặp sự cố
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// BASE_URL: tự detect theo đường dẫn hiện tại
if (!defined('BASE_URL')) {
    $script = $_SERVER['SCRIPT_NAME'] ?? '';
    $dir = rtrim(str_replace('\\', '/', dirname($script)), '/');
    define('BASE_URL', $dir === '/' ? '' : $dir);
}

// Gọi file config.php nằm cùng thư mục
require_once __DIR__ . '/config.php';

/**
 * Helper chuẩn hóa đường dẫn chuyển hướng
 */
function redirect_url(string $path = ''): string 
{
    $baseUrl = rtrim(BASE_URL, '/');
    $path = ltrim($path, '/');
    return $baseUrl . '/' . $path;
}

/**
 * Escape HTML
 */
function e(?string $str): string
{
    return htmlspecialchars((string) $str, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/**
 * Lấy user đang đăng nhập (hoặc null)
 */
function current_user(): ?array
{
    return $_SESSION['user'] ?? null;
}

/**
 * Bắt buộc đăng nhập, tùy chọn kiểm tra role
 */
function require_login(?string $role = null): void
{
    $user = current_user();
    if (!$user) {
        header('Location: ' . redirect_url('login.php'));
        exit;
    }
    if ($role !== null && ($user['role'] ?? '') !== $role) {
        http_response_code(403);
        echo 'Bạn không có quyền truy cập trang này.';
        exit;
    }
}

/**
 * Đăng xuất
 */
function logout(): void
{
    $_SESSION = [];
    if (ini_get('session.use_cookies')) {
        $p = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, $p['path'], $p['domain'], $p['secure'], $p['httponly']);
    }
    session_destroy();
    header('Location: ' . redirect_url('login.php'));
    exit;
}

/**
 * Thử đăng nhập bằng username hoặc email
 */
function attempt_login(string $username, string $password): bool
{
    $GLOBALS['login_error'] = null;

    $username = trim($username);
    if ($username === '' || $password === '') {
        $GLOBALS['login_error'] = 'Nhập tên đăng nhập và mật khẩu.';
        return false;
    }

    try {
        global $conn;
        if (!isset($conn) || !($conn instanceof PDO)) {
            throw new Exception("Không tìm thấy kết nối cơ sở dữ liệu hợp lệ trong config.php");
        }

        // Truy vấn chính xác từ bảng login
        $stmt = $conn->prepare(
            'SELECT id, username, email, password, ho_ten, role
             FROM login
             WHERE (username = ? OR email = ?)
             LIMIT 1'
        );
        $stmt->execute([$username, $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            $GLOBALS['login_error'] = 'Tên đăng nhập hoặc email không tồn tại.';
            return false;
        }

        // Kiểm tra mật khẩu (hỗ trợ cả hash lẫn chuỗi thô)
        $is_valid_password = false;
        if (!empty($user['password']) && password_get_info($user['password'])['algo']) {
            $is_valid_password = password_verify($password, $user['password']);
        } else {
            $is_valid_password = ($password === $user['password']);
        }

        if (!$is_valid_password) {
            $GLOBALS['login_error'] = 'Mật khẩu chưa đúng.';
            return false;
        }

        // Đăng nhập thành công, loại bỏ password trước khi lưu session
        unset($user['password']);
        
        session_regenerate_id(true);
        $_SESSION['user'] = $user;

        return true;
    } catch (Throwable $e) {
        error_log('Login error: ' . $e->getMessage());
        $GLOBALS['login_error'] = 'Lỗi hệ thống: ' . $e->getMessage();
        return false;
    }
}