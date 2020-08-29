<?php
if (!defined('LOCAL')) exit();

class LoginController extends DBModel
{
    private string $user;
    private string $pass;

    public function __construct()
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

    private function setUser($user): bool
    {
        if ($this->user = $user)
            return true;
        return false;
    }

    private function setPass($pass): bool
    {
        if ($this->pass = $pass)
            return true;
        return false;
    }
}
