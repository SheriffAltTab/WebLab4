<?php

    $connect = mysqli_connect('localhost', 'root', '', 'trainslab');
    if (!$connect) {
        die('Error while connecting to db');
    }

    $operator_id = $_GET['operator_id'];
    $operator = mysqli_query($connect, "SELECT * FROM `operator` WHERE `operator_id` = '$operator_id'");
    $operator = mysqli_fetch_assoc($operator);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Редагування поїзду</title>
</head>
<body>
    <h3>Редагувати оператора</h3>
    <form action="../Edit/editOperator.php" method="post">
        <input type="hidden" name="op_id_hid" value="<?= $operator['operator_id']?>">
        <p>ID оператора</p>
        <input type="number" name="operator_id" value="<?= $operator['operator_id']?>">
        <p>Ім'я оператора</p>
        <input type="text" name="operator_name" value="<?= $operator['operator_name']?>">
        <p>Дата заснування оператора</p>
        <input type="date" name="foundation_date" value="<?= $operator['foundation_date']?>">
        <p>Країна</p>
        <input type="text" name="country" value="<?= $operator['country']?>">
        <p>Мобільний номер</p>
        <input type="number" name="phone_number" value="<?= $operator['phone_number']?>"> <br> <br>
        <button type="submit">Відредагувати</button>
    </form>
</body>
</html>