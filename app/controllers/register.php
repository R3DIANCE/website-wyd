<?php
if (!defined('LOCAL')) exit();

class RegisterController extends RegisterModel
{
    private string $name;
    private string $user;
    private string $pass;
    private string $email;
    private object $message;

    public function __construct()
    {
        parent::__construct();
        $this->message = new MessageController;
        if (isset($_POST['name'], $_POST['user'], $_POST['pass'], $_POST['email'])) {
            $res = $this->setName($_POST['name']) && $this->setUser($_POST['user']) && $this->setEmail($_POST['email']) && $this->setPass($_POST['pass']);
            if ($res) {
                if ($this->setRegister()) {
                    $this->message->setHead(true);
                    $this->message->setMessage('Cadastro efetuado com sucesso!');
                    return true;
                }
            }
        }
        $this->message->setHead(false);
        $this->message->setMessage('Não foi possível efetuar o cadastro!');
        return false;
    }

    private function setName($name): bool
    {
        if (preg_match('/^[a-zA-Z\ ]{4,18}$/i', $name)) {
            $this->name = $name;
            return true;
        }
        $this->message->setMessage('Nome inválido, digite apenas de 4 a 16 caracteres alfanuméricos');
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
    
    private function setEmail($email): bool
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
            return true;
        }
        $this->message->setMessage('E-mail inválido, digite um e-mail válido de até 50 caracteres!');
        return false;
    }

    protected function getUser(): string
    {
        return $this->user;
    }

    protected function getPass(): string
    {
        return $this->pass;
    }

    protected function getEmail(): string
    {
        return $this->email;
    }

    protected function getName(): string
    {
        return $this->name;
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