<?php

use app\core\Application;
use app\core\Router;


require_once __DIR__ . '/../vendor/autoload.php';

$app = new Application();

$app->router->get('/admin/dashboard',function (){
    return "dashboard panel";
});

$app->router->get('/instructor/dashboard',function (){
    return "instructor panel";
});


$app->run();


