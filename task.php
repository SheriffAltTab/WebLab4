<?php

$connect = mysqli_connect('localhost', 'root', '', 'trainslab');
if (!$connect) {
    die('Error while connecting to db');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trains lab</title>
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
    <table>
        <tr>
            <th>ID</th>
            <th>Номер поїзда</th>
            <th>Назва поїзда</th>
            <th>Тип поїзда</th>
            <th>Час відправлення</th>
            <th>Час прибуття</th>
            <th>Тривалість поїздки (в хвилинах)</th>
            <th>Дата створення поїзду</th>
            <th>ID оператора</th>
        </tr>
        <tr>
            <?php
            $train = mysqli_query($connect, "SELECT * FROM `train` ORDER BY `id` ASC");
            $train = mysqli_fetch_all($train);
            foreach ($train as $train){
                ?>

                <tr>
                    <td><?= $train[0] ?></td>
                    <td><?= $train[1] ?></td>
                    <td><?= $train[2] ?></td>
                    <td><?= $train[3] ?></td>
                    <td><?= $train[4] ?></td>
                    <td><?= $train[5] ?></td>
                    <td><?= $train[6] ?></td>
                    <td><?= $train[7] ?></td>
                    <td><?= $train[8] ?></td>
                    <td><a style="color: white" href="Update/updateTrain.php?id=<?= $train[0] ?>">Редагувати</a></td>
                    <td style="background: #38303b"><a style="color: red" href="deleteTrain.php?id=<?= $train[0] ?>">Видалити</a></td>
                </tr>
                <?php
            }
        ?>
    </table>

    <h3>Додати новий поїзд</h3>
    <form action="Creation/createTrain.php" method="post">
        <p>ID</p>
        <input type="number" name="id">
        <p>Номер поїзда</p>
        <input type="text" name="train_num">
        <p>Назва поїзда</p>
        <input type="text" name="train_name">
        <p>Тип поїзда</p>
        <input type="text" name="train_type">
        <p>Час відправлення</p>
        <input type="time" name="departure_time">
        <p>Час прибуття</p>
        <input type="time" name="arrival_time">
        <p>Тривалість поїздки (в хвилинах)</p>
        <input type="number" name="travel_duration">
        <p>Дата створення поїзду</p>
        <input type="date" name="created_at">
        <p>ID оператора</p>
        <input type="number" name="operator_id"> <br> <br>
        <button type="submit">Додати</button>
    </form>

    <br>

    <table>
        <tr>
            <th>ID оператора</th>
            <th>Ім'я оператора</th>
            <th>Дата заснування оператора</th>
            <th>Країна</th>
            <th>Мобільний номер</th>
        </tr>
        <tr>
            <?php
            $operator = mysqli_query($connect, "SELECT * FROM `operator`");
            $operator = mysqli_fetch_all($operator);
            foreach ($operator as $operator){
            ?>

        <tr>
            <td><?= $operator[0] ?></td>
            <td><?= $operator[1] ?></td>
            <td><?= $operator[2] ?></td>
            <td><?= $operator[3] ?></td>
            <td><?= $operator[4] ?></td>
            <td><a style="color: white" href="Update/updateOperator.php?operator_id=<?= $operator[0] ?>">Редагувати</a></td>
            <td style="background: #38303b"><a style="color: red" href="deleteOperator.php?operator_id=<?= $operator[0] ?>">Видалити</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <h3>Додати нового оператора</h3>
    <form action="Creation/createOperator.php" method="post">
        <p>ID оператора</p>
        <input type="number" name="operator_id">
        <p>Ім'я оператора</p>
        <input type="text" name="operator_name">
        <p>Дата заснування оператора</p>
        <input type="date" name="foundation_date">
        <p>Країна</p>
        <input type="text" name="country">
        <p>Мобільний номер</p>
        <input type="text" name="phone_number"> <br> <br>
        <button type="submit">Додати</button>
    </form>
    <br>

    <table>
        <tr>
            <th>ID станції</th>
            <th>Назва станції</th>
        </tr>
        <tr>
            <?php
            $station = mysqli_query($connect, "SELECT * FROM `station`");
            $station = mysqli_fetch_all($station);
            foreach ($station as $station){
            ?>

        <tr>
            <td><?= $station[0]?></td>
            <td><?= $station[1]?></td>
            <td><a style="color: white" href="Update/updateStation.php?station_id=<?= $station[0] ?>">Редагувати</a></td>
            <td style="background: #38303b"><a style="color: red" href="deleteStation.php?station_id=<?= $station[0] ?>">Видалити</a></td>
        </tr>
        <?php
        }

        ?>
    </table>
    <br>

    <h3>Додати нову станцію</h3>
    <form action="Creation/createStation.php" method="post">
        <p>ID станції</p>
        <input type="number" name="station_id">
        <p>Назва станції</p>
        <input type="text" name="station_name"> <br> <br>
        <button type="submit">Додати</button>
    </form>


</body>
</html>
