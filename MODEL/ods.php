<?php 
   namespace MODEL;

   class Ods{
        private ?int $id;
        private ?string $nome_cft;
        private ?string $dataAb; 
        private ?string $horaAb; 
        private ?float $valor;
        private ?int $idProduto;
        private ?string $descrProduto;
        
        public function __construct() 
        {
        }

        public function getId() {
            return $this->id; 
        }

        public function setId(int $id){
            $this->id = $id; 
        }

        public function getNomeCft() {
            return $this->nome_cft; 
        }

        public function setNomeCft(string $nome_cft){
            $this->nome_cft = $nome_cft; 
        }

        public function getDataAb(){
            return $this->dataAb; 
        }

        public function setDataAb(string $dataAb){
            $this->dataAb = $dataAb; 
        }

        public function getHoraAb() {
            return $this->horaAb;
        }

        public function setHoraAb(string $horaAb){
            $this->horaAb = $horaAb; 
        }

        public function getValor(){
            return $this->valor; 
        }

        public function setValor(float $valor){
            $this->valor = $valor; 
        }

        public function getIdProduto(){
            return $this->idProduto; 
        }

        public function setIdProduto(int $idProduto){
            $this->idProduto = $idProduto; 
        }

        public function getDescrProd(){
            return $this->descrProduto; 
        }

        public function setDescrProd(string $descrProduto){
            $this->descrProduto = $descrProduto; 
        }
        
   }

?>