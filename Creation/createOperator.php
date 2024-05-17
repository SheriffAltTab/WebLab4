<?php
$connect = mysqli_connect('localhost', 'root', '', 'trainslab');
if (!$connect) {
    die('Error while connecting to db');
}

$operator_id = $_POST['operator_id'];
$operator_name = $_POST['operator_name'];
$foundation_date = $_POST['foundation_date'];
$country = $_POST['country'];
$phone_number = $_POST['phone_number'];

mysqli_query($connect, "INSERT INTO `operator` (`operator_id`, `operator_name`, `foundation_date`, `country`, `phone_number`) VALUES ('$operator_id', '$operator_name', '$foundation_date', '$country', '$phone_number') ");
header('Location: ../task.php');
?>
