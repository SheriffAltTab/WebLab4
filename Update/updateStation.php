<?php

    $connect = mysqli_connect('localhost', 'root', '', 'trainslab');
    if (!$connect) {
        die('Error while connecting to db');
    }

    $station_id = $_GET['station_id'];
    $station = mysqli_query($connect, "SELECT * FROM `station` WHERE `station_id` = '$station_id'");
    $station = mysqli_fetch_assoc($station);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Редагування поїзду</title>
</head>
<body>
    <h3>Редагувати станцію</h3>
    <form action="../Edit/editStation.php" method="post">
        <input type="hidden" name="st_id_hid" value="<?= $station['station_id']?>">
        <p>ID станції</p>
        <input type="number" name="station_id" value="<?= $station['station_id']?>">
        <p>Назва станції</p>
        <input type="text" name="station_name" value="<?= $station['station_name']?>">
        <br> <br>
        <button type="submit">Відредагувати</button>
    </form>
</body>
</html>