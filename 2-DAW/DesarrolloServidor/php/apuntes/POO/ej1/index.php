<?php
echo 'SPL_AUTOLOAD_REGISTER----- <br>';
// function hola($clase){
//     include $clase . '.php';
// }
// spl_autoload_register('hola');
spl_autoload_register(function ($clase){
    include  './' .$clase . '.php';
});
// include 'caja_fuerte.php';
$caja1 = new Caja();
$caja1 -> muestra_contenido();
$caja1 -> introduce('abedul');
$caja1 -> muestra_contenido();
$caja1 -> muestra_color();
echo 'CAJA 2 ----- <br>';
$caja2 = new Caja_fuerte(1 , 3 ,4 , 'amarillo');
$caja2 -> muestra_contenido();
$caja2 -> introduce('dinerito');
$caja2 -> muestra_contenido();
$caja2 -> muestra_cod();
$caja2 -> programa_codigo(1234);
$caja2 -> muestra_cod();

echo 'METODOS ----- <br>';
$metodos = get_class_methods('Caja');
foreach ($metodos as $key => $value) {
    echo "Key : $key --> Value: $value </br>";
}
echo 'SET & GET----- </br>';
$obj = new Objeto(1, "objeto1", "prueba1@ejemplo.com");
$p = clone $obj;
echo $p->id; //2
echo '<br>';
$p->nombre = "nombre cambiado";
echo $p->nombre; //nombre cambiado
echo '<br>';
echo $obj->nombre;
echo '<br>';
// echo 'CAJA FUERTE METALICA ----- </br>';
$caja3 = new Caja_fuerte_metalica(1, 2, 3, "azul");
// $caja3 -> muestra_contenido();
// echo 'CLIENTE ----- </br>'; //AQUI DA ERROR
// $cliente = new Cliente();
// $cliente->llenar_caja("Cromos");
// $cliente->enseñar_caja();
echo $caja1 -> mostrar_ncaja();
?>