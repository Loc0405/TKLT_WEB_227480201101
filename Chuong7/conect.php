<?php
$host = 'localhost';
$user = 'root';       // Tài khoản MySQL (thường là root)
$pass = '';           // Mật khẩu MySQL (nếu có)
$db   = 'quanly_nhansu'; // Tên database

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die('Kết nối thất bại: ' . $conn->connect_error);
}

echo 'Kết nối thành công!';
?>
