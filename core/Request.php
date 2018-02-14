<?php

namespace core;


class Request {

    public static function uri() {
        return trim(
            $_SERVER['REQUEST_URI'],
//            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),
            '/'
        );
    }
}