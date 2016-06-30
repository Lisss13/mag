<!DOCTYPE HTML>
<meta charset="utf-8" xmlns="http://www.w3.org/1999/html"/>
<html lang="ru" ng-app="sportProduct">
<head>
    <title>Магазин</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!--[if lte IE 8]>
    <script src="/assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="/assets/css/main.css"/>
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="/assets/css/ie8.css"/><![endif]-->
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/assets/css/ie9.css"/><![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>
    <script type="text/javascript" src="/bower_components/angular-sanitize/angular-sanitize.min.js"></script>
    <script src="/assets/js/controllers.js"></script>
    <!-- Put this script tag to the <head> of your page -->
    <script type="text/javascript" src="http://vk.com/js/api/share.js?93" charset="utf-8"></script>
</head>
<body class="" ng-controller="productCtrl">

<!-- Page Wrapper -->
    <div id="page-wrapper">
        <section class="wrapper style5">
            <div class="inner">
                <!--Menu-->
                <?php require "view/component/menu2.php"; ?>


                <section ng-init="id = '<?php echo substr($_SERVER['REQUEST_URI'], 6); ?>'">
                    <div class="row">
                        <div class="4u 12u$(medium)">
                            <img ng-src="{{description[id - 1].imgeFull}}" alt="" width="350"/>
                        </div>
                        <div class="8u 12u$(medium)">
                            <h2>{{description[id - 1].name}}</h2>

                            <p ng-bind-html="description[id - 1].descriptionFull"></p>

                            <strong>
                                Размер: {{description[id - 1].size}} <br/>
                                Цена: {{description[id - 1].prise}} руб.
                            </strong>
                            <div class="row">
                                <div class="6u 12u$(medium)">
                                    <a href="/shop" class="button special fit">Вернуться обратно</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>

        <section class="wrapper style3 special">
            <div class="inner">
                <h2>Оставить заявку</h2>
                <form action="/mail" method="post" id="form">
                    <div class="row uniform">
                        <div class="6u 12u$(xsmall)">
                            <label for="name"><strong>Ваше имя</strong></label>
                            <input name="name" id="name"  placeholder="Имя" type="text">
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <label for="phone"><strong>Ваш телефон</strong></label>
                            <input name="phone" id="phone"  placeholder="телефон" type="text">
                        </div>
                    </div>
                    <div class="row uniform">
                        <div class="12u 12u$(xsmall)">
                            <label for="message">Ваши пожелания</label>
                            <textarea name="message" id="message" placeholder="Enter your message"
                                      rows="6"></textarea>
                            <input type="hidden" name="type" ng-value="description[id - 1].name" />

                        </div>
                    </div>
                    <div class="row uniform">
                        <div class="1u 12u$(xsmall)">
                            <input value="Отправить заявку" class="special" type="submit" ng-click="maile()" />
                        </div>
                        <div class="11u 12u$(xsmall)">
                            <p ng-if="sendMaile">
                                Подождите, едет обработка данных.
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>


<script type="text/javascript">
    //document.write("<a>" + VK.Share.button(false,{type: "link_noicon", text: "Получить скидку 15%"})+"</a>");
</script>

<!--footer-->
<?php require "view/component/footer.php"; ?>
<!--skript-->
<?php require "view/component/skript.php"; ?>


</body>
</html>