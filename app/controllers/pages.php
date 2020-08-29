<?php
if (!defined('LOCAL')) exit();

class PageController
{
    public static $instance;
    public static $uri = [];

    public function __construct()
    {
        if (!isset($_SESSION['login']))
            self::$uri = ['home', 'news', 'login', 'register', 'cities', 'players'];
        else
            self::$uri = ['home', 'news', 'dashboard', 'cities', 'players'];
        return true;
    }

    static public function getUri(): string
    {
        self::$instance = is_null(self::$instance) ? self::$instance = new self() : self::$instance;
        if (in_array($_GET['pages'], self::$uri)) {
            return $_GET['pages'];
        }
        return 'home';
    }
}
