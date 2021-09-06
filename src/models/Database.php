<?php


namespace Src\Models;


class Database
{
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=blog-lav';
        $this->username = 'root';
        $this->password = '123456@Abc';
    }

    public function connect()
    {
        try {
            return new \PDO($this->dsn, $this->username, $this->password);
        }catch (\PDOException $PDOException) {
            echo "Loi database vui kiem tra lai";
        }
    }
}