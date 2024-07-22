<?php

namespace app\controllers;

use app\core\Application;
use app\core\Request;

class SiteController extends Controller
{
    public function welcome()
    {
        $params = [
            'title'=>"welcome Found Vensite"
        ];
        return $this->render('welcome',$params);
    }

    public function dashboard()
    {
        return $this->render('dashboard');
    }

    public function handelContact()
    {
        return "Handeling Contact Data.";
    }

    public function saveForm(Request $request)
    {
        var_dump($request->getBody());
        return "Save Form Current";
    }

}