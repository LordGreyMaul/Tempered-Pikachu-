<?php
namespace App\Controllers;

class UsersController {

    public function register()
    {
        return view('register');
    }

    public function myAccount()
    {
        return view('myAccount');
    }

}