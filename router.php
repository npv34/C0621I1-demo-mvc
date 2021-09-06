<?php

$router = $_GET['router'] ?? null;
$action = $_GET['action'] ?? null;
$userController = new \Src\Controller\UserController();
$loginController = new \Src\Controller\LoginController();

switch ($router) {
    case 'users':
        switch ($action) {
            case 'show-list':
                $userController->showListUser();
                break;
            case 'add':
                $userController->add();
                break;
            case 'delete':
                $id = $_GET['id'];
                $userController->delete($id);
                break;
        }
        break;
    case 'logout':
        $loginController->logout();
        break;
}