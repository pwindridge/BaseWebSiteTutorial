<?php

namespace mvcwebsite\controllers;


class PagesController {

    public function home()
    {
        $title = 'Home Page';

        return view('index', compact('title'));
    }
}