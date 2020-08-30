<?php
if (!defined('LOCAL')) exit();

class HomeController extends HomeModel
{
    public object $params;

    public function __construct()
    {
        parent::__construct();
        $this->params = new ParamsController;
        $this->setLogout();
        return true;
    }

    private function setLogout(): bool
    {
        if (isset($_SESSION['logout']) && $_SESSION['logout'] === 0) {
            $this->params->message->setHead(true);
            $this->params->message->setMessage('Você efetuou o logout com sucesso!');
            $_SESSION['logout']++;
            return true;
        }
        return false;
    }
}
