<?php
    class Cliente{
        public $caja;
        public function __construct(){
            $this->caja = new Caja();
        }
        public function llenar_caja($count){
            $this->caja->introduce($count);
        }
        public function enseñar_caja(){
            $this->caja->mostrar_contenido();
        }
    }
?>