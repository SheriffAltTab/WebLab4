<?php

$connect = mysqli_connect('localhost', 'root', '', 'trainslab');
if (!$connect) {
    die('Error while connecting to db');
}

$op_id_hid = $_POST['op_id_hid'];
$operator_id = $_POST['operator_id'];
$operator_name = $_POST['operator_name'];
$foundation_date = $_POST['foundation_date'];
$country = $_POST['country'];
$phone_number = $_POST['phone_number'];

mysqli_query($connect, "UPDATE `operator` SET `operator_id` = '$operator_id', `operator_name` = '$operator_name', `foundation_date` = '$foundation_date', `country` = '$country', `phone_number` = '$phone_number' WHERE `operator`.`operator_id` = '$op_id_hid' ");
header('Location: ../task.php');
?>