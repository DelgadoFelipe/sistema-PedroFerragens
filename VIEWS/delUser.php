<?php
    include_once '../MODEL/user.php';
    include_once '../BLL/bllUser.php';
    include_once '../DAL/conexao.php';
    include_once  'C:\xampp\htdocs\pedroFerragens-main\MODEL\user.php';
    
    use DAL\Conexao;

    $user = new \MODEL\User($id = $_GET['id'], null, null); 
    // $id = $_GET['id']; 

    $sql = "UPDATE usuarios SET dump = '1' WHERE id = :id";
    
    $pdo = Conexao::conectar(); 
    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
    $query = $pdo->prepare($sql);
    $result = $query->execute(array(":id" => $id ));
    $con = Conexao::desconectar();

    header("location: lstUsers.php");

?>