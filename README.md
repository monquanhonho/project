Bước 3: Luồng làm việc hằng ngày của các thành viênCác thành viên sẽ không làm việc trực tiếp trên main, mà tự tạo branch riêng cho từng tính năng:1.Kéo code mới nhất từ GitHub về máy:Mỗi khi bắt đầu tính năng mới.Thành viên chạy lệnh trên máy cá nhân:Bashgit checkout main
git pull origin main
2.Tạo nhánh (branch) riêng cho tính năng:Ví dụ: nhanh-chuc-nang-A.Tạo và chuyển sang nhánh mới để viết code:Bashgit checkout -b feature/chuc-nang-A
3.Commit và Push nhánh riêng lên GitHub:Không push trực tiếp lên main.Sau khi viết xong code và test thành công:Bashgit add .
git commit -m "Thêm chức năng A"
git push origin feature/chuc-nang-A
4.Tạo Pull Request (PR) trên GitHub:Chờ bạn kiểm duyệt.Thành viên truy cập giao diện repository trên GitHub, chọn nút Compare & pull request vừa xuất hiện, sau đó gán bạn làm người review (Reviewers).5.Review code và Merge:Dành cho Trưởng dự án (Bạn).Bạn truy cập vào tab Pull requests trên GitHub.Vào xem các thay đổi ở tab Files changed.Nếu ổn: Nhấn Approve và nhấn nút Merge pull request để gộp code vào main.Nếu cần sửa: Nhấn Request changes và comment yêu cầu thành viên chỉnh sửa lại.