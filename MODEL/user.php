<?php 
   namespace MODEL; 

   class User{
        private ?int $id; 
        private ?string $user; 
        private ?string $pwd;

        public function __construct(?int $id, ?string $user, ?string $pwd)
        {
            $this->id = $id;
            $this->user = $user;
            $this->pwd = $pwd;
        }

        public function getId() {
            return $this->id; 
        }

        public function getUser() {
            return $this->user; 
        }

        public function getPwd() {
            return $this->pwd; 
        }
   }

?>