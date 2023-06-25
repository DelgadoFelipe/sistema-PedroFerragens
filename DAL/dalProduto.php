<?php
    namespace DAL;

use MODEL\Produto;

    include_once 'conexao.php';
    include_once  'C:\xampp\htdocs\pedroFerragens-main\MODEL\item.php';
    
    
    class dalProduto {

        public function Select() {

          $lstItem = [];
          $con = Conexao::conectar(); 
          $sql = "select * from itens WHERE dump != 1;";

          $result = $con->query($sql); 
          $con = Conexao::desconectar();
         
          foreach($result as $linha){
               $item = new \MODEL\Produto();

               $item->setId($linha['id']); 
               $item->setDescr($linha['descr']);
               $item->setQtdDisp($linha['qtdisp']); 
               $item->setPrVenda($linha['prvenda']);
               $lstItem[]= $item; 
          }
          return $lstItem;   
        }

        public function SelectID(int $id){
            $sql = "select * from itens where id=?;";
            $pdo = Conexao::conectar(); 
            $query = $pdo->prepare($sql);
            $query->execute (array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar(); 

            $item = new \MODEL\Produto();
            $item->setId($linha['id']); 
            $item->setDescr($linha['descr']);
            $item->setQtdDisp($linha['qtdisp']); 
            $item->setPrVenda($linha['prvenda']);
            return $item; 
        }

        public function Insert(\MODEL\Produto $item){
            $con = Conexao::conectar(); 
            $sql = "INSERT INTO itens (descr, qtdisp, prvenda) 
                   VALUES  ('{$item->getDescr()}', '{$item->getQtdDisp()}',
                            '{$item->getPrVenda()}');";
            $result = $con->query($sql); 
            $con = Conexao::desconectar();  
            return $result; 
        }

        public function Update(\MODEL\Produto $item){
            $sql = "UPDATE itens SET descr=?, qtdisp=?, prvenda=? WHERE id=?";

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($item->getDescr(), $item->getQtdDisp(), $item->getPrVenda()));
            $con = Conexao::desconectar();
            return  $result; 
        }

        public function Delete(int $id){
            $sql = "DELETE FROM itens WHERE id=?";

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($id)); 
            $con = Conexao::desconectar();
            return  $result; 
        }
    }

?> 