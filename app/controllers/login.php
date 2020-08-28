<?php
if (!defined('LOCAL')) exit();

class LoginController extends DBModel
{
    private string $user;
    private string $pass;

    public function setUser($user): bool
    {
        if ($this->user = $user)
            return true;
        return false;
    }

    public function setPass($pass): bool
    {
        if ($this->pass = $pass)
            return true;
        return false;
    }

    public function setLogin(): bool
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
    
    public function setParams(): bool
    {
        if (isset($_POST['user'], $_POST['pass'])) {
            if ($this->setUser($_POST['user']) && $this->setPass($_POST['pass'])) {
                if ($this->setLogin()) {
                    return true;
                }
            }
        }
        return false;
    }
}
