<?php
require_once "../includes/dbConnect.php";
$name = $_POST['name'];
$telNumber = $_POST['telNumber'];
$email = $_POST['email'];
$who = $_POST['who'];
$workDay = $_POST['workDay'];

if(empty($name)){
    echo 'Введите имя'.'<br>';
}

if(empty($telNumber)){
    echo 'Введите номер телефона'.'<br>';
}

if(empty($email)){
    echo 'Введите email'.'<br>';
}

if(empty($workDay)){
    echo 'Введите день недели'.'<br>';
}
if($name && $telNumber && $email && $who && $workDay){
    try {
        $sql = 'INSERT INTO members SET
           full_name = "' . $name . '" ,
           phone = "' . $telNumber . '",
           email = "' . $email . '",
           role = "' . $who . '",
           working_day = "' . $workDay . '",
           subject = NULL,
           average_mark = NULL
    ';
        $pdo->exec($sql);
    } catch (Exception $exception) {
        echo 'Error creating table' . $exception->getCode() . ' ' . $exception->getMessage();
        die();
    }
    header('Location: ../includes/complete.php');
}