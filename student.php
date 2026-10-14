<?php
require __DIR__ . '/../includes/auth.php';
require_login('student');
$pageTitle = 'Dashboard học viên';

$stats = [
  ['si-blue',  'i-book',   'Lớp đang học', 'IELTS 6.5 - A1'],
  ['si-green', 'i-check',  'Chuyên cần',   '94%'],
  ['si-orange','i-wallet', 'Học phí còn nợ','0 ₫'],
];
$schedule = [
  ['08:00','09:30','IELTS 6.5 - Lớp A1','Nguyễn Văn A','201'],
];

require __DIR__ . '/../includes/header.php';
require __DIR__ . '/../includes/sidebar.php';
?>
  <div class="main"><div class="content"><section class="page" style="display:block">
    <div class="welcome"><div class="welcome-text">
      <h2 class="welcome-title">Xin chào, <?= e($user['name']) ?>! 👋</h2>
      <p class="welcome-sub">Tình hình học tập của bạn</p>
    </div></div>

    <div class="stat-row">
      <?php foreach ($stats as [$cls, $icon, $label, $value]): ?>
        <div class="stat-card">
          <div class="stat-icon <?= $cls ?>"><svg class="ic"><use href="#<?= $icon ?>"/></svg></div>
          <div><div class="stat-label"><?= e($label) ?></div><div class="stat-value" style="font-size:20px"><?= e($value) ?></div></div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="card">
      <div class="card-head"><h3>Lịch học hôm nay</h3></div>
      <div class="schedule-list">
        <?php foreach ($schedule as [$from, $to, $name, $gv, $room]): ?>
          <div class="schedule-item">
            <div class="schedule-time"><span class="time-text"><?= $from ?></span><span class="time-sub"><?= $to ?></span></div>
            <div class="schedule-info"><strong><?= e($name) ?></strong><span>GV: <?= e($gv) ?> · Phòng <?= e($room) ?></span></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section></div></div>
</body>
</html>