<?php

namespace App\Http\Controllers\Auth;

use Backpack\CRUD\app\Library\Auth\AuthenticatesUsers;
use Backpack\CRUD\app\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;

class AdminLoginController extends controller
{



    public function login()
    {
        dd('from admin');
    }
}
