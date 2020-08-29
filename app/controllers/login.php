<?php
if (!defined('LOCAL')) exit();

class LoginController extends DBModel
{
    private string $user;
    private string $pass;
    private object $message;

    public function __construct()
    {
        $this->message = new MessageController;
        parent::__construct();
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

    public function getHead(): string
    {
        return $this->message->getHead();
    }

    public function getMessage(): array
    {
        return $this->message->getMessage();
    }
}
