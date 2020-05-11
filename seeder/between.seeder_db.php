<?php
//промежуточный файл, перенаправляет в зависимости от выбора какую форму заполнить
if(empty($_POST)){
    header('Location: ../index.php');
}

if($_POST['person'] == 'Администратор'){
    header('Location: admin.seeder_db.php');
}

if($_POST['person'] == 'Студент'){
    header('Location: student.seeder_db.php');
}

if($_POST['person'] == 'Преподователь'){
    header('Location: teacher.seeder_db.php');
}