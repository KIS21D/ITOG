<?php
$connect = mysqli_connect('localhost', 'root', '', 'Reg_conference');

$errors = array();

if (isset($_POST['S_name'])){
    $S_name = $_POST['S_name'];
    $F_name = $_POST['F_name'];
    $Ot_name = $_POST['Ot_name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $section = $_POST['section'];
    $report = $_POST['report'];
}

$query = "INSERT INTO users_conference (S_name, F_name, Ot_name, tel, email, section, report)
VALUES('$S_name', '$F_name', '$Ot_name', '$tel', '$email', '$section', '$report')";
mysqli_query($connect, $query);
$_SESSION['F_name'] = $F_name;
$_SESSION['success'] = "Вы зарегистрировались";
header('location: table_conference.php');
?>
