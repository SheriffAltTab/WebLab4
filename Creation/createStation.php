<?php
$connect = mysqli_connect('localhost', 'root', '', 'trainslab');
if (!$connect) {
    die('Error while connecting to db');
}

$station_id = $_POST['station_id'];
$station_name = $_POST['station_name'];

mysqli_query($connect, "INSERT INTO `station` (`station_id`, `station_name`) VALUES ('$station_id', '$station_name') ");
header('Location: ../task.php');
?>