<?php

use app\core\Application;
use app\core\Router;
use app\controllers\SiteController;
use app\controllers\AuthController;


require_once __DIR__ . '/../vendor/autoload.php';

$app = new Application(dirname(__DIR__));

$app->router->get('/',[SiteController::class,'welcome']);
$app->router->get('/dashboard',[SiteController::class,'dashboard']);
$app->router->get('contact',[SiteController::class,'handelContact']);

$app->router->post('/save',[SiteController::class,'saveForm']);

$app->router->get('/login',[AuthController::class,'login']);
$app->router->post('/login',[AuthController::class,'login']);

$app->router->get('/register',[AuthController::class,'register']);
$app->router->post('/register',[AuthController::class,'register']);

$app->run();


