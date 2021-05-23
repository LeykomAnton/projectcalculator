<html lang="RU">


<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <title>Калькулятор</title>

</head>

<body class="container">

    <div class="wrapper">
        <div class="content">

            <header>

                <div class="header">
                    <div class="logo"></div>
                    <div class="numberphone"></div>
                </div>

                <ul class="NavBar">
                    <li><a href="#">Кредитные карты</a></li>
                    <li><a href="#">Вклады</a></li>
                    <li><a href="#">Дебетовая карта</a></li>
                    <li><a href="#">Страхованиe</a></li>
                    <li><a href="#">Друзья</a></li>
                    <li><a href="#">Интернет-банк</a></li>
                </ul>

            </header>

            <div class="bread-crumbs">
                <a href="#">Главная</a>
                -
                <a href="#">Вклады</a>
                -
                <a>Калькулятор</a>
            </div>

            <form class="calculator" name="form" id="form">
                <div class="Title">Калькулятор</div>
                <div class="Fields">
                    <div class="FormLine">
                        <p>Дата оформления вклада</p>
                        <input class="box" type="text" name="date" id="date" autocomplete="off">
                    </div>
                    <div class="FormLine">
                        <p>Сумма вклада</p>
                        <input class="box" type="number" min="1000" max="3000000" name="sum1" value="1000" id="sum" autocomplete="off" oninput="returnval1()">
                        <div class="money">
                            <span class="k">1 тыс. руб.</span>
                            <input class="slide" type="range" min="1000" max="3000000" value="1000" id="range" onmousemove="move1()">
                            <span class="m">3 000 000</span>
                        </div>
                    </div>
                    <div class="FormLine">
                        <p>Срок вклада</p>
                        <select class="box" name="year" id="year">

                            <option value="1">1 год</option>
                            <option value="2" />2 года</option>
                            <option value="3" />3 года</option>
                            <option value="4" />4 года</option>
                            <option value="5" />5 лет</option>
                        </select>
                    </div>
                    <div class="FormLine">
                        <p>Пополнение вклада</p>
                        <input class="radio" type="radio" checked name="select" value="false" id="no">
                        <div>Нет</div>
                        <input class="radio" type="radio" name="select" value="true" id="yes">
                        <div>Да</div>
                    </div>
                    <div class="FormLine">
                        <p>Сумма пополнения вклада</p>
                        <input class="box" type="number" min="1000" max="3000000" name="sum2" value="1000" id="sum2" autocomplete="off" oninput="returnval2()">
                        <div class="money">
                            <span class="k">1 тыс. руб.</span>
                            <input class="slide" type="range" min="1000" max="3000000" value="1000" id="range2" onmousemove="move2()">
                            <span class="m">3 000 000</span>
                        </div>
                    </div>
                </div>

                <div class="Resultat">
                    <input type="submit" name="submitbutton" value="Расcчитать" id="submitbutton" class="submitbutton"></input>
                    <p>Результат:</p>
                    <a class="res" id="result"></a>
                </div>
            </form>

        </div>
        <footer class="footer">
            <div class="footer-links">
                <a href="#">Кредитные карты</a>
                <a href="#">Вклады</a>
                <a href="#">Дебетовая карта</a>
                <a href="#">Страхованиe</a>
                <a href="#">Друзья</a>
                <a href="#">Интернет-банк</a>
            </div>
        </footer>

    </div>
</body>
<script src="js/script.js"></script>
<script src="js/ru.js"></script>

</html>