<?php
    
    class Caja_fuerte extends Caja{
        public $combinacion;
        public function __construct($alto , $ancho ,$largo , $color){
            parent::__construct($alto=1 , $ancho=1 , $largo=1 , $color = "negro");
            $this->combinacion = ' ';
        }
        public function muestra_contenido(){
            parent::muestra_contenido();
        }
        public function programa_codigo($numero){
            $this->combinacion = $numero;
        }
        public function muestra_cod(){
            echo $this->combinacion . '</br>';
        }
    }
?>