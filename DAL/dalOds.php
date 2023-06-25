<?php
    namespace DAL;

use MODEL\Ods;

    include_once 'conexao.php';
    include_once 'C:\xampp\htdocs\pedroFerragens-main\MODEL\ods.php';
    
    
    class dalOds {

        public function Select() {

          $lstOds = [];
          $con = Conexao::conectar(); 
          $sql = "select * from ordem_servico WHERE dump != 1;";

          $result = $con->query($sql); 
          $con = Conexao::desconectar();
         
          foreach($result as $linha){
               $ods = new \MODEL\Ods();

               $ods->setId($linha['id']); 
               $ods->setCodCft($linha['cod_cft']);
               $ods->setNomeCft($linha['nome_cft']); 
               $ods->setDataAb($linha['data_ab']);
               $ods->setHoraAb($linha['hora_ab']);
               $ods->setValor($linha['valor']);
               $ods->setIdProduto($linha['id_produto']);
               $ods->setDescrProd($linha['descr_produto']);
               $lstOds[]= $ods; 
          }
          return $lstOds;   
        }

        public function SelectID(int $id){
            $sql = "select * from ordem_servico where id=?;";
            $pdo = Conexao::conectar(); 
            $query = $pdo->prepare($sql);
            $query->execute (array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar(); 

            $ods = new \MODEL\Ods();
            $ods->setId($linha['id']); 
            $ods->setCodCft($linha['cod_cft']);
            $ods->setNomeCft($linha['nome_cft']); 
            $ods->setDataAb($linha['data_ab']);
            $ods->setHoraAb($linha['hora_ab']);
            $ods->setValor($linha['valor']);
            $ods->setIdProduto($linha['id_produto']);
            $ods->setDescrProd($linha['descr_produto']);
            return $ods; 
        }

        public function Insert(\MODEL\Ods $ods){
            $con = Conexao::conectar(); 
            $sql = "INSERT INTO ordem_servico (cod_cft, nome_cft, data_ab, hora_ab, valor, id_produto, descr_produto) 
                   VALUES  ('{$ods->getCodCft()}', '{$ods->getNomeCft()}','{$ods->getDataAb()}', '{$ods->getHoraAb()},
                            '{$ods->getValor()}', '{$ods->getIdProduto()}', '{$ods->getDescrProd()}');";
            $result = $con->query($sql); 
            $con = Conexao::desconectar();  
            return $result; 
        }

        public function Update(\MODEL\Ods $ods){
            $sql = "UPDATE ordem_servico SET cod_cft=?, nome_cft=?, valor=?, id_produto, descr_produto WHERE id=?";

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($ods->getCodCft(), $ods->getNomeCft(), $ods->getValor(), $ods->getIdProduto(), $ods->getDescrProd()));
            $con = Conexao::desconectar();
            return  $result; 
        }

        public function Delete(int $id){
            $sql = "DELETE FROM ordem_servico WHERE id=?";

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($id)); 
            $con = Conexao::desconectar();
            return  $result; 
        }
    }

?> 