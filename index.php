<?php
require_once "includes/dbConnect.php";
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homework: main page</title>
</head>
<body>
    <div>
        <p><a href="includes/create_db.php">Создать таблицу 'members'</a></p>
        <hr>
    </div>
    <form method="post" action="seeder/between.seeder_db.php">
        <label>Войти как:
            <select name="person">
            <option name="teacher">Преподователь</option>
            <option name="student">Студент</option>
            <option name="admin">Администратор</option>
            </select>
        </label>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>
