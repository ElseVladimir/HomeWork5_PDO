<?php
//форма для админов
require_once "../includes/dbConnect.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Заполнить таблицу администратора</title>
</head>
<body>
    <form method="post" action="../confirm/admin.confirm.php">
        <label>Ваше имя и фамилия: <input type="text" name="name"></label><br>
        <label>Номер телефона: </label>: <input type="text" name="telNumber"></label><br>
        <label>Email: <input type="text" name="email"></label><br>
        <label>Кто вы: <input type="text" name="who" readonly value="Admin"></label><br>
        <label>Рабочий день: <input type="text" name="workDay"></label><br>
        <input type="submit" value="send">
    </form>
</body>
</html>
