<?php

namespace app\core;

use app\core\Router;
use app\core\Request;

class Application
{
    public Router $router;
    public Request $request;
    public static string $ROOT_DIR;
    public Response $response;
    public static Application $app;

    public function __construct($root)
    {
        self::$ROOT_DIR = $root;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router =  new Router($this->request,$this->response);
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}