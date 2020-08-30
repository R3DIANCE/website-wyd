<?php
if (!defined('LOCAL')) exit();

class RegisterController extends RegisterModel
{
    public object $params;

    public function __construct()
    {
        parent::__construct();
        $this->params = new ParamsController;
        $this->getRegister();
        return true;
    }

    private function getRegister(): bool
    {
        if (isset($_POST['name'], $_POST['user'], $_POST['pass'], $_POST['pass2'], $_POST['email'])) {
            $res =  $this->params->setName($_POST['name']) && $this->params->setPassTwo($_POST['pass2']) &&
                    $this->params->setUser($_POST['user']) && $this->params->setEmail($_POST['email']) &&
                    $this->params->setPass($_POST['pass']);
            if ($res) {
                if ($_POST['pass'] === $_POST['pass2']) {
                    if ($this->setRegister()) {
                        $this->params->message->setHead(true);
                        $this->params->message->setMessage('Cadastro efetuado com sucesso!');
                        return true;
                    }
                } else {
                    $this->params->message->setMessage('As senhas não são iguais!');
                }
            }
            $this->params->message->setHead(false);
            $this->params->message->setMessage('Não foi possível efetuar o cadastro!');
        }
        return false;
    }
}
