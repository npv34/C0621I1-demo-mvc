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
            $name = $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $password = $_REQUEST['password'];
            $this->userModel->create($name, $email, $password);
            header('location: index.php?router=users&action=show-list');
        }
    }

    public function delete($id) {
        // thuc hien xoa
        $this->userModel->destroy($id);
        //  quay tro lai page danh sach
        header('location: index.php?router=users&action=show-list');
    }

    function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            // goi xuong model
            $user = $this->userModel->find($id);
            // tra ve view
            require_once "views/users/edit.php";
        } else {
            $name = $_REQUEST['name'];
            $this->userModel->update($name, $id);
            header('location: index.php?router=users&action=show-list');

        }
    }
}