<?php
if (!defined('LOCAL')) exit();

class LoginModel extends DBModel
{

    public function __construct()
    {
        return true;
    }

    protected function setLogin(): bool
    {
        $query = 'SELECT * FROM users WHERE user = ? AND pass = ?';
        $types = 'ss';
        $params = [$this->user, $this->pass];
        if ($res = $this->getResult($query, $types, $params)) {
            $_SESSION['login'] = $res;
            return true;
        }
        return false;
    }
}