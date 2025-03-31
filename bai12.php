<!DOCTYPE html>
<html>
<head>
    <title>Bàn cờ vua</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        table {
            border-collapse: collapse;
            border: 1px solid black;
        }
        td {
            width: 50px;
            height: 50px;
        }
        .white {
            background-color: black;
        }
        .black {
            background-color: while;
        }
    </style>
</head>
<body>

<table>
    <?php
    for ($row = 0; $row < 8; $row++) {
        echo "<tr>";
        for ($col = 0; $col < 8; $col++) {
            $class = (($row + $col) % 2 == 0) ? "white" : "black";
            echo "<td class='$class'></td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>