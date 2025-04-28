<?php
// Include database connection (replace with your actual database connection)
include('conect.php');

// Check if an employee ID is provided
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch employee data from the database to show details (optional)
    $sql = "SELECT * FROM employees WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $employee = mysqli_fetch_assoc($result);

        // Handle form submission for deleting the record
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // SQL query to delete the employee record
            $delete_sql = "DELETE FROM employees WHERE id = $id";
            
            if (mysqli_query($conn, $delete_sql)) {
                $message = "Employee record deleted successfully!";
                // Redirect to another page (e.g., list of employees) after deletion
                header("Location: danhsach.php"); // Adjust the URL as needed
                exit();
            } else {
                $message = "Error: " . mysqli_error($conn);
            }
        }
    } else {
        die("Employee not found.");
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
    <title>Xóa Hồ Sơ Nhân Viên</title>
    <style>
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
        .message {
            color: green;
            font-weight: bold;
            margin-top: 20px;
        }
        .warning {
            color: red;
            font-weight: bold;
            margin-top: 20px;
        }
        .btn {
            background-color: #d9534f;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        .btn:hover {
            background-color: #c9302c;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Xóa Hồ Sơ Nhân Viên</h1>

    <?php if (isset($message)): ?>
        <div class="message"><?php echo $message; ?></div>
    <?php endif; ?>

    <p class="warning">Bạn chắc chắn muốn xóa hồ sơ nhân viên <strong><?php echo $employee['name']; ?></strong>?</p>

    <form method="POST" action="xoahoso.php?id=<?php echo $employee['id']; ?>">
        <button type="submit" class="btn">Xóa Hồ Sơ</button>
    </form>

    <a href="danhsach.php">Trở lại danh sách nhân viên</a>
</div>

</body>
</html>
