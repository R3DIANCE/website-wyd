<?php
if (!defined('LOCAL')) exit();

class LoginController extends LoginModel
{
    private string $user;
    private string $pass;
    private object $message;

    public function __construct()
    {
        parent::__construct();
        $this->message = new MessageController;
        if (isset($_POST['user'], $_POST['pass'])) {
            if ($this->setUser($_POST['user']) && $this->setPass($_POST['pass'])) {
                if ($this->setLogin()) {
                    /*
                    $this->message->setHead(true);
                    $this->message->setMessage('Login efetuado com sucesso!');
                    return true;
                    */
                    $_SESSION['time'] = 0;
                    header('Location: ./dashboard');
                }
            }
            $this->message->setHead(false);
            $this->message->setMessage('Não foi possível efetuar o login!');
        }
        return false;
    }

    private function setUser($user): bool
    {
        if (preg_match('/^[a-zA-Z0-9]{4,12}$/i', $user)) {
            $this->user = $user;
            return true;
        }
        $this->message->setMessage('Usuário inválido, digite apenas de 4 a 12 caracteres alfanuméricos');
        return false;
    }
    
    private function setPass($pass): bool
    {
        if (preg_match('/^[a-zA-Z0-9]{4,12}$/i', $pass)) {
            $this->pass = $pass;
            return true;
        }
        $this->message->setMessage('Senha inválida, digite apenas de 4 a 12 caracteres alfanuméricos');
        return false;
    }

    public function getUser(): string
    {
        return $this->user;
    }

    public function getPass(): string
    {
        return $this->pass;
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
