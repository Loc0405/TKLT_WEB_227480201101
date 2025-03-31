<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
    width: 300px;
    margin: 100px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="email"], input[type="password"], input[type="text"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    width: 100%;
    max-width: ;
}

input[type="submit"]:hover {
    background-color: #3e8e41;
}
    </style>

</head>
<body>
<div class="container">
        <h2>Đăng nhập thành viên</h2>
        <form action="login.php" method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="password" required><br><br>

            <label for="maso">Mã số:</label>
            <input type="text" id="maso" name="maso" required><br><br>

            <input type="submit" value="Đăng nhập" >
            <input type="submit" value="Đăng ký" style=" margin-top: 10px">
        </form>
    </div>
</body>
</html>