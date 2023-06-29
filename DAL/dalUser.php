<?php
    namespace DAL;

use MODEL\User;

    include_once 'conexao.php';
    include_once  'C:\xampp\htdocs\pedroFerragens-main\MODEL\user.php';
    
    
    class dalUser {

        public function Select() {

          $lstUser = [];
          $con = Conexao::conectar(); 
          $sql = "select * from usuarios WHERE dump != 1;";

          $result = $con->query($sql); 
          $con = Conexao::desconectar();
         
          foreach($result as $linha){
               $user = new \MODEL\User($user = $linha['id'], $user = $linha['user'], $user = $linha['pwd']);

            //    $user->setId($linha['id']); 
            //    $user->setUser($linha['user']);
            //    $user->setPwd($linha['pwd']); 
               $lstUser[]= $user; 
          }
          return $lstUser;   
        }

        public function SelectID(int $id){
            $sql = "select * from usuarios where id=?;";
            $pdo = Conexao::conectar(); 
            $query = $pdo->prepare($sql);
            $query->execute (array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar(); 

            $user = new \MODEL\User($user = $linha['id'], $user = $linha['user'], $user = $linha['pwd']);
            // $user->setId($linha['id']); 
            // $user->setUser($linha['user']);
            // $user->setPwd($linha['pwd']); 
            return $user; 
        }

        public function Insert(\MODEL\User $user){
            $con = Conexao::conectar(); 
            $sql = "INSERT INTO usuarios (user, pwd) 
                   VALUES  ('{$user->getUser()}', '{$user->getPwd()}');";
            $result = $con->query($sql); 
            $con = Conexao::desconectar();  
            return $result; 
        }

        public function Update(\MODEL\User $user){
            $sql = "UPDATE usuarios SET user=?, pwd=? WHERE id=?";
            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($user->getUser(), $user->getPwd()));
            $con = Conexao::desconectar();
            return  $result; 
        }

        public function Delete(int $id){
            $sql = "DELETE FROM usuarios WHERE id=?";

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($id)); 
            $con = Conexao::desconectar();
            return  $result; 
        }
        
        public static function selectByLogin(User $user){
            $login = $user->getUser();
            $sql = "SELECT * FROM usuarios WHERE user='" . $login . "' And Dump != 1";
            $conn = Conexao::conectar();
            $result = $conn->query($sql);
            $conn = Conexao::desconectar();
            $users = [];

            foreach ($result as $usu) {
                $user = new User($usu["id"], $usu["user"], $usu["pwd"]);
                $users[] = $user;
            }

            if (sizeof($users) > 0) {
                return $users[0];
            } else {
                return false;
            }
        }

        public static function verificaSenha(User $user) {
            $user = dalUser::selectByLogin($user);
            if ($user) {
                $pwd = md5($user->getPwd());
                if (md5($user->getPwd()) === $pwd) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
    }

?> 