<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reg_site.css">
    <title>Регистрация на сайт</title>
</head>
<body>
    <div class="container">
        <form action="connect_site.php" class="form-reg" method="POST">
            <h1>Регистрация</h1>
            <label for="login" class="group">Логин</label>
            <input type="text" name="login" id="login" class="group" pattern="[\x1F-\xBF]*" required>
            <br>
            <label for="password" class="group">Пароль</label>
            <input type="password" name="password" id="password" class="group" minlength="6" pattern="[\x1F-\xBF]*" title="Не менее 6 символов" required>
            <br>
            <input type="checkbox" name="save" id="save">Сохранить данные
            <br>
            <center><button class="btn" type="submit">Зарегистрироваться</button></center>
            <br>
            <a href="enter_site.php">Уже зарегистрированы?</a>
        </form>
    </div>
</body>
</html>