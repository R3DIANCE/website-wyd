<?php
if (!defined('LOCAL')) exit();

class RegisterController extends RegisterModel
{
    private string $name;
    private string $user;
    private string $pass;
    private string $email;
    private object $message;

    public function __construct()
    {
        parent::__construct();
        $this->message = new MessageController;
        if (isset($_POST['name'], $_POST['user'], $_POST['pass'], $_POST['email'])) {
            if ($this->setName($_POST['name']) && $this->setUser($_POST['user']) && $this->setEmail($_POST['email']) && $this->setPass($_POST['pass'])) {
                if ($this->setRegister()) {
                    return true;
                }
            }
        }
        return false;
    }

    private function setName($name): bool
    {
        if (preg_match('/^([a-zA-Z\ ]{4,18}+)$/', $name) !== true) {
            $this->name = $name;
            return true;
        } 
        return false;
    }

    private function setUser($user): bool
    {
        if (preg_match('/^([a-zA-Z0-9]{4,12}+)$/', $user) !== true) {
            $this->user = $user;
            return true;
        }
        return false;
    }

    private function setPass($pass): bool
    {
        if (preg_match('/^([a-zA-Z0-9]{4,12}+)$/', $pass) !== true) {
            $this->pass = $pass;
            return true;
        }
        return false;
    }

    private function setEmail($email): bool
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
            return true;
        }
        return false;
    }

    protected function getUser(): string
    {
        return $this->user;
    }

    protected function getPass(): string
    {
        return $this->pass;
    }

    protected function getEmail(): string
    {
        return $this->email;
    }

    protected function getName(): string
    {
        return $this->name;
    }

}