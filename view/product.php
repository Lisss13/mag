<!DOCTYPE HTML>
<meta charset="utf-8" xmlns="http://www.w3.org/1999/html"/>
<html lang="ru" ng-app="sportShop">
<head>
    <title>Магазин</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="/assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="/assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="/assets/css/ie8.css"/><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="/assets/css/ie9.css"/><![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>
<!--    <script src="/assets/js/controllers.js"></script>-->
    <!-- Put this script tag to the <head> of your page -->
    <script type="text/javascript" src="http://vk.com/js/api/share.js?93" charset="utf-8"></script>
</head>
<body class="" ng-controller="productCtrl">

        <!-- Page Wrapper -->
        <div  id="page-wrapper">
            <section class="wrapper style5">
                <div class="inner">
                    <!--Menu-->
                    <?php require "view/component/menu2.php"; ?>


                    <section ng-init="id = '<?php echo substr($id_poduct,6); ?>'">
                        <div class="row">
                            <div class="4u 12u$(medium)" >
                                <img ng-src="{{description[id - 1].imgeUrl}}" alt=""  width="350" />
                            </div>
                            <div class="8u 12u$(medium)">
                                <h2>{{description[id - 1].name}}</h2>
                                <p>
                                    {{description[id - 1].descriptionFull}}
                                </p>

                                <strong>
                                    Размер: {{description[id - 1].size}} <br/>
                                    Цена: {{description[id - 1].prise}} руб.
                                </strong>
                                <div class="row">
                                    <div class="6   u 12u$(medium)">
                                        <a href="/shop" class="button special fit">Вернуться обратно</a>
                                    </div>
                                </div>
                            </div>
                        </div>



                    <script type="text/javascript">
                        //document.write("<a>" + VK.Share.button(false,{type: "link_noicon", text: "Получить скидку 15%"})+"</a>");
                    </script>

                    </section>
                </div>
            </section>
        </div>


        <!--footer-->
        <?php require "view/component/footer.php"; ?>
    <!--skript-->
    <?php require  "view/component/skript.php"; ?>

</body>
</html>