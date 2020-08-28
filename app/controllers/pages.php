<?php
if (!defined('LOCAL')) exit();

class PageController
{
    public static $uri = ['home', 'news', 'dashboard', 'login', 'register', 'cities', 'players'];

    static public function getUri(): string
    {
        if (in_array($_GET['pages'], self::$uri)) {
            return $_GET['pages'];
        }
        return 'home';
    }
}
