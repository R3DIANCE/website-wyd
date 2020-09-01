<?php
if (!defined('LOCAL')) exit();

class ParamsController
{
    private string $user;
    private string $pass;
    private string $pass2;
    private string $oldpass;
    private string $email;
    private string $name;
    private int $guildid;
    private array $guildmark;
    public object $message;

    public function __construct()
    {
        $this->message = new MessageController;
        return true;
    }

    public function setName($name): bool
    {
        if (!is_array($name)) {
            if (preg_match('/^[a-zA-Z\ ]{4,18}$/i', $name)) {
                $this->name = $name;
                return true;
            }
            $this->message->setMessage('Nome inválido, digite apenas de 4 a 16 caracteres alfabéticos');
        }
        return false;
    }

    public function setUser($user): bool
    {
        if (!is_array($user)) {
            if (preg_match('/^[a-zA-Z0-9]{4,12}$/i', $user)) {
                $this->user = $user;
                return true;
            }
            $this->message->setMessage('Usuário inválido, digite apenas de 4 a 12 caracteres alfanuméricos');
        }
        return false;
    }

    public function setPass($pass): bool
    {
        if (!is_array($pass)) {
            if (preg_match('/^[a-zA-Z0-9]{4,12}$/i', $pass)) {
                $this->pass = $pass;
                return true;
            }
            $this->message->setMessage('Senha inválida, digite apenas de 4 a 12 caracteres alfanuméricos');
        }
        return false;
    }

    public function setPassTwo($pass2): bool
    {
        if (!is_array($pass2)) {
            if (preg_match('/^[a-zA-Z0-9]{4,12}$/i', $pass2)) {
                $this->pass2 = $pass2;
                return true;
            }
            $this->message->setMessage('Senha inválida, digite apenas de 4 a 12 caracteres alfanuméricos');
        }
        return false;
    }

    public function setOldPass($oldpass): bool
    {
        if (!is_array($oldpass)) {
            if (preg_match('/^[a-zA-Z0-9]{4,12}$/i', $oldpass)) {
                $this->oldpass = $oldpass;
                return true;
            }
            $this->message->setMessage('Senha atual inválida, digite a senha atual');
        }
        return false;
    }

    public function setGuildId($id): bool
    {
        if (is_integer($id)) {
            if ($id > 0 && $id < 999) {
                $this->guildid = $id;
                return true;
            }
        }
        return false;
    }

    public function setGuildmark($mark): bool
    {
        if (is_array($mark)) {
            $this->guildmark = $mark;
            return true;
        }
        return false;
    }

    public function setEmail($email): bool
    {
        if (!is_array($email)) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->email = $email;
                return true;
            }
            $this->message->setMessage('E-mail inválido, digite um e-mail válido de até 50 caracteres!');
        }
        return false;
    }

    public function getUser(): string
    {
        return $this->user;
    }

    public function getPassHash(): string
    {
        return password_hash($this->pass, PASSWORD_BCRYPT);
    }

    public function getPass(): string
    {
        return $this->pass;
    }

    public function getPassTwo(): string
    {
        return $this->pass2;
    }

    public function getOldPass(): string
    {
        return $this->oldpass;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getName(): string
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
