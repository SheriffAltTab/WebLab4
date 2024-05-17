<?php

$connect = mysqli_connect('localhost', 'root', '', 'trainslab');
if (!$connect) {
    die('Error while connecting to db');
}

$st_id_hid = $_POST['st_id_hid'];
$station_id = $_POST['station_id'];
$station_name = $_POST['station_name'];

mysqli_query($connect, "UPDATE `station` SET `station_id` = '$station_id', `station_name` = '$station_name' WHERE `station`.`station_id` = $st_id_hid ");
header('Location: ../task.php');
?>