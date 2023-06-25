<?php
    include_once '../MODEL/item.php';
    include_once '../BLL/bllProduto.php';
    include_once '../DAL/conexao.php';
    use DAL\Conexao;

    $item = new \MODEL\Produto(); 
    $id = $_POST['id'];
    $descr = $_POST['descr'];
    $qtdDisp = $_POST['qtdDisp'];
    $prVenda = $_POST['prVenda']; 
   
   $sql = "UPDATE itens SET descr = :descr, qtdisp = :qtdDisp, prvenda = :prVenda WHERE id = :id";

   $pdo = Conexao::conectar(); 
   $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
   $query = $pdo->prepare($sql);
   $result = $query->execute(array(":descr" => $descr, ":qtdDisp" => $qtdDisp, ":prVenda" => $prVenda, ":id" => $id));
   $con = Conexao::desconectar();

   header("location: lstItens.php");
?>