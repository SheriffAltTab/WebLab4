<?php

$connect = mysqli_connect('localhost', 'root', '', 'trainslab');
if (!$connect) {
    die('Error while connecting to db');
}

$station_id = $_GET['station_id'];

mysqli_query($connect, "DELETE FROM `station` WHERE `station`.`station_id` ='$station_id'");
header('Location: ../task.php');
?>