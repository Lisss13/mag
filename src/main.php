<?php


namespace App;

require "src/application/Application.php";




$app = new Application();

$app->get('/', function(){ require "view/index.php"; });
$app->get('/shop', function(){ require "view/shop.php"; });
$app->get('/contacts', function(){ require "view/contacts.php"; });
$app->get('/article', function(){ require "view/article.php"; });

for($i=1; $i <= 13; $i++ ){
    $app->get("/shop/{$i}", function(){
        require "view/product.php";
    });
}

$app->post('/mail', function() {

    require "view/mail.php";

    if(isset($_POST['name'], $_POST['phone'])) { //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'vectorsporta@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Заказ'; //Загаловок сообщения
        if($_POST['message'] == "" || $_POST['message'] == NULL) {
            $_POST['message'] = "Их нет";
        }
        $message = "
                <html>
                    <head>
                        <title> {$subject} </title>
                    </head>
                    <body>
                        <p>Имя: {$_POST['name']} </p>
                        <p>Телефон: {$_POST['phone']} </p>
                        <p>Товар: {$_POST['type']}</p>
                        <p><strong>Пожелания:</strong><br/>{$_POST['message']}</p>
                    </body>
                </html>"; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: <shop@vectorsporta.ru>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
    }
});

$app->run();