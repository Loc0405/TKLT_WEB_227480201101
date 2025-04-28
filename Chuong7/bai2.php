<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trường Đại học Bạc Liêu - Quản lý Nhân sự</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            display: flex;
        }
        .sidebar {
            width: 250px;
            background-color: #cce0ff;
            padding: 20px;
            box-sizing: border-box;
            height: 100vh;
            position: fixed;
        }
        .sidebar h3 {
            color: #004080;
            margin-bottom: 10px;
        }
        .sidebar a {
            display: block;
            color: black;
            padding: 8px 0;
            text-decoration: none;
            font-size: 16px;
        }
        .sidebar a:hover {
            background-color: #99c2ff;
            padding-left: 10px;
        }
        .main {
            margin-left: 270px;
            padding: 20px;
            flex: 1;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            width: 100px;
        }
        .header h1 {
            margin: 10px 0 5px;
            font-size: 24px;
            color: #004080;
        }
        .header h2 {
            font-size: 18px;
            margin: 5px 0;
        }
        .content {
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .content h3 {
            color: #004080;
        }
        .footer {
            text-align: center;
            font-size: 14px;
            margin-top: 20px;
            color: #666;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="sidebar">
        <h3><a href="https://blu.edu.vn/" target="_blank">Trang chủ</a></h3>
        
        <h3>Đơn vị trực thuộc</h3>
        <a href="khoaktcn.php">Khoa KT & CN</a>
        <a href="khoasp.php">Khoa Sư phạm</a>
        <a href="khoantt.php">Khoa CNTT</a>

        <h3>Hồ sơ nhân viên</h3>
        <a href="danhsach.php">Danh sách</a>
        <a href="xemhoso.php">Xem hồ sơ</a>
        <a href="themhoso.php">Thêm hồ sơ</a>
        <a href="suahoso.php">Sửa hồ sơ</a>
        <a href="xoahoso.php">Xóa hồ sơ</a>
        <a href="timhoso.php">Tìm hồ sơ</a>

        <h3>Quản lý tiền lương</h3>
        <a href="bangluong.php">Bảng lương</a>
        <a href="capnhathoso.php">Cập nhật hồ sơ</a>
        <a href="timkiemluong.php">Tìm kiếm</a>
        <a href="tinhluong.php">Tính lương</a>
        <a href="tinhthuong.php">Tính thưởng</a>
    </div>

    <div class="main">
        <div class="header">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSB1Ut2aUoOsD4kTsBoHEeoCBPo2qIOkmwIJA&s" alt="Logo Trường Đại học Bạc Liêu">
            <h1>TRƯỜNG ĐẠI HỌC BẠC LIÊU</h1>
            <h2>QUẢN LÝ NHÂN SỰ</h2>
        </div>

        <div class="content">
            <h3>Tên tiếng Anh:</h3>
            <p>BAC LIEU UNIVERSITY</p>
            <h3>Tên viết tắt:</h3>
            <p>Tiếng Việt: ĐHBL - Tiếng Anh: BLU</p>

            <h3>I. Giới thiệu</h3>
            <p>Trường ĐHBL là trường đại học công lập, đào tạo đa ngành, đa hệ, được thành lập theo Quyết định số 1558/QĐ-TTg ngày 24/11/2006 của Thủ tướng Chính phủ.Việc thành lập Trường ĐHBL là phù hợp theo ý chí, nguyện vọng của Đảng bộ và nhân dân tỉnh Bạc Liêu, đáp ứng yêu câu đào tạo và phát triển nguồn nhân lực chất lượng cao, phục sự nghiệp công nghiệp hoá của Bạc Liêu và vùng bán đảo cà mau</p>

            <h3>II. Chức năng nhiệm vụ</h3>
            <p>Về đào tạo: Tổ chức đào tạo đa dạng các cấp trình độ từ cao đẳng, đại học đến sau đại học và tổ chức các loại hình liên thông, vừa học vừa làm, liên kết, v.v. nhằm đáp ứng nhu cầu đào tạo ngày càng cao và đa dạng của xã hội, đặc biệt là nguồn nhân lực có chất lượng, phục vụ phát triển kinh tế, xã hội (KT-XH) của vùng Bán đảo Cà Mau và khu vực Đồng bằng sông Cửu Long.</p>
            <p>Về khoa học công nghệ: Tổ chức nghiên cứu khoa học định hướng ứng dụng, chú trọng giải quyết các vấn đề cấp bách và lâu dài trong phát triển kinh tế xã hội của địa phương và vùng. Tập trung nghiên cứu và chuyển giao công nghệ, ưu tiên giải quyết các vấn đề được xã hội đặc biệt quan tâm và thực hiện các dịch vụ khoa học phục vụ cộng đồng</p>
        </div>

        <div class="footer">
            TRƯỜNG ĐẠI HỌC BẠC LIÊU - Chất lượng - Sáng tạo - Trách nhiệm - Hội nhập
        </div>
    </div>
</div>

</body>
</html>
