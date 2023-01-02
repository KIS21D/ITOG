<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>МОЙ САЙТ</title>
</head>
<body>
    <header>
        <div class="header_logo">
            <p>
                Мой сайт
            </p>
        </div>
        <nav>
            <div class="topnav" id="myTopnav">
                <a href="index.php">Главная</a>
                <a href="index.php#about">О сайте</a>
                <a href="index.php#gallery">Фотоальбом</a>
                <a href="index.php#conference">Регистрация на конференцию</a>
                <a href="index.php#web-test">Тест</a>
                <a href="#" id="menu" class="icon">&#9776;</a>
            </div>
            <div>
                <a href="pages/reg_site.php" id="reg_site">Вход/Регистрация</a>
            </div>
        </nav>
    </header>
    <main>
        <div class="main_welcome">
            <h1>ДОБРО ПОЖАЛОВАТЬ НА ЭТОТ <span class="fantastic">ВОСХИТИТЕЛЬНЫЙ САЙТ</span></h1>
            <p>Этот сайт исключительно для того, чтобы радовать людей (ну и для зачета, конечно)</p>
        </div>
        <div class="wrapper">
            <div class="main_about" id="about">
                <div class="about_left">
                    <img class="mw-100" src="img/internet.png" width="70%" alt="internet">
                </div>
                <div class="about_right">
                        <h1>О сайте</h1>
                        <p>Сайт создан студентом университета "Дубна" Кузнецовым Иваном Сергеевичом для
                            усвоения знаний по предмету "Веб-технологии".
                        </p>
                        <ul>
                            <li>Цель - <span><i>создание сайта</i></span></li>
                            <li>Средства - <span><i>языки html, javascript</i></span></li>
                            <li>Результат - <span><i>зачет по дисциплине</i></span></li>
                        </ul>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="main_work" id="gallery">
                <h1>Фотоальбом</h1>
                <div class="line"></div>
                <div class="gallery">
                    <div class="line1">
                        <a href="img/art1.jpg">
                            <img src="img/art1.jpg" width="400px" alt="art1">
                        </a>
                        <a href="img/art2.jpg">
                            <img src="img/art2.jpg" width="400px" alt="art2">
                        </a>
                        <a href="img/art3.jpg">
                            <img src="img/art3.jpg" width="400px" alt="art3">
                        </a>
                    </div>
                    <div class="line2">
                        <a href="img/art4.jpg">
                            <img src="img/art4.jpg" width="400px" alt="art4">
                        </a>
                        <a href="img/art5.jpg">
                            <img src="img/art5.jpg" width="400px" alt="art5">
                        </a>
                        <a href="img/art6.jpg">
                            <img src="img/art6.jpg" width="400px" alt="art6">
                        </a>
                    </div>
                    <div class="line3">
                        <a href="img/art7.jpg">
                            <img src="img/art7.jpg" width="400px" alt="art7">
                        </a>
                        <a href="img/art8.jpg">
                            <img src="img/art8.jpg" width="400px" alt="art8">
                        </a>
                        <a href="img/art9.jpg">
                            <img src="img/art9.jpg" width="400px" alt="art9">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="reg_conference" id="conference">
                <h1>регистрация на конференцию</h1>
                    <div id="left_write">
                        <img src="img/write_reg.png" alt="write_reg">
                    </div>
                    <div id="right_write">
                        <img src="img/write_reg.png" alt="write_reg">
                    </div>
                    <a href="pages/reg_conference.php"">ЗАРЕГИСТРИРОВАТЬСЯ</a>
            </div>
        </div>
        <div class="wrapper">
            <div class="test_div" id="web-test">
                <h1>ТЕСТ ПО ВЕБ-ПРОГРАММИРОВАНИЮ</h1>
                <form name="test" id="test">
                    <div class="test_left">
                        <label for="">1. Каким тегом задается вставка гиперссылки на web-страницу?</label>
                        <br>
                        <input name="q1" value="yes" id="q1_1" type="radio">a href="..."</option>
                        <input name="q1" value="no" id="q1_2" type="radio">img src="..."</option>
                        <input name="q1" value="no" id="q1_3" type="radio">font color="..."</option>
                        <br>
                        <label for="">2. Программа для просмотра гипертекстовых страниц называется</label>
                        <br>
                        <input name="q2" value="no" id="q2_1" type="radio">Блокнот</option>
                        <input name="q2" value="yes" id="q2_2" type="radio">Браузер</option>
                        <input name="q2" value="no" id="q2_3" type="radio">Сервер</option>
                        <br>
                        <label for=""">3. Какой из приведенных тегов позволяет создавать нумерованные списки?</label>
                        <br>
                        <input name="q3" value="yes" id="q3_1" type="radio">OL</option>
                        <input name="q3" value="no" id="q3_2" type="radio">DL</option>
                        <input name="q3" value="no" id="q3_3" type="radio">UL</option>
                    </div>
                    <div class="test_right">
                        <label for="">4. Что такое HTML?</label>
                        <br>
                        <input name="q4" value="no" id="q4_1" type="radio">Библиотека гипертекста</option>
                        <input name="q4" value="no" id="q4_2" type="radio">Скриптовый язык</option>
                        <input name="q4" value="yes" id="q4_3" type="radio">Язык разметки</option>
                        <br>
                        <label for="">5. Какие методы можно применять для отправки формы</label>
                        <br>
                        <input name="q5" value="no" id="q5_1" type="radio">TRY</option>
                        <input name="q5" value="yes" id="q5_2" type="radio">POST</option>
                        <input name="q5" value="no" id="q5_3" type="radio">HEAD</option>
                        <br>
                        <label for="">6. Какой атрибут тега img указывает файл изображения и путь к нему?</label>
                        <br>
                        <input name="q6" value="yes" id="q6_1" type="radio">src</option>
                        <input name="q6" value="no" id="q6_2" type="radio">alt</option>
                        <input name="q6" value="no" id="q6_3" type="radio">path</option>
                    </div>
                    <input type="button" value="Ответить" id="button" onclick="check()">
                </form>
                <br>
                <p id="result1"></p>
                <p id="result2"></p>
                <p id="result3"></p>
            </div>
        </div>
    </main>
    <footer>
        <h3>2023 Университет "Дубна"</h3>
    </footer>

    <script type="text/javascript" src="scripts/test.js"></script>
    <script src="scripts/index.js"></script>
</body>
</html>