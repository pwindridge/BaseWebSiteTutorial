<?php

namespace mvcwebsite\controllers;


class PagesController {

    public function home()
    {
        $title = 'Home Page';

        return view('index', compact('title'));
    }

    public function coinFlip()
    {
        $title = 'Coin-Flip';
        $coin = 'Tails';

        if (rand(0, 1)) {
            $coin = 'Heads';
        }

        return view(
            'coin-flip',
            compact('title', 'coin')
        );
    }
}