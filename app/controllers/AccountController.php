<?php

namespace mvcwebsite\controllers;


class AccountController {

    public function register()
    {
        $title = 'Registration Page';

        return view('register', compact('title'));
    }

    public function registerDetails()
    {
        var_dump($_POST);
    }
}