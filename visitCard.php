<?php
//Этот файл показывает визитки
require_once "includes/dbConnect.php";
require_once "classes/Person.php";
require_once "classes/Student.php";
require_once "classes/Teacher.php";
require_once "classes/Admin.php";

if(empty($_GET['id'])){
    header('Location: index.php');
}

?>
<?php
    try{
    $sql = 'SELECT id,full_name,phone,email,working_day,role,subject,average_mark FROM members WHERE id='.$_GET['id'];
    $pdoResult1 = $pdo->query($sql);
    $arrays = $pdoResult1->fetchAll();
    }catch (Exception $exception){
    echo "Error getting admins! " . $exception->getCode() . ' message: ' . $exception->getMessage();
    die();
    }
?>

<?php if($_GET['role'] == 'Admin'):?>
        <?php foreach ($arrays as $admin) :?>
            <?php $adm = new Admin($_GET['id'], $admin['full_name'],$admin['phone'],$admin['email'],$admin['role'],$admin['working_day']); ?>
            <div><?= $adm->getVisitCardAdmin();?></div><br>
        <?php endforeach; ?>
<?php endif; ?>

<?php if($_GET['role'] == 'Teacher'):?>
    <?php foreach ($arrays as $teacher) :?>
        <?php $teach = new Teacher($_GET['id'],$teacher['full_name'],$teacher['phone'],$teacher['email'],$teacher['role'],$teacher['subject']); ?>
        <div><?= $teach->getVisitCardTeacher();?></div><br>
    <?php endforeach; ?>
<?php endif; ?>

<?php if($_GET['role'] == 'Student'):?>
    <?php foreach ($arrays as $student) :?>
        <?php $stud = new Student($_GET['id'],$student['full_name'],$student['phone'],$student['email'],$student['role'],$student['average_mark']); ?>
        <div><?= $stud->getVisitCardStudent();?></div><br>
    <?php endforeach; ?>
<?php endif; ?>
