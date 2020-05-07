<?php
require_once "includes/dbConnect.php";
require_once "classes/Person.php";
require_once "classes/Student.php";
require_once "classes/Teacher.php";
require_once "classes/Admin.php";

try{
    $sql = 'SELECT id,full_name,phone,email,working_day,role FROM members WHERE role="Admin" ';
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
        <label>Внести данные:
            <select name="person">
            <option name="teacher">Преподователь</option>
            <option name="student">Студент</option>
            <option name="admin">Администратор</option>
            </select>
        </label>
        <input type="submit" value="Отправить">
    </form>
    <hr>
    <h3>Список админов</h3>
        <?php foreach ($adminArr as $admin) :?>
            <?php $adm = new Admin($admin['full_name'],$admin['phone'],$admin['email'],$admin['role'],$admin['working_day']); ?>
            <div>Имя: <?= $adm->getNameAdmin(); ?></div><br>
            <div>Визитка: <?= $adm->getVisitCardAdmin();?></div><br>
        <?php endforeach; ?>
    <hr>
        <h3>Список преподователей</h3>
        <?php foreach ($teacherArr as $teacher) :?>
            <?php $teach = new Teacher($teacher['full_name'],$teacher['phone'],$teacher['email'],$teacher['role'],$teacher['subject']); ?>
            <div>Имя: <?= $teach->getNameTeacher(); ?></div><br>
            <div>Визитка: <?= $teach->getVisitCardTeacher();?></div><br>
        <?php endforeach; ?>
    <hr>
        <h3>Список студентов</h3>
        <?php foreach ($studentArr as $student) :?>
            <?php $stud = new Student($student['full_name'],$student['phone'],$student['email'],$student['role'],$student['average_mark']); ?>
            <div>Имя: <?= $stud->getNameStudent(); ?></div><br>
            <div>Визитка: <?= $stud->getVisitCardStudent();?></div><br>
        <?php endforeach; ?>

</body>
</html>
