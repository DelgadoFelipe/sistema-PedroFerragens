<?php
    include_once '../MODEL/user.php';
    include_once '../BLL/bllUser.php';

   $user = new \MODEL\User(null, $_POST['user'], md5( $_POST['pwd'])); 
    
   $bll = new \BLL\bllUser(); 
   $bll->Insert($user); 
   
   header("location: lstUsers.php");
  
?>