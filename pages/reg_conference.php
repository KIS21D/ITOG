<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="reg_conference.css">
    <title>Регистрация на конференцию</title>
</head>
<body>
    <div class="container">
        <form action="connect_conference.php" class="form-conference" method="POST">
            <h1>Регистрация на конференцию</h1>
            <label for="S_name">Фамилия</label>
            <input type="text" name="S_name" class="group" pattern="^[А-Яа-яЁё\s]+$" title="Только кириллица" required>
            <br>
            <label for="F_name">Имя</label>
            <input type="text" name="F_name" class="group" pattern="^[А-Яа-яЁё\s]+$" title="Только кириллица" required>
            <br>
            <label for="Ot_name">Отчество</label>
            <input type="text" name="Ot_name" class="group" pattern="^[А-Яа-яЁё\s]+$" title="Только кириллица" required>
            <br>
            <label for="tel">Телефон</label>
            <input type="tel" name="tel" class="group" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" title="Номер должен начинаться с +7 и состоять из 11 символов" required>
            <br>
            <label for="email">Email</label>
            <input type="email" name="email" class="group" required>
            <br>
            <label for="section">Выберите секцию</label>
            <select name="section" class="group">
                <option value="Math">Математика</option>
                <option value="Phys">Физика</option>
                <option value="Inform">Информатика</option>
            </select>
            <br>
            <label for="birthday">День рождения</label>
            <input type="date" name="birthday" class="group">
            <br>
            <label for="report">У вас доклад?</label>
            <label for="yes" class="radio">Да</label>
            <input type="radio" name="report" class="group" value="Yes" id="yes" onclick="document.getElementById('dvtext').style='display: block'">
            <label for="no" class="radio">Нет</label>
            <input type="radio" name="report" class="group" value="No" id="no" onclick="document.getElementById('dvtext').style='display: none'">
            <br>
            <div id="dvtext" style="display: none">
                <center><textarea name="theme" id="theme" cols="35" rows="2"></textarea></center>
            </div>
            <center><button class="btn" type="submit">Зарегистрироваться</button></center>
        </form>
    </div>
</body>
</html>