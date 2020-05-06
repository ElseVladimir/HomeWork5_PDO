<?php

require_once "../includes/dbConnect.php";
$name = $_POST['name'];
$telNumber = $_POST['telNumber'];
$email = $_POST['email'];
$who = $_POST['who'];
$marks = $_POST['marks'];

if (empty($name)) {
    echo 'Введите имя' . '<br>';
}

if (empty($telNumber)) {
    echo 'Введите номер телефона' . '<br>';
}

if (empty($email)) {
    echo 'Введите email' . '<br>';
}

if (empty($marks)) {
    echo 'Введите свою среднюю оценку' . '<br>';
}
if ($name && $telNumber && $email && $who && $marks) {
    try {
        $sql = 'INSERT INTO members SET
           full_name = "' . $name . '" ,
           phone = "' . $telNumber . '",
           email = "' . $email . '",
           role = "' . $who . '",
           average_mark = "' . $marks . '",
           working_day = NULL,
           subject = NULL      
    ';
        $pdo->exec($sql);
    } catch (Exception $exception) {
        echo 'Error creating table' . $exception->getCode() . ' ' . $exception->getMessage();
        die();
    }
    header('Location: ../includes/complete.php');
}