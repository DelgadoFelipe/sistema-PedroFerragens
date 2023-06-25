<?php
    namespace BLL; 
    use DAL\dalUser; 
    include_once '../DAL/dalUser.php';
    
    class bllUser {
        public function Select (){
            $dal = new  \Dal\dalUser(); 
            return $dal->Select();
        }

        public function SelectID (int $id){
            $dal = new  \Dal\dalUser(); 
           
            return $dal->SelectID($id);
        }


        public function Insert (\MODEL\User $user){
           $dal = new \DAL\dalUser(); 
           $dal->Insert($user);
        }

        public function Update (\MODEL\User $user){
           $dal = new \DAL\dalUser(); 
           $dal->Update($user);
        }

        public function Delete ($id) {
            $dal = new \DAL\dalUser;

            $dal->Delete($id);
        }
    }
?>