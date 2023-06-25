<?php
    include_once '../MODEL/ods.php';
    include_once '../BLL/bllOds.php';
    include_once '../DAL/conexao.php';
    include_once  'C:\xampp\htdocs\pedroFerragens-main\MODEL\ods.php';
    
    use DAL\Conexao;

    $cliente = new \MODEL\Ods(); 
    $id = $_GET['id']; 

    $sql = "UPDATE ordem_servico SET dump = '1' WHERE id = :id";
    
    $pdo = Conexao::conectar(); 
    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
    $query = $pdo->prepare($sql);
    $result = $query->execute(array(":id" => $id ));

    $sql = "SELECT idProduto FROM ordem_servico WHERE id = :id";
    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
    $query = $pdo->prepare($sql);
    $result = $query->execute(array(":id" => $id ));
    $idProd = $query->fetchColumn();

    $sql = "UPDATE itens SET qtdisp = qtDisp + 1 WHERE id = :id";
    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
    $query = $pdo->prepare($sql);
    $result = $query->execute(array(":id" => $idProd ));

    $con = Conexao::desconectar();

    header("location: lstOds.php");

?>