<?php
include 'conect.php'; // Đảm bảo đúng tên file: connect.php

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Kiểm tra nếu có mã nhân viên được gửi lên
if (isset($_GET['manv'])) {
    $manv = $_GET['manv'];

    // Truy vấn lấy thông tin nhân viên sử dụng prepare statement
    $stmt = $conn->prepare("SELECT * FROM nhanvien WHERE manv = ?");
    $stmt->bind_param("s", $manv);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Không tìm thấy nhân viên!";
        exit;
    }

    $stmt->close();
} else {
    echo "Không có mã nhân viên!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Xem hồ sơ nhân viên</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: #f8f8f8;
            padding: 20px;
        }
        h2 {
            color: #004080;
        }
        .profile {
            background-color: white;
            padding: 20px;
            width: 400px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .profile p {
            margin: 10px 0;
        }
        a {
            display: inline-block;
            margin-top: 15px;
            color: #004080;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<h2>Hồ sơ nhân viên</h2>

<div class="profile">
    <p><strong>Mã nhân viên:</strong> <?php echo htmlspecialchars($row['manv']); ?></p>
    <p><strong>Họ tên:</strong> <?php echo htmlspecialchars($row['hoten']); ?></p>
    <p><strong>Giới tính:</strong> <?php echo htmlspecialchars($row['gioitinh']); ?></p>
    <p><strong>Ngày sinh:</strong> <?php echo htmlspecialchars($row['ngaysinh']); ?></p>
    <p><strong>Phòng ban:</strong> <?php echo htmlspecialchars($row['phongban']); ?></p>
    <p><strong>Chức vụ:</strong> <?php echo htmlspecialchars($row['chucvu']); ?></p>

    <a href="danhsach.php">Quay lại danh sách</a>
</div>

</body>
</html>

<?php
$conn->close();
?>
