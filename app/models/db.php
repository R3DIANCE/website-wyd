<?php
if (!defined('LOCAL')) exit();

class DBModel
{
    private $conn;
    private $stmt;

    public function __construct()
    {
        if ($this->conn = new mysqli(DB['host'], DB['user'], DB['pass'], DB['db'])) {
            return true;
        }
        return false;
    }

    private function setPrepare($query): bool
    {
        if ($this->conn->prepare($query)) {
            $this->stmt = $this->conn->prepare($query);
            return true;
        }
        return false;
    }

    private function setStmt($types, $params): bool
    {
        if ($this->stmt->bind_param($types, ...$params)) {
            return true;
        }
        return false;
    }

    public function getResult($query, $types, $params): array
    {
        $r = [];
        if ($this->setPrepare($query)) {
            if ($this->setStmt($types, $params)) {
                if ($this->stmt->execute()) {
                    if ($res = $this->stmt->get_result()) {
                        if ($row = $res->fetch_assoc()) {
                            $r = $row;
                        }
                    }
                }
            }
        }
        return $r;
    }

    public function getNoResult($query, $types, $params): bool
    {
        if ($this->setPrepare($query)) {
            if ($this->setStmt($types, $params)) {
                if ($this->stmt->execute()) {
                    return true;
                }
            }
        }
        return false;
    }
}
