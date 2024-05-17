<?php

    $connect = mysqli_connect('localhost', 'root', '', 'trainslab');
    if (!$connect) {
        die('Error while connecting to db');
    }

    $id = $_GET['id'];
    $train = mysqli_query($connect, "SELECT * FROM `train` WHERE `id` = '$id'");
    $train = mysqli_fetch_assoc($train);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Редагування поїзду</title>
</head>
<body>
    <h3>Редагування поїзду</h3>
    <form action="../Edit/editTrain.php" method="post">
        <input type="hidden" name="id_hid" value="<?= $train['id']?>">
        <p>ID</p>
        <input type="number" name="id" value="<?= $train['id']?>">
        <p>Номер поїзда</p>
        <input type="text" name="train_num" value="<?= $train['train_num']?>">
        <p>Назва поїзда</p>
        <input type="text" name="train_name" value="<?= $train['train_name']?>">
        <p>Тип поїзда</p>
        <input type="text" name="train_type" value="<?= $train['train_type']?>">
        <p>Час відправлення</p>
        <input type="time" name="departure_time" value="<?= $train['departure_time']?>">
        <p>Час прибуття</p>
        <input type="time" name="arrival_time" value="<?= $train['arrival_time']?>">
        <p>Тривалість поїздки (в хвилинах)</p>
        <input type="number" name="travel_duration" value="<?= $train['travel_duration']?>">
        <p>Дата створення поїзду</p>
        <input type="date" name="created_at" value="<?= $train['created_at']?>">
        <p>ID оператора</p>
        <input type="number" name="operator_id" value="<?= $train['operator_id']?>">
        <br> <br>
        <button type="submit">Відредагувати</button>
    </form>
</body>
</html>