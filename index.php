<?php
// EduManager - Giao diện quản lý trung tâm tiếng Anh
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LingoPop - Trung Tâm Tiếng Anh</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <svg width="0" height="0" style="position:absolute" aria-hidden="true">
    <symbol id="i-dash" viewBox="0 0 24 24">
      <rect x="3" y="3" width="7" height="9" rx="1" />
      <rect x="14" y="3" width="7" height="5" rx="1" />
      <rect x="14" y="12" width="7" height="9" rx="1" />
      <rect x="3" y="16" width="7" height="5" rx="1" />
    </symbol>
    <symbol id="i-grad" viewBox="0 0 24 24">
      <path d="M22 10 12 5 2 10l10 5 10-5z" />
      <path d="M6 12v5c3 2 9 2 12 0v-5" />
    </symbol>
    <symbol id="i-users" viewBox="0 0 24 24">
      <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
      <circle cx="9" cy="7" r="4" />
      <path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75" />
    </symbol>
    <symbol id="i-book" viewBox="0 0 24 24">
      <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
      <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
    </symbol>
    <symbol id="i-check" viewBox="0 0 24 24">
      <rect x="8" y="2" width="8" height="4" rx="1" />
      <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2" />
      <path d="m9 14 2 2 4-4" />
    </symbol>
    <symbol id="i-cal" viewBox="0 0 24 24">
      <rect x="3" y="4" width="18" height="18" rx="2" />
      <path d="M16 2v4M8 2v4M3 10h18" />
    </symbol>
    <symbol id="i-userplus" viewBox="0 0 24 24">
      <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
      <circle cx="9" cy="7" r="4" />
      <path d="M19 8v6M22 11h-6" />
    </symbol>
    <symbol id="i-wallet" viewBox="0 0 24 24">
      <path d="M20 12V8H6a2 2 0 0 1 0-4h12v4" />
      <path d="M4 6v12a2 2 0 0 0 2 2h14v-4" />
      <path d="M18 12a2 2 0 0 0 0 4h4v-4z" />
    </symbol>
    <symbol id="i-chart" viewBox="0 0 24 24">
      <path d="M3 3v18h18" />
      <path d="M18 17V9M13 17V5M8 17v-3" />
    </symbol>
    <symbol id="i-bell" viewBox="0 0 24 24">
      <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9" />
      <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0" />
    </symbol>
    <symbol id="i-folder" viewBox="0 0 24 24">
      <path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.7-.9L9.6 3.9A2 2 0 0 0 7.9 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2z" />
    </symbol>
    <symbol id="i-login" viewBox="0 0 24 24">
      <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
      <path d="M10 17l5-5-5-5" />
      <path d="M15 12H3" />
    </symbol>
    <symbol id="i-build" viewBox="0 0 24 24">
      <path d="M3 21h18" />
      <path d="M5 21V7l7-4 7 4v14" />
      <path d="M9 21v-6h6v6" />
    </symbol>
    <symbol id="i-db" viewBox="0 0 24 24">
      <ellipse cx="12" cy="5" rx="9" ry="3" />
      <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3" />
      <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5" />
    </symbol>
    <symbol id="i-search" viewBox="0 0 24 24">
      <circle cx="11" cy="11" r="8" />
      <path d="m21 21-4.35-4.35" />
    </symbol>
    <symbol id="i-menu" viewBox="0 0 24 24">
      <path d="M4 6h16M4 12h16M4 18h16" />
    </symbol>
    <symbol id="i-alert" viewBox="0 0 24 24">
      <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z" />
      <path d="M12 9v4M12 17h.01" />
    </symbol>
    <symbol id="i-pen" viewBox="0 0 24 24">
      <path d="M17 3a2.85 2.85 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z" />
    </symbol>
    <symbol id="i-award" viewBox="0 0 24 24">
      <circle cx="12" cy="8" r="6" />
      <path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11" />
    </symbol>
    <symbol id="i-clock" viewBox="0 0 24 24">
      <circle cx="12" cy="12" r="10" />
      <path d="M12 6v6l4 2" />
    </symbol>
    <symbol id="i-trending" viewBox="0 0 24 24">
      <path d="M23 6l-9.5 9.5-5-5L1 18" />
      <path d="M17 6h6v6" />
    </symbol>
    <symbol id="i-download" viewBox="0 0 24 24">
      <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
      <path d="M7 10l5 5 5-5" />
      <path d="M12 15V3" />
    </symbol>
    <symbol id="i-upload" viewBox="0 0 24 24">
      <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
      <path d="M17 8l-5-5-5 5" />
      <path d="M12 3v12" />
    </symbol>
    <symbol id="i-plus" viewBox="0 0 24 24">
      <path d="M12 5v14M5 12h14" />
    </symbol>
    <symbol id="i-eye" viewBox="0 0 24 24">
      <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
      <circle cx="12" cy="12" r="3" />
    </symbol>
    <symbol id="i-trash" viewBox="0 0 24 24">
      <path d="M3 6h18M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
    </symbol>
  </svg>

  <!-- TOP BAR -->
  <header class="topnav">
    <div class="topnav-inner">
      <button class="menu-toggle" onclick="document.querySelector('.side').classList.toggle('open')" aria-label="Menu">
        <svg class="ic"><use href="#i-menu" /></svg>
      </button>
      <a class="brand" href="#dashboard">
        <img src="./acesst/logo.png" alt="Logo">
      </a>
      <div class="search">
        <svg class="ic"><use href="#i-search" /></svg>
        <input type="search" placeholder="Tìm học viên, lớp học, giáo viên...">
      </div>
      <div class="topnav-right">
        <button class="icon-btn-top" title="Lịch học"><svg class="ic"><use href="#i-cal" /></svg></button>
        <button class="icon-btn-top" title="Thông báo"><svg class="ic"><use href="#i-bell" /></svg><span class="badge">3</span></button>
        <button class="icon-btn-top" title="Tin nhắn"><svg class="ic"><use href="#i-users" /></svg></button>
        <button class="icon-btn-top" title="Cài đặt"><svg class="ic"><use href="#i-pen" /></svg></button>
        <div class="av">A</div>
      </div>
    </div>
  </header>

  <!-- SIDEBAR -->
  <aside class="side" onclick="if(event.target.closest('a'))this.classList.remove('open')">
    <h4>Tổng quan</h4>
    <a href="#dashboard"><svg class="ic"><use href="#i-dash" /></svg><span>Dashboard</span></a>

    <h4>Đào tạo</h4>
    <a href="#hocvien"><svg class="ic"><use href="#i-grad" /></svg><span>Học viên</span></a>
    <a href="#giaovien"><svg class="ic"><use href="#i-users" /></svg><span>Giáo viên</span></a>
    <a href="#khoahoc"><svg class="ic"><use href="#i-book" /></svg><span>Khóa học &amp; lớp học</span></a>
    <a href="#diemdanh"><svg class="ic"><use href="#i-check" /></svg><span>Điểm danh &amp; kết quả</span></a>
    <a href="#lichhoc"><svg class="ic"><use href="#i-cal" /></svg><span>Lịch học &amp; thi</span></a>

    <h4>Kinh doanh</h4>
    <a href="#tuyensinh"><svg class="ic"><use href="#i-userplus" /></svg><span>Tuyển sinh</span></a>
    <a href="#taichinh"><svg class="ic"><use href="#i-wallet" /></svg><span>Tài chính / Học phí</span></a>
    <a href="#baocao"><svg class="ic"><use href="#i-chart" /></svg><span>Báo cáo</span></a>

    <h4>Mở rộng</h4>
    <a href="#thongbao"><svg class="ic"><use href="#i-bell" /></svg><span>Thông báo</span></a>
    <a href="#tailieu"><svg class="ic"><use href="#i-folder" /></svg><span>Tài liệu</span></a>
    <a href="#saoluu"><svg class="ic"><use href="#i-db" /></svg><span>Sao lưu dữ liệu</span></a>
  </aside>

  <div class="side-overlay" onclick="document.querySelector('.side').classList.remove('open')"></div>

  <div class="main">
    <div class="content">

      <!-- ═══════════════════════ DASHBOARD ═══════════════════════ -->
      <section class="page" id="dashboard">

        <!-- Chào mừng -->
        <div class="welcome">
          <div class="welcome-text">
            <h2 class="welcome-title">Xin chào, Admin! 👋</h2>
            <p class="welcome-sub">Tổng quan hoạt động trung tâm hôm nay</p>
          </div>
          <span class="date-badge" id="today-date"></span>
        </div>

        <!-- Thống kê nhanh -->
        <div class="stat-row">
          <div class="stat-card">
            <div class="stat-icon si-blue">
              <svg class="ic"><use href="#i-grad" /></svg>
            </div>
            <div>
              <div class="stat-label">Tổng học viên</div>
              <div class="stat-value">256</div>
              <div class="stat-change positive">↑ +12 tháng này</div>
            </div>
          </div>
          <div class="stat-card">
            <div class="stat-icon si-green">
              <svg class="ic"><use href="#i-users" /></svg>
            </div>
            <div>
              <div class="stat-label">Giáo viên</div>
              <div class="stat-value">18</div>
              <div class="stat-change positive">↑ +2 tháng này</div>
            </div>
          </div>
          <div class="stat-card">
            <div class="stat-icon si-orange">
              <svg class="ic"><use href="#i-book" /></svg>
            </div>
            <div>
              <div class="stat-label">Lớp đang hoạt động</div>
              <div class="stat-value">12</div>
              <div class="stat-change neutral">3 lớp sắp khai giảng</div>
            </div>
          </div>
          <div class="stat-card">
            <div class="stat-icon si-purple">
              <svg class="ic"><use href="#i-wallet" /></svg>
            </div>
            <div>
              <div class="stat-label">Doanh thu tháng</div>
              <div class="stat-value">45.2tr ₫</div>
              <div class="stat-change positive">↑ +8% so với tháng trước</div>
            </div>
          </div>
        </div>

        <!-- Biểu đồ: Điểm danh + Tài chính -->
        <div class="dash-grid">
          <!-- Điểm danh hôm nay -->
          <div class="card att-card">
            <div class="card-head">
              <h3>Điểm danh hôm nay</h3>
              <span class="date-badge">13/10/2026</span>
            </div>
            <div class="donut-wrap">
              <div class="donut">
                <svg viewBox="0 0 36 36" class="donut-svg">
                  <circle class="donut-ring" cx="18" cy="18" r="15.9" fill="none" stroke="#e5e7eb" stroke-width="3.2" />
                  <circle class="donut-seg" cx="18" cy="18" r="15.9" fill="none" stroke="#10b981"
                    stroke-width="3.2" stroke-dasharray="78 22" stroke-dashoffset="25" />
                  <circle class="donut-seg" cx="18" cy="18" r="15.9" fill="none" stroke="#f59e0b"
                    stroke-width="3.2" stroke-dasharray="12 88" stroke-dashoffset="-53" />
                  <circle class="donut-seg" cx="18" cy="18" r="15.9" fill="none" stroke="#ef4444"
                    stroke-width="3.2" stroke-dasharray="10 90" stroke-dashoffset="-65" />
                </svg>
                <div class="donut-center">
                  <strong>90%</strong>
                  <small>có mặt</small>
                </div>
              </div>
            </div>
            <div class="att-legend">
              <div><span class="dot green"></span>200 Có mặt</div>
              <div><span class="dot yellow"></span>18 Có phép</div>
              <div><span class="dot red"></span>16 Vắng</div>
            </div>
          </div>

          <!-- Tổng quan tài chính -->
          <div class="card fin-card">
            <div class="card-head">
              <h3>Tổng quan tài chính</h3>
              <div class="tabs">
                <button class="tab active">Tháng</button>
                <button class="tab">Tuần</button>
              </div>
            </div>
            <div class="bar-chart">
              <div class="bars">
                <div class="bar-group">
                  <div class="chart-bar b1" style="height:70%"></div>
                  <div class="chart-bar b2" style="height:45%"></div>
                  <div class="chart-bar b3" style="height:55%"></div>
                  <span>T1</span>
                </div>
                <div class="bar-group">
                  <div class="chart-bar b1" style="height:55%"></div>
                  <div class="chart-bar b2" style="height:50%"></div>
                  <div class="chart-bar b3" style="height:40%"></div>
                  <span>T2</span>
                </div>
                <div class="bar-group">
                  <div class="chart-bar b1" style="height:45%"></div>
                  <div class="chart-bar b2" style="height:35%"></div>
                  <div class="chart-bar b3" style="height:50%"></div>
                  <span>T3</span>
                </div>
                <div class="bar-group">
                  <div class="chart-bar b1" style="height:80%"></div>
                  <div class="chart-bar b2" style="height:60%"></div>
                  <div class="chart-bar b3" style="height:30%"></div>
                  <span>T4</span>
                </div>
                <div class="bar-group">
                  <div class="chart-bar b1" style="height:65%"></div>
                  <div class="chart-bar b2" style="height:70%"></div>
                  <div class="chart-bar b3" style="height:45%"></div>
                  <span>T5</span>
                </div>
                <div class="bar-group">
                  <div class="chart-bar b1" style="height:50%"></div>
                  <div class="chart-bar b2" style="height:40%"></div>
                  <div class="chart-bar b3" style="height:60%"></div>
                  <span>T6</span>
                </div>
                <div class="bar-group">
                  <div class="chart-bar b1" style="height:40%"></div>
                  <div class="chart-bar b2" style="height:55%"></div>
                  <div class="chart-bar b3" style="height:35%"></div>
                  <span>T7</span>
                </div>
                <div class="bar-group">
                  <div class="chart-bar b1" style="height:75%"></div>
                  <div class="chart-bar b2" style="height:48%"></div>
                  <div class="chart-bar b3" style="height:52%"></div>
                  <span>T8</span>
                </div>
                <div class="bar-group">
                  <div class="chart-bar b1" style="height:90%"></div>
                  <div class="chart-bar b2" style="height:65%"></div>
                  <div class="chart-bar b3" style="height:70%"></div>
                  <span>T9</span>
                </div>
                <div class="bar-group highlight">
                  <div class="chart-bar b1" style="height:60%"></div>
                  <div class="chart-bar b2" style="height:42%"></div>
                  <div class="chart-bar b3" style="height:38%"></div>
                  <span>T10</span>
                </div>
              </div>
            </div>
            <div class="chart-legend">
              <div><span class="dot b1-dot"></span>Học phí</div>
              <div><span class="dot b2-dot"></span>Thu khác</div>
              <div><span class="dot b3-dot"></span>Chi phí</div>
            </div>
            <div class="current-month">
              <h4>Tháng hiện tại</h4>
              <div class="month-cards">
                <div class="m-card purple">
                  <span class="m-icon">₫</span>
                  <div><small>Học phí thu được</small><b>139tr ₫</b></div>
                </div>
                <div class="m-card green">
                  <span class="m-icon">+</span>
                  <div><small>Thu khác</small><b>12.5tr ₫</b></div>
                </div>
                <div class="m-card yellow">
                  <span class="m-icon">!</span>
                  <div><small>Còn nợ</small><b>8.2tr ₫</b></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Hàng dưới: Lịch sắp tới + Thông báo -->
        <div class="dash-grid bottom">
          <!-- Lịch học sắp tới -->
          <div class="card">
            <div class="card-head">
              <h3>Lịch học hôm nay</h3>
              <a href="#lichhoc" class="link-more">Xem tất cả →</a>
            </div>
            <div class="schedule-list">
              <div class="schedule-item active-now">
                <div class="schedule-time">
                  <span class="time-text">08:00</span>
                  <span class="time-sub">09:30</span>
                </div>
                <div class="schedule-info">
                  <strong>IELTS 6.5 - Lớp A1</strong>
                  <span>GV: Nguyễn Văn A · Phòng 201</span>
                </div>
                <span class="status-pill pill-active">Đang học</span>
              </div>
              <div class="schedule-item">
                <div class="schedule-time">
                  <span class="time-text">09:45</span>
                  <span class="time-sub">11:15</span>
                </div>
                <div class="schedule-info">
                  <strong>TOEIC 700 - Lớp B2</strong>
                  <span>GV: Trần Thị B · Phòng 102</span>
                </div>
                <span class="status-pill pill-upcoming">Sắp tới</span>
              </div>
              <div class="schedule-item">
                <div class="schedule-time">
                  <span class="time-text">14:00</span>
                  <span class="time-sub">15:30</span>
                </div>
                <div class="schedule-info">
                  <strong>Giao tiếp cơ bản - Lớp C1</strong>
                  <span>GV: Lê Văn C · Phòng 301</span>
                </div>
                <span class="status-pill pill-upcoming">Sắp tới</span>
              </div>
              <div class="schedule-item">
                <div class="schedule-time">
                  <span class="time-text">16:00</span>
                  <span class="time-sub">17:30</span>
                </div>
                <div class="schedule-info">
                  <strong>Kids English - Lớp D3</strong>
                  <span>GV: Phạm Thị D · Phòng 105</span>
                </div>
                <span class="status-pill pill-upcoming">Sắp tới</span>
              </div>
            </div>
          </div>

          <!-- Thông báo & Sự kiện -->
          <div class="card">
            <div class="card-head">
              <h3>Thông báo &amp; Sự kiện</h3>
              <a href="#thongbao" class="link-more">Xem tất cả →</a>
            </div>
            <div class="notice-list">
              <div class="notice-item type-notice">
                <div class="notice-row">
                  <span class="notice-type-badge nb-notice">Thông báo</span>
                  <span class="notice-text">Lịch nghỉ lễ Quốc khánh 2/9</span>
                  <span class="notice-date">13/10/2026</span>
                </div>
              </div>
              <div class="notice-item type-event">
                <div class="notice-row">
                  <span class="notice-type-badge nb-event">Sự kiện</span>
                  <span class="notice-text">Cuộc thi hùng biện tiếng Anh</span>
                  <span class="notice-date">12/10/2026</span>
                </div>
              </div>
              <div class="notice-item type-event open">
                <div class="notice-row">
                  <span class="notice-type-badge nb-event">Sự kiện</span>
                  <span class="notice-text">Ngày hội tiếng Anh - English Festival</span>
                  <span class="notice-date">10/10/2026</span>
                </div>
                <div class="notice-detail">
                  Ngày hội tiếng Anh - English Festival<br>
                  Ngày: 15/10/2026<br>
                  Thời gian: 08:00 - 17:00<br>
                  Địa điểm: Sảnh chính tầng 1
                </div>
              </div>
              <div class="notice-item type-warn">
                <div class="notice-row">
                  <span class="notice-type-badge nb-warn">Nhắc nhở</span>
                  <span class="notice-text">Thu học phí đợt 2 - Hạn chót 20/10</span>
                  <span class="notice-date">08/10/2026</span>
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>


      <!-- ═══════════════════════ HỌC VIÊN ═══════════════════════ -->
      <section class="page" id="hocvien">
        <h2>Quản lý học viên</h2>
        <div class="toolbar">
          <input type="search" placeholder="Tìm theo tên, mã, SĐT...">
          <select>
            <option>Tất cả lớp</option>
          </select>
          <select>
            <option>Tất cả trạng thái</option>
            <option>Đang học</option>
            <option>Bảo lưu</option>
            <option>Nghỉ học</option>
          </select>
          <a class="btn" href="#form-hv">+ Thêm học viên</a>
        </div>
        <div class="card tw">
          <table>
            <thead>
              <tr>
                <th>Mã</th>
                <th>Họ tên</th>
                <th>SĐT</th>
                <th>Lớp</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>HV001</td>
                <td>Nguyễn Văn An</td>
                <td>0901 234 567</td>
                <td>IELTS 6.5 - A1</td>
                <td><span class="status-pill pill-active">Đang học</span></td>
                <td>
                  <div class="action-btns">
                    <button class="act-btn" title="Xem"><svg class="ic"><use href="#i-eye"/></svg></button>
                    <button class="act-btn" title="Sửa"><svg class="ic"><use href="#i-pen"/></svg></button>
                    <button class="act-btn del" title="Xóa"><svg class="ic"><use href="#i-trash"/></svg></button>
                  </div>
                </td>
              </tr>
              <tr>
                <td>HV002</td>
                <td>Trần Thị Bình</td>
                <td>0912 345 678</td>
                <td>TOEIC 700 - B2</td>
                <td><span class="status-pill pill-active">Đang học</span></td>
                <td>
                  <div class="action-btns">
                    <button class="act-btn" title="Xem"><svg class="ic"><use href="#i-eye"/></svg></button>
                    <button class="act-btn" title="Sửa"><svg class="ic"><use href="#i-pen"/></svg></button>
                    <button class="act-btn del" title="Xóa"><svg class="ic"><use href="#i-trash"/></svg></button>
                  </div>
                </td>
              </tr>
              <tr>
                <td>HV003</td>
                <td>Lê Minh Cường</td>
                <td>0923 456 789</td>
                <td>Giao tiếp - C1</td>
                <td><span class="status-pill pill-hold">Bảo lưu</span></td>
                <td>
                  <div class="action-btns">
                    <button class="act-btn" title="Xem"><svg class="ic"><use href="#i-eye"/></svg></button>
                    <button class="act-btn" title="Sửa"><svg class="ic"><use href="#i-pen"/></svg></button>
                    <button class="act-btn del" title="Xóa"><svg class="ic"><use href="#i-trash"/></svg></button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="pg">
            <span class="pg-info">Hiển thị 1 - 3 / 256 học viên</span>
            <div class="pg-btns">
              <button class="pg-btn" disabled>‹</button>
              <button class="pg-btn active">1</button>
              <button class="pg-btn">2</button>
              <button class="pg-btn">3</button>
              <span>...</span>
              <button class="pg-btn">26</button>
              <button class="pg-btn">›</button>
            </div>
          </div>
        </div>

        <div class="card" id="form-hv" style="margin-top:16px">
          <h3>Thêm / sửa học viên</h3>
          <div class="form">
            <label>Họ tên<input type="text" placeholder="Nhập họ tên"></label>
            <label>Ngày sinh<input type="date"></label>
            <label>Số điện thoại<input type="tel" placeholder="0901 234 567"></label>
            <label>Email<input type="email" placeholder="email@example.com"></label>
            <label>Phụ huynh<input type="text" placeholder="Tên phụ huynh"></label>
            <label>Lớp<select><option value="">-- Chọn lớp --</option></select></label>
            <label class="full-width">Địa chỉ<input type="text" placeholder="Nhập địa chỉ"></label>
          </div>
          <div class="form-actions">
            <button class="btn">Lưu</button>
            <button class="btn o">Hủy</button>
          </div>
        </div>
      </section>


      <!-- ═══════════════════════ GIÁO VIÊN ═══════════════════════ -->
      <section class="page" id="giaovien">
        <h2>Quản lý giáo viên</h2>
        <div class="toolbar">
          <input type="search" placeholder="Tìm giáo viên...">
          <select>
            <option>Tất cả bộ môn</option>
          </select>
          <a class="btn" href="#form-gv">+ Thêm giáo viên</a>
        </div>
        <div class="card tw">
          <table>
            <thead>
              <tr>
                <th>Mã</th>
                <th>Họ tên</th>
                <th>Bộ môn</th>
                <th>SĐT</th>
                <th>Số lớp</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>GV001</td>
                <td>Nguyễn Văn A</td>
                <td>IELTS</td>
                <td>0901 111 222</td>
                <td>3</td>
                <td><span class="status-pill pill-active">Đang dạy</span></td>
                <td>
                  <div class="action-btns">
                    <button class="act-btn" title="Xem"><svg class="ic"><use href="#i-eye"/></svg></button>
                    <button class="act-btn" title="Sửa"><svg class="ic"><use href="#i-pen"/></svg></button>
                  </div>
                </td>
              </tr>
              <tr>
                <td>GV002</td>
                <td>Trần Thị B</td>
                <td>TOEIC</td>
                <td>0912 333 444</td>
                <td>2</td>
                <td><span class="status-pill pill-active">Đang dạy</span></td>
                <td>
                  <div class="action-btns">
                    <button class="act-btn" title="Xem"><svg class="ic"><use href="#i-eye"/></svg></button>
                    <button class="act-btn" title="Sửa"><svg class="ic"><use href="#i-pen"/></svg></button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="card" id="form-gv" style="margin-top:16px">
          <h3>Thêm / sửa giáo viên</h3>
          <div class="form">
            <label>Họ tên<input type="text" placeholder="Nhập họ tên"></label>
            <label>Bộ môn<input type="text" placeholder="IELTS, TOEIC..."></label>
            <label>SĐT<input type="tel" placeholder="0901 234 567"></label>
            <label>Email<input type="email" placeholder="email@example.com"></label>
            <label>Lương / giờ<input type="number" placeholder="VNĐ"></label>
          </div>
          <div class="form-actions">
            <button class="btn">Lưu</button>
            <button class="btn o">Hủy</button>
          </div>
        </div>
      </section>


      <!-- ═══════════════════════ KHÓA HỌC & LỚP ═══════════════════════ -->
      <section class="page" id="khoahoc">
        <h2>Khóa học &amp; lớp học</h2>
        <div class="toolbar">
          <input type="search" placeholder="Tìm khóa học, lớp...">
          <a class="btn" href="#khoahoc">+ Thêm khóa học</a>
          <a class="btn o" href="#khoahoc">+ Mở lớp mới</a>
        </div>

        <!-- Khóa học cards -->
        <div class="course-grid">
          <div class="course-card">
            <div class="course-header ch-blue">
              <svg class="ic"><use href="#i-award"/></svg>
              <h4>IELTS</h4>
            </div>
            <div class="course-body">
              <div class="course-stat"><span>Lớp đang mở</span><strong>4</strong></div>
              <div class="course-stat"><span>Tổng học viên</span><strong>96</strong></div>
              <div class="course-stat"><span>Mức học phí</span><strong>6.5tr ₫</strong></div>
            </div>
          </div>
          <div class="course-card">
            <div class="course-header ch-green">
              <svg class="ic"><use href="#i-award"/></svg>
              <h4>TOEIC</h4>
            </div>
            <div class="course-body">
              <div class="course-stat"><span>Lớp đang mở</span><strong>3</strong></div>
              <div class="course-stat"><span>Tổng học viên</span><strong>72</strong></div>
              <div class="course-stat"><span>Mức học phí</span><strong>4.5tr ₫</strong></div>
            </div>
          </div>
          <div class="course-card">
            <div class="course-header ch-orange">
              <svg class="ic"><use href="#i-award"/></svg>
              <h4>Giao tiếp</h4>
            </div>
            <div class="course-body">
              <div class="course-stat"><span>Lớp đang mở</span><strong>3</strong></div>
              <div class="course-stat"><span>Tổng học viên</span><strong>58</strong></div>
              <div class="course-stat"><span>Mức học phí</span><strong>3.5tr ₫</strong></div>
            </div>
          </div>
          <div class="course-card">
            <div class="course-header ch-purple">
              <svg class="ic"><use href="#i-award"/></svg>
              <h4>Kids English</h4>
            </div>
            <div class="course-body">
              <div class="course-stat"><span>Lớp đang mở</span><strong>2</strong></div>
              <div class="course-stat"><span>Tổng học viên</span><strong>30</strong></div>
              <div class="course-stat"><span>Mức học phí</span><strong>3tr ₫</strong></div>
            </div>
          </div>
        </div>

        <div class="card tw">
          <h3>Danh sách lớp &amp; phân công</h3>
          <table>
            <thead>
              <tr>
                <th>Lớp</th>
                <th>Khóa học</th>
                <th>Giáo viên</th>
                <th>Lịch học</th>
                <th>Phòng</th>
                <th>Sĩ số</th>
                <th>Thao tác</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>A1</td>
                <td>IELTS 6.5</td>
                <td>Nguyễn Văn A</td>
                <td>T2, T4, T6</td>
                <td>201</td>
                <td>24/30</td>
                <td>
                  <div class="action-btns">
                    <button class="act-btn" title="Xem"><svg class="ic"><use href="#i-eye"/></svg></button>
                    <button class="act-btn" title="Sửa"><svg class="ic"><use href="#i-pen"/></svg></button>
                  </div>
                </td>
              </tr>
              <tr>
                <td>B2</td>
                <td>TOEIC 700</td>
                <td>Trần Thị B</td>
                <td>T3, T5, T7</td>
                <td>102</td>
                <td>28/30</td>
                <td>
                  <div class="action-btns">
                    <button class="act-btn" title="Xem"><svg class="ic"><use href="#i-eye"/></svg></button>
                    <button class="act-btn" title="Sửa"><svg class="ic"><use href="#i-pen"/></svg></button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>


      <!-- ═══════════════════════ ĐIỂM DANH & KẾT QUẢ ═══════════════════════ -->
      <section class="page" id="diemdanh">
        <h2>Điểm danh &amp; kết quả</h2>
        <div class="toolbar">
          <select>
            <option value="">-- Chọn lớp --</option>
            <option>IELTS 6.5 - A1</option>
            <option>TOEIC 700 - B2</option>
            <option>Giao tiếp - C1</option>
          </select>
          <input type="date">
          <button class="btn">Lưu điểm danh</button>
        </div>
        <div class="card tw">
          <h3>Điểm danh buổi học</h3>
          <table class="tt">
            <thead>
              <tr>
                <th>Học viên</th>
                <th>Có mặt</th>
                <th>Vắng</th>
                <th>Có phép</th>
                <th>Ghi chú</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Nguyễn Văn An</td>
                <td><input type="radio" name="dd1" checked></td>
                <td><input type="radio" name="dd1"></td>
                <td><input type="radio" name="dd1"></td>
                <td><input type="text" class="note-input" placeholder="Ghi chú..."></td>
              </tr>
              <tr>
                <td>Trần Thị Bình</td>
                <td><input type="radio" name="dd2" checked></td>
                <td><input type="radio" name="dd2"></td>
                <td><input type="radio" name="dd2"></td>
                <td><input type="text" class="note-input" placeholder="Ghi chú..."></td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>


      <!-- ═══════════════════════ LỊCH HỌC & THI ═══════════════════════ -->
      <section class="page" id="lichhoc">
        <h2>Lịch học &amp; thi</h2>
        <div class="toolbar">
          <select>
            <option>Tất cả lớp</option>
          </select>
          <select>
            <option>Tuần này</option>
            <option>Tuần sau</option>
            <option>Tháng này</option>
          </select>
          <button class="btn">+ Thêm lịch</button>
        </div>
        <div class="card">
          <div class="week-grid">
            <div class="week-col">
              <div class="week-day-head">Thứ 2</div>
              <div class="week-slot">
                <div class="slot-item slot-blue">
                  <strong>08:00-09:30</strong>
                  <span>IELTS A1</span>
                  <small>P.201</small>
                </div>
                <div class="slot-item slot-green">
                  <strong>14:00-15:30</strong>
                  <span>Giao tiếp C1</span>
                  <small>P.301</small>
                </div>
              </div>
            </div>
            <div class="week-col">
              <div class="week-day-head">Thứ 3</div>
              <div class="week-slot">
                <div class="slot-item slot-orange">
                  <strong>09:45-11:15</strong>
                  <span>TOEIC B2</span>
                  <small>P.102</small>
                </div>
              </div>
            </div>
            <div class="week-col">
              <div class="week-day-head">Thứ 4</div>
              <div class="week-slot">
                <div class="slot-item slot-blue">
                  <strong>08:00-09:30</strong>
                  <span>IELTS A1</span>
                  <small>P.201</small>
                </div>
                <div class="slot-item slot-purple">
                  <strong>16:00-17:30</strong>
                  <span>Kids D3</span>
                  <small>P.105</small>
                </div>
              </div>
            </div>
            <div class="week-col">
              <div class="week-day-head">Thứ 5</div>
              <div class="week-slot">
                <div class="slot-item slot-orange">
                  <strong>09:45-11:15</strong>
                  <span>TOEIC B2</span>
                  <small>P.102</small>
                </div>
              </div>
            </div>
            <div class="week-col">
              <div class="week-day-head">Thứ 6</div>
              <div class="week-slot">
                <div class="slot-item slot-blue">
                  <strong>08:00-09:30</strong>
                  <span>IELTS A1</span>
                  <small>P.201</small>
                </div>
                <div class="slot-item slot-green">
                  <strong>14:00-15:30</strong>
                  <span>Giao tiếp C1</span>
                  <small>P.301</small>
                </div>
              </div>
            </div>
            <div class="week-col">
              <div class="week-day-head">Thứ 7</div>
              <div class="week-slot">
                <div class="slot-item slot-orange">
                  <strong>09:45-11:15</strong>
                  <span>TOEIC B2</span>
                  <small>P.102</small>
                </div>
                <div class="slot-item slot-purple">
                  <strong>16:00-17:30</strong>
                  <span>Kids D3</span>
                  <small>P.105</small>
                </div>
              </div>
            </div>
            <div class="week-col">
              <div class="week-day-head">CN</div>
              <div class="week-slot">
                <div class="slot-empty">Không có lịch</div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- ═══════════════════════ TUYỂN SINH ═══════════════════════ -->
      <section class="page" id="tuyensinh">
        <h2>Tuyển sinh</h2>
        <div class="toolbar">
          <input type="search" placeholder="Tìm theo tên, SĐT...">
          <select>
            <option>Tất cả trạng thái</option>
            <option>Mới liên hệ</option>
            <option>Đã tư vấn</option>
            <option>Đã đăng ký</option>
            <option>Từ chối</option>
          </select>
          <button class="btn">+ Thêm ứng viên</button>
        </div>

        <!-- Pipeline nhanh -->
        <div class="pipeline-row">
          <div class="pipeline-card pc-new">
            <div class="pc-count">12</div>
            <div class="pc-label">Mới liên hệ</div>
          </div>
          <div class="pipeline-card pc-consult">
            <div class="pc-count">8</div>
            <div class="pc-label">Đã tư vấn</div>
          </div>
          <div class="pipeline-card pc-test">
            <div class="pc-count">5</div>
            <div class="pc-label">Đang test</div>
          </div>
          <div class="pipeline-card pc-done">
            <div class="pc-count">3</div>
            <div class="pc-label">Đã đăng ký</div>
          </div>
        </div>

        <div class="card tw">
          <table>
            <thead>
              <tr>
                <th>Họ tên</th>
                <th>SĐT</th>
                <th>Khóa quan tâm</th>
                <th>Nguồn</th>
                <th>Trạng thái</th>
                <th>Ngày liên hệ</th>
                <th>Thao tác</th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
        </div>
      </section>


      <!-- ═══════════════════════ TÀI CHÍNH ═══════════════════════ -->
      <section class="page" id="taichinh">
        <h2>Tài chính / Học phí</h2>
        <div class="toolbar">
          <input type="search" placeholder="Tìm theo tên, mã HV...">
          <select>
            <option>Tất cả trạng thái</option>
            <option>Đã thanh toán</option>
            <option>Còn nợ</option>
            <option>Quá hạn</option>
          </select>
          <select>
            <option>Tháng này</option>
            <option>Tháng trước</option>
            <option>Quý này</option>
          </select>
          <button class="btn">+ Thu học phí</button>
        </div>

        <div class="stat-row small">
          <div class="stat-card">
            <div class="stat-icon si-green">
              <svg class="ic"><use href="#i-trending"/></svg>
            </div>
            <div>
              <div class="stat-label">Đã thu</div>
              <div class="stat-value">139tr ₫</div>
            </div>
          </div>
          <div class="stat-card">
            <div class="stat-icon si-orange">
              <svg class="ic"><use href="#i-clock"/></svg>
            </div>
            <div>
              <div class="stat-label">Còn nợ</div>
              <div class="stat-value">8.2tr ₫</div>
            </div>
          </div>
          <div class="stat-card">
            <div class="stat-icon si-red">
              <svg class="ic"><use href="#i-alert"/></svg>
            </div>
            <div>
              <div class="stat-label">Quá hạn</div>
              <div class="stat-value">2.1tr ₫</div>
            </div>
          </div>
        </div>

        <div class="card tw">
          <table>
            <thead>
              <tr>
                <th>Mã HV</th>
                <th>Họ tên</th>
                <th>Lớp</th>
                <th>Học phí</th>
                <th>Đã trả</th>
                <th>Còn lại</th>
                <th>Hạn nộp</th>
                <th>Trạng thái</th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
        </div>
      </section>


      <!-- ═══════════════════════ BÁO CÁO ═══════════════════════ -->
      <section class="page" id="baocao">
        <h2>Báo cáo</h2>
        <div class="toolbar">
          <select>
            <option>Tháng này</option>
            <option>Tháng trước</option>
            <option>Quý này</option>
            <option>Năm nay</option>
          </select>
          <button class="btn"><svg class="ic" style="width:14px;height:14px"><use href="#i-download"/></svg> Xuất Excel</button>
        </div>
        <div class="report-grid">
          <div class="card report-card">
            <div class="report-icon ri-blue"><svg class="ic"><use href="#i-grad"/></svg></div>
            <h3>Báo cáo học viên</h3>
            <p>Thống kê nhập học, bảo lưu, nghỉ học theo tháng</p>
            <a href="#baocao" class="link-more">Xem chi tiết →</a>
          </div>
          <div class="card report-card">
            <div class="report-icon ri-green"><svg class="ic"><use href="#i-wallet"/></svg></div>
            <h3>Báo cáo tài chính</h3>
            <p>Doanh thu, công nợ, chi phí hoạt động</p>
            <a href="#baocao" class="link-more">Xem chi tiết →</a>
          </div>
          <div class="card report-card">
            <div class="report-icon ri-orange"><svg class="ic"><use href="#i-check"/></svg></div>
            <h3>Báo cáo điểm danh</h3>
            <p>Tỷ lệ chuyên cần, vắng mặt theo lớp</p>
            <a href="#baocao" class="link-more">Xem chi tiết →</a>
          </div>
          <div class="card report-card">
            <div class="report-icon ri-purple"><svg class="ic"><use href="#i-chart"/></svg></div>
            <h3>Báo cáo tổng hợp</h3>
            <p>Tổng quan hoạt động trung tâm</p>
            <a href="#baocao" class="link-more">Xem chi tiết →</a>
          </div>
        </div>
      </section>


      <!-- ═══════════════════════ THÔNG BÁO ═══════════════════════ -->
      <section class="page" id="thongbao">
        <h2>Quản lý thông báo</h2>
        <div class="toolbar">
          <input type="search" placeholder="Tìm thông báo...">
          <select>
            <option>Tất cả loại</option>
            <option>Thông báo</option>
            <option>Sự kiện</option>
            <option>Nhắc nhở</option>
          </select>
          <button class="btn">+ Tạo thông báo</button>
        </div>
        <div class="card tw">
          <table>
            <thead>
              <tr>
                <th>Tiêu đề</th>
                <th>Loại</th>
                <th>Đối tượng</th>
                <th>Ngày tạo</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
        </div>
      </section>


      <!-- ═══════════════════════ TÀI LIỆU ═══════════════════════ -->
      <section class="page" id="tailieu">
        <h2>Kho tài liệu</h2>
        <div class="toolbar">
          <input type="search" placeholder="Tìm tài liệu...">
          <select>
            <option>Tất cả danh mục</option>
            <option>Giáo trình</option>
            <option>Đề thi</option>
            <option>Bài tập</option>
            <option>Khác</option>
          </select>
          <button class="btn"><svg class="ic" style="width:14px;height:14px"><use href="#i-upload"/></svg> Tải lên</button>
        </div>
        <div class="file-grid">
          <div class="card file-card">
            <div class="file-icon fi-pdf">PDF</div>
            <div class="file-info">
              <strong>Giáo trình IELTS Reading</strong>
              <span>2.4 MB · 05/10/2026</span>
            </div>
            <button class="act-btn" title="Tải xuống"><svg class="ic"><use href="#i-download"/></svg></button>
          </div>
          <div class="card file-card">
            <div class="file-icon fi-doc">DOC</div>
            <div class="file-info">
              <strong>Đề thi TOEIC tháng 9</strong>
              <span>1.1 MB · 28/09/2026</span>
            </div>
            <button class="act-btn" title="Tải xuống"><svg class="ic"><use href="#i-download"/></svg></button>
          </div>
          <div class="card file-card">
            <div class="file-icon fi-xls">XLS</div>
            <div class="file-info">
              <strong>Bảng điểm lớp A1</strong>
              <span>540 KB · 10/10/2026</span>
            </div>
            <button class="act-btn" title="Tải xuống"><svg class="ic"><use href="#i-download"/></svg></button>
          </div>
        </div>
      </section>


      <!-- ═══════════════════════ SAO LƯU ═══════════════════════ -->
      <section class="page" id="saoluu">
        <h2>Sao lưu &amp; phục hồi dữ liệu</h2>
        <div class="grid g2">
          <div class="card">
            <h3>Sao lưu</h3>
            <p style="color:var(--mu);margin:12px 0">Lần sao lưu gần nhất: —</p>
            <button class="btn">Sao lưu ngay</button>
          </div>
          <div class="card">
            <h3>Phục hồi</h3>
            <div style="margin:12px 0"><input type="file"></div>
            <button class="btn o">Phục hồi dữ liệu</button>
          </div>
        </div>
      </section>

    </div>
  </div>

  <script>
    // Routing
    function updateActive() {
      const hash = location.hash || '#dashboard';
      document.querySelectorAll('.side a').forEach(a => {
        a.classList.toggle('active', a.getAttribute('href') === hash);
      });
      document.querySelectorAll('.page').forEach(p => {
        p.style.display = (p.id === hash.slice(1) || (!location.hash && p.id === 'dashboard')) ? 'block' : 'none';
      });
    }
    window.addEventListener('hashchange', updateActive);
    updateActive();

    // Close sidebar on mobile nav
    document.querySelectorAll('.side a').forEach(a => {
      a.addEventListener('click', () => {
        document.querySelector('.side')?.classList.remove('open');
      });
    });

    // Today date
    const td = document.getElementById('today-date');
    if (td) {
      const days = ['Chủ nhật','Thứ Hai','Thứ Ba','Thứ Tư','Thứ Năm','Thứ Sáu','Thứ Bảy'];
      const now = new Date();
      td.textContent = days[now.getDay()] + ', ' + now.getDate().toString().padStart(2,'0') + '/' + (now.getMonth()+1).toString().padStart(2,'0') + '/' + now.getFullYear();
    }

    // Toggle notice detail
    document.querySelectorAll('.notice-row').forEach(row => {
      row.addEventListener('click', () => {
        row.closest('.notice-item').classList.toggle('open');
      });
    });

    // Tab switching
    document.querySelectorAll('.tabs').forEach(tabGroup => {
      tabGroup.querySelectorAll('.tab').forEach(tab => {
        tab.addEventListener('click', () => {
          tabGroup.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
          tab.classList.add('active');
        });
      });
    });
  </script>
</body>
</html>