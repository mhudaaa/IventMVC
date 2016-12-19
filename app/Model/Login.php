<?php

namespace app\Model;

class Login{

    private $user;
    private $logged;

    public function getLogin($email, $password){
        session_start();
        $user = User::where('email', $email)->first();
        if(isset($user->email)){
            if ($password == $user->password) {
                $_SESSION['email'] = $user->email;
                $_SESSION['nama'] = $user->nama;
                $_SESSION['id'] = $user->id_user;
                return true;
            } else{
                $_SESSION['pesan'] = "Password salah.";
                return false;
            }
        } else{
            $_SESSION['pesan'] = "Email tidak terdaftar.";
            return false;
        }
    }

}