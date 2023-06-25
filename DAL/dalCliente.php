<?php
    namespace DAL;

use MODEL\Cliente;

    include_once 'conexao.php';
    include_once  'C:\xampp\htdocs\pedroFerragens-main\MODEL\cliente.php';
    
    
    class dalCliente {

        public function Select() {

          
          $con = Conexao::conectar(); 
          $sql = "select * from cliente WHERE dump != 1;";
          $lstCliente = [];
          $result = $con->query($sql); 
          $con = Conexao::desconectar();
         
          foreach($result as $linha){
               $cliente = new \MODEL\Cliente();

               $cliente->setId($linha['id']); 
               $cliente->setDescr($linha['descr']);
               $cliente->setFant($linha['fant']); 
               $cliente->setEnder($linha['ender']);
               $cliente->setBairro($linha['bairro']);
               $cliente->setCidade($linha['cidade']);
               $cliente->setCep($linha['cep']);
               $cliente->setTelefone($linha['telefone']);
               $cliente->setCpf($linha['cgc_cpf']);
               $lstCliente[]= $cliente; 
          }
          return $lstCliente;   
        }

        public function SelectID(int $id){
            $sql = "select * from cliente where id=?;";
            $pdo = Conexao::conectar(); 
            $query = $pdo->prepare($sql);
            $query->execute (array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar(); 

            $cliente = new \MODEL\Cliente();
            $cliente->setId($linha['id']); 
            $cliente->setDescr($linha['descr']);
            $cliente->setFant($linha['fant']); 
            $cliente->setEnder($linha['ender']);
            $cliente->setBairro($linha['bairro']);
            $cliente->setCidade($linha['cidade']);
            $cliente->setCep($linha['cep']);
            $cliente->setTelefone($linha['telefone']);
            $cliente->setCpf($linha['cgc_cpf']);

            return $cliente; 

        }

        public function Insert(\MODEL\Cliente $cliente){
            $con = Conexao::conectar(); 
            $sql = "INSERT INTO cliente (descr, fant, ender, bairro, cidade, cep, telefone, cgc_cpf) 
                   VALUES  ('{$cliente->getDescr()}', '{$cliente->getFant()}',
                            '{$cliente->getEnder()}', '{$cliente->getBairro()}', '{$cliente->getCidade()}', '{$cliente->getCep()}', '{$cliente->getTelefone()}', '{$cliente->getCpf()}');";
            $result = $con->query($sql); 
            $con = Conexao::desconectar();  
            return $result; 
        }

        public function Update(\MODEL\Cliente $cliente){
            $sql = "UPDATE cliente SET descr=?, fant=?, ender=?, bairro=?, cidade=?, cep=?, telefone=?, cpg_cpf=? WHERE id=?";

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($cliente->getDescr(), $cliente->getFant(), 
                                            $cliente->getEnder(), $cliente->getBairro(), $cliente->getCidade(), $cliente->getCep(), $cliente->getTelefone(), $cliente->getCpf()));
            $con = Conexao::desconectar();
            return  $result; 
        }

        public function Delete(int $id){
            $sql = "DELETE FROM cliente WHERE id=?";

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($id)); 
            $con = Conexao::desconectar();
            return  $result; 
        }
    }

?> 