<?php

namespace app\controllers;

use app\core\Request;
use app\models\RegisterModels;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $this->setLayout('auth');
        if ($request->isPost()){
            return "Handel Submited Data";
        }

        return $this->render('login');
    }

    public function register(Request $request)
    {
        $registerModel = new RegisterModels();

        if ($request->isPost()){
            $registerModel->loadData($request->getBody());
            var_dump($registerModel);
            if ($registerModel->validate() && $registerModel->register()){
                return "Success!!";
            }

            return $this->render('register',['model'=>$registerModel]);

        }

        $this->setLayout('auth');
        return $this->render('register',['model'=>$registerModel]);
    }
}