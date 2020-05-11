<?php
//запросы на вывод из бд, вывел в отдельный файл
try{
    $sql = 'SELECT id,full_name,phone,email,working_day,role FROM members WHERE role="Admin"';
    $pdoResult1 = $pdo->query($sql);
    $adminArr = $pdoResult1->fetchAll();
}catch (Exception $exception){
    echo "Error getting admins! " . $exception->getCode() . ' message: ' . $exception->getMessage();
    die();
}

try{
    $sql = 'SELECT id,full_name,phone,email,subject,role FROM members WHERE role="Teacher"';
    $pdoResult2 = $pdo->query($sql);
    $teacherArr = $pdoResult2->fetchAll();
}catch (Exception $exception){
    echo "Error getting teachers! " . $exception->getCode() . ' message: ' . $exception->getMessage();
    die();
}

try{
    $sql = 'SELECT id,full_name,phone,email,average_mark,role FROM members WHERE role="Student"';
    $pdoResult3 = $pdo->query($sql);
    $studentArr = $pdoResult3->fetchAll();
}catch (Exception $exception){
    echo "Error getting students! " . $exception->getCode() . ' message: ' . $exception->getMessage();
    die();
}

?>