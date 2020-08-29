<?php
if (!defined('LOCAL')) exit();

class DashboardController extends DashboardModel
{
    private object $message;

    public function __construct()
    {
        parent::__construct();
        $this->message = new MessageController;
        if ($_SESSION['time'] === 0) {
            $this->message->setHead(true);
            $this->message->setMessage('Login efetuado com sucesso!');
            $_SESSION['time']++;
        }
        return true;
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