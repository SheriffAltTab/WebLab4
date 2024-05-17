<?php

$connect = mysqli_connect('localhost', 'root', '', 'trainslab');
if (!$connect) {
    die('Error while connecting to db');
}

$operator_id = $_GET['operator_id'];

mysqli_query($connect, "DELETE FROM `operator` WHERE `operator`.`operator_id` ='$operator_id'");
header('Location: ../task.php');
?>