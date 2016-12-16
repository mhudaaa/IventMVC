<?php

namespace app\Controller;

use app\Core\View;
use app\Model\User;
use app\Model\Login;

class ControllerAuth{

    public function login(){
        $user = new Login();
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        if($user->getLogin($email, $password)){
            header('Location: '.base_url.'dashboard');
        }else{
            header('Location: '.base_url.'home/login');
        }
    }

    public function logout(){
        session_start();
        session_destroy();
        header('Location: '.base_url);
    }
}