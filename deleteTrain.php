<?php

$connect = mysqli_connect('localhost', 'root', '', 'trainslab');
if (!$connect) {
    die('Error while connecting to db');
}

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `train` WHERE `train`.`id` ='$id'");
header('Location: ../task.php');
?>