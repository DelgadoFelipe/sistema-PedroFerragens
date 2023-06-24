<?php
    include_once '../MODEL/cliente.php';
    include_once '../BLL/bllCliente.php';

   $cliente = new \MODEL\Cliente(); 
   
   $cliente->setDescr($_POST['descr']);
   $cliente->setFant($_POST['fant']);
   $cliente->setEnder($_POST['ender']);
   $cliente->setBairro($_POST['bairro']);
   $cliente->setCidade($_POST['cidade']);
   $cliente->setCep($_POST['cep']);
   $cliente->setTelefone($_POST['tel']);
   $cliente->setCpf($_POST['cpf']);

   $bll = new \BLL\bllCliente(); 
   $bll->Insert($cliente); 
   
   header("location: lstCliente.php");
  
?>