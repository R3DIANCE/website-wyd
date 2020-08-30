<?php
if (!defined('LOCAL')) exit();

class LoginModel extends DBModel
{
    public function __construct()
    {
        parent::__construct();
        return true;
    }

    protected function setLogin(): bool
    {
        $query = 'SELECT * FROM users WHERE `user` = ? AND `check` = ?';
        $types = 'si';
        $params = [$this->params->getUser(), 1];
        if ($res = $this->getResult($query, $types, $params)) {
            if (password_verify($this->params->getPass(), $res['pass'])) {
                $_SESSION['login'] = $res;
                return true;
            }
        }
        return false;
    }
}