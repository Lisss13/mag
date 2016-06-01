<?php


namespace App;

require "src/application/Application.php";




$app = new Application();

$app->get('/', function(){ require "view/index.php"; });
$app->get('/shop', function(){ require "view/shop.php"; });
$app->get('/contacts', function(){ require "view/contacts.php"; });
$app->get('/article', function(){ require "view/article.php"; });

for($i=1; $i <= 8; $i++ ){
    $app->get("/shop/{$i}", function(){ require "view/template/product.php"; });
}






$app->run();