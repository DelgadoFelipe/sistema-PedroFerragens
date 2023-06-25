<?php
    namespace BLL; 
    use DAL\dalProduto; 
    include_once '../DAL/dalProduto.php';
    
    class bllProduto {
        public function Select (){
            $dal = new  \Dal\dalProduto(); 
            return $dal->Select();
        }

        public function SelectID (int $id){
            $dal = new  \Dal\dalProduto(); 
           
            return $dal->SelectID($id);
        }


        public function Insert (\MODEL\Produto $item){
           $dal = new \DAL\dalProduto(); 

           $dal->Insert($item);
          
        }

        public function Update (\MODEL\Produto $item){
           $dal = new \DAL\dalProduto(); 
           $dal->Update($item);
        }

        public function Delete ($id) {
            $dal = new \DAL\dalProduto;

            $dal->Delete($id);
        }
    }




?>