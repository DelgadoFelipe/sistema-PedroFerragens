<?php
    include_once '../MODEL/user.php';
    include_once '../BLL/bllUser.php';
    include_once '../DAL/conexao.php';
    use DAL\Conexao;
    $user = new \MODEL\User($id = $_POST['id'], $user = $_POST['user'], null); 
    
    print $_POST['user'];
    $sql = "UPDATE usuarios SET user = :user WHERE id = :id";

    $pdo = Conexao::conectar(); 
    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
    $query = $pdo->prepare($sql);
    $result = $query->execute(array(":user" => $_POST['user'], ":id" => $id));
    $con = Conexao::desconectar();

    header("location: lstUsers.php");
?>