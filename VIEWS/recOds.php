<?php
    include_once '../MODEL/ods.php';
    include_once '../BLL/bllOds.php';
    include_once '../DAL/conexao.php';
    use DAL\Conexao;
    
    $ods = new \MODEL\Ods(); 
    $idProd = $_POST['nameProd'];


    $sql = "SELECT descr FROM itens WHERE id = :id";
    $pdo = Conexao::conectar();
    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
    $query = $pdo->prepare($sql);
    $result = $query->execute(array(":id" => $idProd));
    $descr = $query->fetchColumn();

    $sql = "UPDATE itens SET qtDisp = qtDisp - 1 WHERE id = :id"; 
    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
    $query = $pdo->prepare($sql);
    $result = $query->execute(array(":id" => $idProd));


    date_default_timezone_set('America/Sao_Paulo');
    $dataAtual = date('Y/m/d');
    $horaAtual = date('H:i:s');

    
    $ods->setNomeCft($_POST['nameCft']);
    $ods->setDataAb($dataAtual);
    $ods->setHoraAb($horaAtual);
    $ods->setValor($_POST['prVenda']);
    $ods->setIdProduto($_POST['nameProd']);
    $ods->setDescrProd($descr);    

    $bll = new \BLL\bllOds(); 
    $bll->Insert($ods); 

    $con = Conexao::desconectar();
    header("location: lstOds.php");
  
?>