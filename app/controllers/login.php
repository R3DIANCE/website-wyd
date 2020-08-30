<?php
if (!defined('LOCAL')) exit();

class LoginController extends LoginModel
{
    public object $params;

    public function __construct()
    {
        parent::__construct();
        $this->params = new ParamsController;
        $this->getLogin();
        return true;
    }

    private function getLogin(): bool
    {
        if (isset($_POST['user'], $_POST['pass'])) {
            if ($this->params->setUser($_POST['user']) && $this->params->setPass($_POST['pass'])) {
                if ($this->setLogin()) {
                    /*
                    $this->message->setHead(true);
                    $this->message->setMessage('Login efetuado com sucesso!');
                    return true;
                    */
                    $_SESSION['time'] = 0;
                    header('Location: ./dashboard');
                    return true;
                }
            }
            $this->params->message->setHead(false);
            $this->params->message->setMessage('Não foi possível efetuar o login!');
        }
        return false;
    }

}
