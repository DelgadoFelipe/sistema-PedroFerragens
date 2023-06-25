<?php
    namespace BLL; 
    use DAL\dalOds; 
    include_once '../DAL/dalOds.php';
    
    class bllOds {
        public function Select (){
            $dal = new  \Dal\dalOds(); 
            return $dal->Select();
        }

        public function SelectID (int $id){
            $dal = new  \Dal\dalOds(); 
           
            return $dal->SelectID($id);
        }


        public function Insert (\MODEL\Ods $ods){
           $dal = new \DAL\dalOds(); 
           $dal->Insert($ods);
        }

        public function Update (\MODEL\Ods $ods){
           $dal = new \DAL\dalOds(); 
           $dal->Update($ods);
        }

        public function Delete ($id) {
            $dal = new \DAL\dalOds;

            $dal->Delete($id);
        }
    }

?>