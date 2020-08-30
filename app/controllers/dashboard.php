<?php
if (!defined('LOCAL')) exit();

class DashboardController extends DashboardModel
{
    public object $params;

    public function __construct()
    {
        parent::__construct();
        $this->params = new ParamsController;

        $this->alterProfile();
        $this->messageLogin();

        return false;
    }

    private function alterProfile(): bool
    {
        if (isset($_POST['name'], $_POST['pass'], $_POST['pass2'], $_POST['oldpass'])) {
            $ret = $this->setName($_POST['name']) && $this->setPass($_POST['pass']) && $this->setOldPass($_POST['oldpass']) && $this->setPassTwo($_POST['pass2']);
            if ($ret) {
                if ($this->getPass() === $this->getPassTwo()) {
                    if (password_verify($this->getOldPass(), $_SESSION['login']['pass'])) {
                        if ($this->SetUpdateAccount()) {
                            $this->message->setHead(true);
                            $this->message->setMessage('Perfil alterado com sucesso!');
                            return true;
                        }
                    } else {
                        $this->message->setMessage('Senha atual não é igual!');
                    }
                } else {
                    $this->message->setMessage('As senhas não são iguais!');
                }
            }
            $this->message->setHead(false);
            $this->message->setMessage('Não foi possível alterar o perfil!');
        }
        return false;
    }

    private function messageLogin(): bool
    {
        if ($_SESSION['time'] === 0) {
            $this->params->message->setHead(true);
            $this->params->message->setMessage('Login efetuado com sucesso!');
            $_SESSION['time']++;
            return true;
        }
        return false;
    }
}
