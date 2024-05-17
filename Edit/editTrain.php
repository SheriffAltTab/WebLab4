<?php

$connect = mysqli_connect('localhost', 'root', '', 'trainslab');
if (!$connect) {
    die('Error while connecting to db');
}

$id_hid = $_POST['id_hid'];
$id = $_POST['id'];
$train_num = $_POST['train_num'];
$train_name = $_POST['train_name'];
$train_type = $_POST['train_type'];
$departure_time = $_POST['departure_time'];
$arrival_time = $_POST['arrival_time'];
$travel_duration = $_POST['travel_duration'];
$created_at = $_POST['created_at'];
$operator_id = $_POST['operator_id'];

mysqli_query($connect, "UPDATE `train` SET `id` = '$id', `train_num` = '$train_num', `train_name` = '$train_name', `train_type` = '$train_type', `departure_time` = '$departure_time', `arrival_time` = '$arrival_time', `travel_duration` = '$travel_duration', `created_at` = '$created_at', `operator_id` = '$operator_id' WHERE `train`.`id` = '$id_hid' ");
header('Location: ../task.php');
?>