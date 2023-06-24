<?php
    include_once '../MODEL/cliente.php';
    include_once '../BLL/bllCliente.php';
    include_once '../DAL/conexao.php';
    include_once  'C:\xampp\htdocs\pedroFerragens-main\MODEL\cliente.php';
    
    use DAL\Conexao;

    $cliente = new \MODEL\Cliente(); 
    $id = $_GET['id']; 

    $sql = "UPDATE cliente SET dump = '1' WHERE id = :id";
    
    $pdo = Conexao::conectar(); 
    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
    $query = $pdo->prepare($sql);
    $result = $query->execute(array(":id" => $id ));
    $con = Conexao::desconectar();

    header("location: lstCliente.php");

?>