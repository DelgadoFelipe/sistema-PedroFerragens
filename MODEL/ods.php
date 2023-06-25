<?php 
   namespace MODEL;

use DateTime;

   class Ods{
        private ?int $id;
        private ?int $cod_cft;
        private ?string $nome_cft;
        private ?string $data_ab; 
        private ?string $hora_ab; 
        private ?float $valor;
        private ?int $id_produto;
        private ?string $descr_produto;
        
        public function __construct() 
        {
        }

        public function getId() {
            return $this->id; 
        }

        public function setId(int $id){
            $this->id = $id; 
        }

        public function getCodCft() {
            return $this->cod_cft; 
        }

        public function setCodCft(int $cod_cft){
            $this->cod_cft = $cod_cft; 
        }


        public function getNomeCft() {
            return $this->nome_cft; 
        }

        public function setNomeCft(string $nome_cft){
            $this->nome_cft = $nome_cft; 
        }

        public function getDataAb(){
            return $this->data_ab; 
        }

        public function setDataAb(string $data_ab){
            $this->data_ab = $data_ab; 
        }

        public function getHoraAb() {
            return $this->hora_ab;
        }

        public function setHoraAb(string $hora_ab){
            $this->hora_ab = $hora_ab; 
        }

        public function getValor(){
            return $this->valor; 
        }

        public function setValor(float $valor){
            $this->valor = $valor; 
        }

        public function getIdProduto(){
            return $this->id_produto; 
        }

        public function setIdProduto(int $id_produto){
            $this->id_produto = $id_produto; 
        }

        public function getDescrProd(){
            return $this->descr_produto; 
        }

        public function setDescrProd(string $descr_produto){
            $this->descr_produto = $descr_produto; 
        }
        
   }

?>