<?php
$connect = mysqli_connect('localhost', 'root', '', 'Reg_conference');

$errors = array();

if (isset($_POST['login'])){
    $login = $_POST['login'];
    $password = $_POST['password'];
}

$user_check_query = "SELECT * FROM users WHERE login='$login' LIMIT 1";
$result = mysqli_query($connect, $user_check_query);
$user = mysqli_fetch_assoc($result);

if ($user){
    if ($user['login'] === $login){
        array_push($errors, "Пользователь с таким логином уже существует");
    }
}

if (count($errors) == 0){
$query = "INSERT INTO users (login, password)
VALUES('$login', '$password')";
mysqli_query($connect, $query);
$_SESSION['login'] = $login;
$_SESSION['success'] = "Вы зарегистрировались";
header('location: enter_site.php');
}
?>

<?php if (count($errors) > 0) : ?>
    <div class="error">
        <?php foreach ($errors as $error) : ?>
            <p><?php echo $error ?></p>
        <?php endforeach ?>
    </div>
<?php endif ?>