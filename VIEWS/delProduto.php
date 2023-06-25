<?php
    include_once '../MODEL/item.php';
    include_once '../BLL/bllProduto.php';
    include_once '../DAL/conexao.php';
    include_once  'C:\xampp\htdocs\pedroFerragens-main\MODEL\item.php';
    
    use DAL\Conexao;

    $cliente = new \MODEL\Produto(); 
    $id = $_GET['id']; 

    $sql = "UPDATE itens SET dump = '1' WHERE id = :id";
    
    $pdo = Conexao::conectar(); 
    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
    $query = $pdo->prepare($sql);
    $result = $query->execute(array(":id" => $id ));
    $con = Conexao::desconectar();

    header("location: lstItens.php");

?>