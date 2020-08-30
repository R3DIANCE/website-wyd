<?php
if (!defined('LOCAL')) exit();

class NewsController extends NewsModel
{
    private object $message;

    public function __construct()
    {
        $this->message = new MessageController;
        parent::__construct();
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