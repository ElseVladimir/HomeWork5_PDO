<?php

require_once "../includes/dbConnect.php";
$name = $_POST['name'];
$telNumber = $_POST['telNumber'];
$email = $_POST['email'];
$who = $_POST['who'];
$subject = $_POST['subject'];

if (empty($name)) {
    echo 'Введите имя' . '<br>';
}

if (empty($telNumber)) {
    echo 'Введите номер телефона' . '<br>';
}

if (empty($email)) {
    echo 'Введите email' . '<br>';
}

if (empty($subject)) {
    echo 'Введите преподаваемый предмет' . '<br>';
}
if ($name && $telNumber && $email && $who && $subject) {
    try {
        $sql = 'INSERT INTO members SET
           full_name = "' . $name . '" ,
           phone = "' . $telNumber . '",
           email = "' . $email . '",
           role = "' . $who . '",
           subject = "' . $subject . '",
           average_mark = NULL,
           working_day = NULL   
    ';
        $pdo->exec($sql);
    } catch (Exception $exception) {
        echo 'Error creating table' . $exception->getCode() . ' ' . $exception->getMessage();
        die();
    }
    header('Location: ../includes/complete.php');
}