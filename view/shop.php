<!DOCTYPE HTML>
<meta charset="utf-8" xmlns="http://www.w3.org/1999/html"/>
<html lang="ru" ng-app="sportShop">
<head>
    <title>Магазин</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css"/><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css"/><![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>
    <script src="assets/js/controllers.js"></script>
    <!-- Put this script tag to the <head> of your page -->
    <script type="text/javascript" src="http://vk.com/js/api/share.js?93" charset="utf-8"></script>
</head>

<body class="" ng-controller="shopCtrl">

<!-- Page Wrapper -->
<div  id="page-wrapper">
    <section class="wrapper style5">
        <div class="inner">

        <?php require "view/component/menu2.php"; ?>

        <!-- Input -->
        <center><h2>Магазин</h2></center>
        <section>
            <div class="row uniform">
                <div class="6u 12u$(xsmall)">
                    <h3>Введите название товара</h3>
                </div>
                <div class="6u$ 12u$(xsmall)">
                    <input name="demo-name" id="demo-name" value="" placeholder="товар" type="text" ng-model="find">
                    <!--<a href="contacts.html"><h3>Контакты</h3></a>-->
                </div>
            </div>
        </section>
        <h1></h1>
        <ul class="features">
            <li ng-repeat="stick in filterDescription = ( description | filter:find)">
                <span class="image left">
                    <img ng-src="{{stick.imgeUrl}}" alt=""  width="250" height="300" />
                </span>

                <h4> {{ stick.name }} </h4>

                <p> {{ stick.description }} <br/>
                    Размер: {{ stick.size }} <br/>

                <strong>
                    Цена: {{ stick.prise }} руб.
                </strong>
<!--                <form>-->
<!--                    <input value="Узнать подробней" class="special" type="submit"/ >-->
<!--                </form>-->
                <a href="/shop/{{ stick.age }}" class="button special small fit">Узнать подробней</a></p>
            </li>
        </ul>
            <div ng-if="filterDescription.length == 0">
                <h3>Товар не найден</h3>
                <strong>Возможно вы допустили ошибку</strong>
            </div>
        </section>


<?php require "view/component/footer.php"; ?>

<?php require  "view/component/skript.php"; ?>

</body>
</html>