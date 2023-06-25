<?php
    include_once '../MODEL/ods.php';
    include_once '../BLL/bllOds.php';
    include_once '../DAL/conexao.php';
    use DAL\Conexao;

    $cliente = new \MODEL\ods(); 
    $id = $_POST['id'];
    $nameCft = $_POST['nameCft'];
    $idProd = $_POST['idProd'];
    $prVenda = $_POST['prVenda'];

    $sql = "SELECT descr FROM itens WHERE id = :id";
    $pdo = Conexao::conectar();
    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
    $query = $pdo->prepare($sql);
    $result = $query->execute(array(":id" => $idProd));
    $descr = $query->fetchColumn();

    $sql = "SELECT idProduto FROM ordem_servico WHERE id = :id";
    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
    $query = $pdo->prepare($sql);
    $result = $query->execute(array(":id" => $id));
    $idProdutoAtual = $query->fetchColumn();

    if($idProdutoAtual != $idProd) {     
        $sql = "UPDATE itens SET qtDisp = qtDisp + 1 WHERE id = :id"; 
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $result = $query->execute(array(":id" => $idProdutoAtual));

        $sql = "UPDATE itens SET qtDisp = qtDisp - 1 WHERE id = :id"; 
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $result = $query->execute(array(":id" => $idProd));
    }
      
   $sql = "UPDATE ordem_servico SET nomeCft = :nomeCft, idProduto = :idProd, descrProduto = :descrProduto, valor = :valor WHERE id = :id";

   $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
   $query = $pdo->prepare($sql);
   $result = $query->execute(array(":nomeCft" => $nameCft, ":idProd" => $idProd, ":descrProduto" => $descr, ":valor" => $prVenda, ":id" => $id));
   $con = Conexao::desconectar();

   header("location: lstOds.php");
?>