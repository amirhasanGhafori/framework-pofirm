<?php

use app\core\Application;
use app\core\Router;
use app\controllers\SiteController;


require_once __DIR__ . '/../vendor/autoload.php';

$app = new Application(dirname(__DIR__));

$app->router->get('/',[SiteController::class,'welcome']);
$app->router->get('/dashboard',[SiteController::class,'dashboard']);
$app->router->get('contact',[SiteController::class,'handelContact']);

$app->router->post('/save',function (){
    return "save route";
});


$app->run();


