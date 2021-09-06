<?php
namespace Src\Models;

class User
{
    protected $db;
    public function __construct()
    {
        $databse = new Database();
        $this->db = $databse->connect();
    }

    function checkAccount($email, $password) {
        //B1 Chuan bi cau lenh sql
        $sql = 'SELECT * FROM users WHERE email = ? AND password = ?';
        $stmt = $this->db->prepare($sql);
        //gan gia tri cho cau lenh sql
        $stmt->bindParam(1, $email);
        $stmt->bindParam(2, $password);

        //thuc thi
        $stmt->execute();

        return $stmt->fetch();
    }

    function getAll() {
        $sql = 'SELECT * FROM users';
        $stmt = $this->db->prepare($sql);
        //thuc thi
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function destroy($id) {
        $sql = 'DELETE FROM users WHERE id = ?';
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
    }
}