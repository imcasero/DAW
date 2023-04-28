<?php


spl_autoload_register(function ($clase){
    include  './' .$clase . '.php';
});

$coche1 = new Coche();
$coche1-> encender();
$coche1 -> cargar_gasolina(12);
$coche1-> encender();
$coche1-> apagar();

$bombilla1 = new Bombilla();
$bombilla1 -> encender();
$bombilla1 -> apagar();


?>