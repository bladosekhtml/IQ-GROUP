<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://atuin.ru/demo/ui-slider/jquery-ui.css">
   <link rel="stylesheet" href="css/style.css">
   <title>Document</title>
</head>

<body>
   <header>
      <div class="head">
         <img src="img/logo.jpg" alt="Логотип">
         <section class="numvers">
            <p>8-800-100-5005</p>
            <p>+7 (3452) 522-000</p>
         </section>
      </div>
      <div class="menu">
         <div class="container">
            <a href="#">Кредитные карты</a>
            <a href="#">Вклады</a>
            <a href="#">Дебетовая карта</a>
            <a href="#">Страхование</a>
            <a href="#">Друзья</a>
            <a href="#">Интернет-бант</a>
         </div>
      </div>
      <div id="breadcrumbs">
         <div class="container">
            <a href="#">Главная</a> - <a href="#">Вклады</a> - Калькулятор
         </div>
      </div>
      </div>
   </header>
   <main class='container'>
      <form method="post" action='calc.php'>
         <h1>Калькулятор</h1>
         <label>Дата оформления вклада <input id="datep" required></label>
         <label>Сумма вклада <input type="text" id='sum' required>
            <div id="sumRange" class='range'></div>
         </label>
         <label>Срок вклада
            <select id='term'>
               <?php
               for ($i = 1; $i <= 5; $i++) {
               ?> <option value=<?= $i ?>><?= $i ?></option> <?php
                                                            }
                                                               ?>
            </select>
         </label>
         <label>Пополнение вклада
            <span><input type="radio" class='radio' name="radio" checked> Нет</span>
            <span><input type="radio" class='radio' name="radio"> Да</span>
         </label>
         <label>Сумма пополнения вклада <input required type="text" id='pay'>
            <div id="payRange" class='range'></div>
         </label>
         <label><input type="submit" value="Расчитать"><p id='result'></p></label>
      </form>
   </main>
   <footer>
      <div class="container">
         <a href="#">Кредитные карты</a>
         <a href="#">Вклады</a>
         <a href="#">Дебетовая карта</a>
         <a href="#">Страхование</a>
         <a href="#">Друзья</a>
         <a href="#">Интернет-банк</a>
      </div>
   </footer>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://atuin.ru/demo/ui-slider/jquery-ui.min.js"></script>
<script src="https://atuin.ru/demo/ui-slider/jquery.ui.touch-punch.min.js"></script>
<script src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>
<script src="js/script.js"></script>

</html>