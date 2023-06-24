<?php
    namespace BLL; 
    use DAL\dalCliente; 
    include_once '../DAL/dalCliente.php';
    
    class bllCliente {
        public function Select (){
            $dal = new  \Dal\dalCliente(); 
            return $dal->Select();
        }

        public function SelectID (int $id){
            $dal = new  \Dal\dalCliente(); 
           
            return $dal->SelectID($id);
        }


        public function Insert (\MODEL\Cliente $cliente){
           $dal = new \DAL\dalCliente(); 

           $dal->Insert($cliente);
          
        }

        public function Update (\MODEL\Cliente $cliente){

           $dal = new \DAL\dalCliente(); 

           $dal->Update($cliente);
          
        }

        public function Delete ($id) {
            $dal = new \DAL\dalCliente;

            $dal->Delete($id);
        }
    }




?>