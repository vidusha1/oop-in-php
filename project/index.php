<?php

require_once './includes/class_autoload.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Calculator</title>
</head>
<body>
    <form action="includes/calc.inc.php" method="POST">
        <p>Calculator</p>
        <input type="number" name="num1" placeholder="First Number">
        <select name="oprt" id="">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="div">/</option>
            <option value="mul">*</option>
        </select>
        <input type="number" name="num2" placeholder="Second Number">
        <button type="submit" name="submit">Calculate</button>
    </form>
</body>
</html>