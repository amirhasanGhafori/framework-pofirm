<?php

namespace app\controllers;

use app\core\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isPost()){
            return "Handel Submited Data";
        }

        return $this->render('login');
    }

    public function register(Request $request)
    {
        if ($request->isPost()){
            return "Handel Submited Data";
        }
        return $this->render('register');
    }
}