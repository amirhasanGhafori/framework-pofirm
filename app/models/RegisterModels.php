<?php

namespace app\models;

use app\core\Model;

class RegisterModels extends Model
{
    public string $firstname;
    public string $lastname;
    public string $email;
    public string $password;
    public string $passwordConfirm;

    public function Register()
    {
        echo "Create New User";
    }
}