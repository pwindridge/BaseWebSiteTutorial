<?php

namespace mvcwebsite\controllers;


class UsersController {

    public function register()
    {
        $title = 'Registration Page';

        require __DIR__ . '/../views/register.view.php';
    }

    public function search()
    {
        $title = 'Search Page';

        $name = $_GET['name'];

        require __DIR__ . '/../views/search.view.php';
    }

    public function store()
    {
        var_dump($_POST);
    }
}