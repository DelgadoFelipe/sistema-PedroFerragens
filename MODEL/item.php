<?php 
   namespace MODEL; 

   class Produto{
        private ?int $id; 
        private ?string $descr; 
        private ?float $qtdDisp;
        private ?float $prVenda;
        
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


        public function getQtdDisp() {
            return $this->qtdDisp; 
        }

        public function setQtdDisp(string $qtdDisp){
            $this->qtdDisp = $qtdDisp; 
        }

        public function getPrVenda() {
            return $this->prVenda; 
        }

        public function setPrVenda(string $prVenda){
            $this->prVenda = $prVenda; 
        }
   }

?>