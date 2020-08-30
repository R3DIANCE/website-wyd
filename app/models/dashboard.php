<?php
if (!defined('LOCAL')) exit();

class DashboardModel extends DBModel
{
    public function __construct()
    {
        parent::__construct();
        return true;
    }

    protected function SetUpdateAccount(): bool
    {
        $updateDate = date('Y-m-d H:i:m');
        $query = 'UPDATE `users` SET `name` = ?, `pass` = ?, `updateDate` = ? WHERE `user` = ?';
        $types = 'ssss';
        $pass = password_hash($this->getPass(), PASSWORD_BCRYPT);
        $params = [$this->getName(), $pass, $updateDate, ($_SESSION['login']['user'])];

        if ($this->getNoResult($query, $types, $params)) {
            $_SESSION['login']['name'] = $this->getName();
            $_SESSION['login']['pass'] = $pass;
            return true;
        }
        return false;
    }

    protected function setUploadGuildmark(): bool
    {
        
        return false;
    }
}
