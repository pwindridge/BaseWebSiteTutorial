<?php

namespace mvcwebsite\controllers;


class UsersController {

    public function register()
    {
        $title = 'Registration Page';

        return view('register', compact('title'));
    }

    public function search()
    {
        $title = 'Search Page';

        $name = $_GET['name'];

        return view('search', compact('title', 'name'));
    }

    public function store()
    {
        var_dump($_POST);
    }
}