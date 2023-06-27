<?php

namespace view;

include_once 'C:\xampp\htdocs\pedroFerragens-main\DAL\dalUser.php';
include_once 'C:\xampp\htdocs\pedroFerragens-main\MODEL\user.php';

use DAL\dalUser;
use MODEL\User;

class ViewLogin
{
    public static function login($data)
    {
        $user = new User(null, $data['user'], $data['pwd']);
        $result = dalUser::verificaSenha($user);
        if($result){
            session_start();
            $_SESSION["token"]=md5($user->getUser());
            return true;
        }else{
            return false;
        }
    }
}