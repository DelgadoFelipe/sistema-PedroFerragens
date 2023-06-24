<?php 
   namespace MODEL; 

   class Cliente{
        private ?int $id; 
        private ?string $descr; 
        private ?string $fant;
        private ?string $ender;
        private ?string $bairro;
        private ?string $cidade;
        private ?string $cep;
        private ?string $telefone;
        private ?string $cpf; 
        
        public function __construct() 
        {
            
        }

        public function getId() {
            return $this->id; 
        }

        public function setId(int $id){
            $this->id = $id; 
        }

        public function getDescr() {
            return $this->descr; 
        }

        public function setDescr(string $descr){
            $this->descr = $descr; 
        }


        public function getFant() {
            return $this->fant; 
        }

        public function setFant(string $fant){
            $this->fant = $fant; 
        }

        public function getEnder() {
            return $this->ender; 
        }

        public function setEnder(string $ender){
            $this->ender = $ender; 
        }

        public function getBairro(){
            return $this->bairro;
        }

        public function setBairro(string $bairro) {
            $this->bairro = $bairro;
        } 

        public function getCidade() {
            return $this->cidade; 
        } 

        public function setCidade(string $cidade) {
            $this->cidade = $cidade;
        }

        public function getCep(){
            return $this -> cep;
        }

        public function setCep(string $cep) {
            $this->cep = $cep;
        }

        public function getTelefone(){
            return $this->telefone;
        }

        public function setTelefone(string $telefone) {
            $this->telefone = $telefone;
        }

        public function getCpf(){
            return $this -> cpf;
        }

        public function setCpf(string $cpf) {
            $this->cpf = $cpf;
        }
   }

?>