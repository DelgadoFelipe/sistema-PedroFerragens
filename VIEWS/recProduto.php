<?php
    include_once '../MODEL/item.php';
    include_once '../BLL/bllProduto.php';

   $item = new \MODEL\Produto(); 
   
   $item->setDescr($_POST['descr']);
   $item->setQtdDisp($_POST['qtdDisp']);
   $item->setPrVenda($_POST['prVenda']);

   $bll = new \BLL\bllProduto(); 
   $bll->Insert($item); 
   
   header("location: lstItens.php");
  
?>