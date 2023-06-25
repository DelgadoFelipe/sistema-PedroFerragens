<?php 
   namespace MODEL; 

   class User{
        private ?int $id; 
        private ?string $user; 
        private ?string $pwd;
        
        public function __construct() 
        {
        }

        public function getId() {
            return $this->id; 
        }

        public function setId(int $id){
            $this->id = $id; 
        }

        public function getUser() {
            return $this->user; 
        }

        public function setUser(string $user){
            $this->user = $user; 
        }


        public function getPwd() {
            return $this->pwd; 
        }

        public function setPwd(string $pwd){
            $this->pwd = $pwd; 
        }
   }

?>