<?php
    include_once '../MODEL/cliente.php';
    include_once '../BLL/bllCliente.php';
    include_once '../DAL/conexao.php';
    use DAL\Conexao;

    $cliente = new \MODEL\Cliente(); 
    $id = $_POST['id'];
    $descr = $_POST['descr'];
    $fant = $_POST['fant'];
    $cep = $_POST['cep'];
    $ender = $_POST['ender'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $tel = $_POST['tel'];
    $cpf = $_POST['cpf'];
   
   $sql = "UPDATE cliente SET descr = :descr, fant = :fant, ender = :ender, cep = :cep, bairro = :bairro, cidade = :cidade, telefone = :tel, cgc_cpf = :cpf WHERE id = :id";

   $pdo = Conexao::conectar(); 
   $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
   $query = $pdo->prepare($sql);
   $result = $query->execute(array(":descr" => $descr, ":fant" => $fant, ":ender" => $ender, ":cep" => $cep, ":bairro" => $bairro, ":cidade" => $cidade, ":tel" => $tel, ":cpf" => $cpf, ":id" => $id));
   $con = Conexao::desconectar();

   header("location: lstCliente.php");
?>