<?php

namespace mvcwebsite\controllers;


class PagesController {

    public function home()
    {
        $title = 'Home Page';

        require __DIR__ . '/../views/index.view.php';
    }
}