<?php
$connect = mysqli_connect('localhost', 'root', '', 'Reg_conference');

if (isset($_POST['login'])){
    $login = $_POST['login'];
    $password = $_POST['password'];
}

$user_check_query = "SELECT * FROM users WHERE login='$login' LIMIT 1";
$result = mysqli_query($connect, $user_check_query);
$user = mysqli_fetch_assoc($result);

if ($user){
    if ($user['login'] === $login and $user['password'] === $password) {
        $_SESSION['login'] = $login;
        $_SESSION['success'] = "Вы вошли";
        header('location: ../index.php');
    }
    else{
        echo 'Неправильный логин или пароль!';
    }
}
?>
