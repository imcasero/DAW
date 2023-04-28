<?php

class coche implements encendible{
    private $gasolina;
    private $bateria;
    private $estado="apagado";
    function __construct(){
        $this->gasolina=0;
        $this->bateria=10;
    }
    public function encender(){
        if ($this->estado == "apagado"){
            if ($this->bateria > 0){
                if ($this->gasolina>0){
                    $this->estado="encendido";
                    $this->bateria--;
                    echo "<br><b>Enciendo…</b> estoy encendido";
                }else{
                    echo "<br>No tengo gasolina";
                }
            }else {
                "<br>No tengo bateria";
            }
        }else{
            "<br>Ya estaba encendido";
        }
    }
    public function apagar(){
        if ($this->estado == "encendido"){
            $this->estado="apagado";
            echo "<br><b>Apago…</b> estoy apagado";
        }else{
            "<br>No estaba encendido";
        }
    }
    public function cargar_gasolina($litros){
        $this->gasolina+=$litros;
        echo "<br>Cargados $litros litros";
    }
}
?>