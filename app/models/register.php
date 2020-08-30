<?php
if (!defined('LOCAL')) exit();

class RegisterModel extends DBModel
{

    public function __construct()
    {
        parent::__construct();
        return true;
    }

    protected function setRegister(): bool
    {
        $createDate = date('Y-m-d H:i:m');
        $query = 'INSERT INTO `users` (`user`, `pass`, `email`, `name`, `access`, `check`, `validate`, `createDate`, `updateDate`) VALUES (?, ?, ?, ?, 1, 1, 1, ?, NULL)';
        $types = 'sssss';
        $params = [$this->params->getUser(), $this->params->getPass(), $this->params->getEmail(), $this->params->getName(), $createDate];
        if ($this->getNoResult($query, $types, $params)) {
            return true;
        }
        return false;
    }
}
