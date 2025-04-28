<?php
// Kết nối đến cơ sở dữ liệu
include 'conect.php';

// Truy vấn dữ liệu nhân viên
$sql = "SELECT * FROM nhanvien";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách nhân viên</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: #f8f8f8;
            padding: 20px;
        }
        h2 {
            color: #004080;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
        th {
            background-color: #cce0ff;
        }
        tr:hover {
            background-color: #e0f0ff;
        }
        a {
            color: #004080;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<h2>Danh sách nhân viên</h2>

<table>
    <tr>
        <th>Mã NV</th>
        <th>Họ tên</th>
        <th>Giới tính</th>
        <th>Ngày sinh</th>
        <th>Phòng ban</th>
        <th>Chức vụ</th>
        <th>Hành động</th>
    </tr>

    <?php
    if ($result && $result->num_rows > 0) {
        // In từng dòng dữ liệu
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row["manv"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["hoten"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["gioitinh"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["ngaysinh"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["phongban"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["chucvu"]) . "</td>";
            echo "<td><a href='xemhoso.php?manv=" . urlencode($row["manv"]) . "'>Xem</a></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='7'>Không có nhân viên nào.</td></tr>";
    }
    ?>

</table>

</body>
</html>

<?php
// Đóng kết nối
$conn->close();
?>
