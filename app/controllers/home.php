<?php
if (!defined('LOCAL')) exit();

class HomeController extends HomeModel
{
    private object $message;

    public function __construct()
    {
        parent::__construct();
        $this->message = new MessageController;
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
