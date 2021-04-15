<?php

require '../vendor/autoload.php';

//enrutar peticiones php o metodos de las clases para no crear paginas
$router = new AltoRouter();
$router->map('GET', '/', 'FrontController#home', 'home');
$router->map('GET', '/otra/carpeta', 'FrontController#otraCarpeta');
$router->map('GET', '/producto/[i:id]', 'FrontController#producto');

$match = $router->match();

if($match === false){
    open404Error();
}else{
    //callController($match);
}

function open404Error(){
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
    $controllerObject = new app\controllers\FrontController;
    $controllerObject->error404();
}