<?php
    class Caja_fuerte_metalica extends Caja_fuerte{
        public $combinacion;
        protected $id=1;
        public function __construct($alto , $ancho ,$largo , $color){
            parent::__construct($alto=1 , $ancho=1 , $largo=1 , $color = "negro");
            $this->combinacion = ' ';
        }
        public function muestra_contenido(){
            parent::muestra_contenido();
        }
    }
?>