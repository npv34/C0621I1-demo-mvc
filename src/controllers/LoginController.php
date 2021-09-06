<?php
namespace Src\Controller;

use http\Encoding\Stream\Enbrotli;
use Src\Models\User;

class LoginController
{
    private $userModel;
    public function __construct()
    {
        $this->userModel = new User();
    }

    function login($email, $password) {

        // kiem tra xem $email, $password co trung khop vs ai do o trong csdl
        $user = $this->userModel->checkAccount($email, $password);
        if ($user) {
            $_SESSION['isLogin'] = true;
            header('location: ../index.php');
            $_SESSION['login_error'] = null;
        } else {
            $_SESSION['login_error'] = "Account not exist!";
        }
    }



    function logout() {
        $_SESSION['isLogin'] = false;
        header('location: views/login.php');
    }
}