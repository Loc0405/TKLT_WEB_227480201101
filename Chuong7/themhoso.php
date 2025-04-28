<?php
// Include database connection (replace with your actual database connection)
include('conect.php');

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form input values
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $position = $_POST['position'];
    
    // SQL query to insert new employee record into the database
    $sql = "INSERT INTO employees (name, dob, email, department, position) VALUES ('$name', '$dob', '$email', '$department', '$position')";
    
    if (mysqli_query($conn, $sql)) {
        $message = "Employee record added successfully!";
    } else {
        $message = "Error: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Hồ Sơ Nhân Viên</title>
    <style>
        /* Add styles as necessary */
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }
        .form-group select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }
        .btn {
            background-color: #004080;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        .btn:hover {
            background-color: #003366;
        }
        .message {
            color: green;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Thêm Hồ Sơ Nhân Viên</h1>
    
    <?php if (isset($message)): ?>
        <div class="message"><?php echo $message; ?></div>
    <?php endif; ?>

    <form method="POST" action="themhoso.php">
        <div class="form-group">
            <label for="name">Họ và Tên:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="dob">Ngày Sinh:</label>
            <input type="date" id="dob" name="dob" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="department">Khoa/Bộ môn:</label>
            <select id="department" name="department" required>
                <option value="Khoa KT & CN">Khoa KT & CN</option>
                <option value="Khoa Sư phạm">Khoa Sư phạm</option>
                <option value="Khoa CNTT">Khoa CNTT</option>
            </select>
        </div>

        <div class="form-group">
            <label for="position">Chức vụ:</label>
            <input type="text" id="position" name="position" required>
        </div>

        <button type="submit" class="btn">Thêm Hồ Sơ</button>
    </form>
</div>

</body>
</html>
