<?php
    include_once '../MODEL/user.php';
    include_once '../BLL/bllUser.php';

   $user = new \MODEL\User(); 
   
   $user->setUser($_POST['user']);
   $user->setPwd($_POST['pwd']);

   $bll = new \BLL\bllUser(); 
   $bll->Insert($user); 
   
   header("location: lstUsers.php");
  
?>