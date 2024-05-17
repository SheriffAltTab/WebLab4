<?php

    $connect = mysqli_connect('localhost', 'root', '', 'trainslab');
    if (!$connect) {
        die('Error while connecting to db');
    }

    $operator_id = $_GET['operator_id'];
    $operator = mysqli_query($connect, "SELECT * FROM `operator` WHERE `operator_id` = '$operator_id'");
    $operator = mysqli_fetch_assoc($operator);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Інформація про оператора</title>
</head>

<style>
    th, td {
        padding: 10px;
    }

    th {
        background: #38303b;
        color: white;
    }
    td {
        background: dimgray;
        color: white;
    }
</style>

<body>
    <h1>Інформація про оператора:</h1>
    <br>
    <table>
        <tr>
            <th>Ім'я оператора</th>
            <th>Контактна інформація</th>
        </tr>

        <tr>
            <td><?= $operator['operator_name'] ?></td>
            <td><?= $operator['country'], ' ', $operator['phone_number']?></td>
        </tr>
    </table>
</body>
</html>