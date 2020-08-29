<?php
if (!defined('LOCAL')) exit();

class MessageController
{
    private string $head;
    private array $message;

    public function __construct()
    {
        $this->head = '';
        $this->message = array();
        return true;
    }

    public function setHead($head): bool
    {
        if ($head) {
            $this->head = 'success';
            return true;
        }
        $this->head = 'danger';
        return false;
    }

    public function setMessage($message): bool
    {
        $this->message[] = $message;
        return true;
    }

    public function getHead(): string
    {
        return $this->head;
    }

    public function getMessage(): array
    {
        return $this->message;
    }
}