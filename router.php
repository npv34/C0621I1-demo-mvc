<?php
require_once "src/models/Database.php";
require_once "src/models/User.php";
require_once "src/controllers/UserController.php";
require_once "src/controllers/LoginController.php";
require_once "src/controllers/DashboardController.php";
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
            case 'edit':
                $id = $_GET['id'];
                $userController->edit($id);
                break;

        }
        break;
    case 'logout':
        $loginController->logout();
        break;
    default:
        $dashboardController = new \Src\Controller\DashboardController();
        $dashboardController->index();
        break;

}