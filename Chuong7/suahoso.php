<?php
// Include database connection (replace with your actual database connection)
include('conect.php');

// Check if an employee ID is provided
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch employee data from the database
    $sql = "SELECT * FROM employees WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $employee = mysqli_fetch_assoc($result);
    } else {
        die("Employee not found.");
    }

    // Handle form submission for updating employee data
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $department = $_POST['department'];
        $position = $_POST['position'];
        
        // SQL query to update the employee record
        $update_sql = "UPDATE employees SET name='$name', dob='$dob', email='$email', department='$department', position='$position' WHERE id=$id";
        
        if (mysqli_query($conn, $update_sql)) {
            $message = "Employee record updated successfully!";
        } else {
            $message = "Error: " . mysqli_error($conn);
        }
    }

} else {
    die("Employee ID not provided.");
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Hồ Sơ Nhân Viên</title>
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
    <h1>Sửa Hồ Sơ Nhân Viên</h1>
    
    <?php if (isset($message)): ?>
        <div class="message"><?php echo $message; ?></div>
    <?php endif; ?>

    <form method="POST" action="suahoso.php?id=<?php echo $employee['id']; ?>">
        <div class="form-group">
            <label for="name">Họ và Tên:</label>
            <input type="text" id="name" name="name" value="<?php echo $employee['name']; ?>" required>
        </div>

        <div class="form-group">
            <label for="dob">Ngày Sinh:</label>
            <input type="date" id="dob" name="dob" value="<?php echo $employee['dob']; ?>" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $employee['email']; ?>" required>
        </div>

        <div class="form-group">
            <label for="department">Khoa/Bộ môn:</label>
            <select id="department" name="department" required>
                <option value="Khoa KT & CN" <?php if ($employee['department'] == 'Khoa KT & CN') echo 'selected'; ?>>Khoa KT & CN</option>
                <option value="Khoa Sư phạm" <?php if ($employee['department'] == 'Khoa Sư phạm') echo 'selected'; ?>>Khoa Sư phạm</option>
                <option value="Khoa CNTT" <?php if ($employee['department'] == 'Khoa CNTT') echo 'selected'; ?>>Khoa CNTT</option>
            </select>
        </div>

        <div class="form-group">
            <label for="position">Chức vụ:</label>
            <input type="text" id="position" name="position" value="<?php echo $employee['position']; ?>" required>
        </div>

        <button type="submit" class="btn">Cập Nhật Hồ Sơ</button>
    </form>
</div>

</body>
</html>
