<?php


namespace Src\Controller;


use Src\Models\User;

class UserController
{
    private $userModel;
    public function __construct()
    {
        $this->userModel = new User();
    }

    public function showListUser() {
        $users = $this->userModel->getAll();
        require_once "views/users/list.php";
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once "views/users/add.php";
        } else {

        }
    }

    public function delete($id) {
        // thuc hien xoa
        $this->userModel->destroy($id);
        //  quay tro lai page danh sach
        header('location: index.php?router=users&action=show-list');
    }
}