<?php
    class Caja { //si contiene un metodo abstracto hay que marcar la clase como abstracta
        public $alto;
        public $ancho;
        public $largo;
        public $color;
        public $contenido;
        private static $num_caja;
        public function __construct($alto=1, $ancho=1, $largo=1, $color="negro" ,$contenido="vacio" , $num_caja=1) {
            $this->alto = $alto;
            $this->ancho = $ancho;
            $this->largo = $largo;
            $this->color = $color;
            $this->contenido = $contenido;
            $this->num_caja = $num_caja;
        }
        public function introduce($cosa){
            $this -> contenido = $cosa;
        }
        public function mostrar_ncaja($num_caja){
            echo $num_caja;
        }
        public function muestra_contenido(){//si le ponemos como abstracta no podemos crear el objeto
            echo $this->contenido . '</br>';
        }
        public function muestra_color(){
            echo $this->color . '</br>';
        }
    }
    
?>