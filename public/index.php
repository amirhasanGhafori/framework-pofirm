<?php

use app\core\Application;
use app\core\Router;


require_once __DIR__ . '/../vendor/autoload.php';

$app = new Application(dirname(__DIR__));

$app->router->get('/','welcome');

$app->router->get('/dashboard','dashboard');

$app->router->post('/save',function (){
    return "save route";
});


$app->run();


