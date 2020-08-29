<?php
if (!defined('LOCAL')) exit();

class MessageController
{
    private string $head;
    private array $message;

    public function __construct()
    {
        return true;
    }

    public function setHead($head): bool
    {
        if ($head) {
            $this->head = 'success';
        }
        $this->head = 'danger';
        return false;
    }

    public function setMessage($message): bool
    {
        $this->message[] = $message;
        return true;
    }
}