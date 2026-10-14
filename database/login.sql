CREATE TABLE IF NOT EXISTS login (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ho_ten VARCHAR(100) NOT NULL,
    username VARCHAR(100) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(20) DEFAULT 'student'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Thêm sẵn 1 tài khoản admin mẫu
INSERT INTO login (ho_ten, username, email, password, role) 
VALUES ('Quản Trị Viên', 'admin', 'admin@gmail.com', 'Thang36cv', 'admin');
VALUES ('Học Viên', 'hocvien', 'hocvien@gmail.com', 'Thang36cv', 'student');