<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>
<?php
$a = array('1.10', 12.4, 1.13);
if (in_array('12.4', $a, true)) {
    echo "'12.4' Encontrado con chequeo STRICT\n";
}
if (in_array(1.13, $a, true)) {
    echo "1.13 Encontrado con chequeo STRICT\n";
}

echo '<br>';

$matriz = array(1, "hola", 1, "mundo", "hola");
print_r(array_count_values($matriz)); // devuelve array(1=>2,"hola"=>2,"mundo"=>1)
echo '<br>';

$contador = array();
$resultado = array();

foreach ($matriz as $key => $value) {
    # code...

    if (!isset($resultado[$value])) {
        $resultado[$value] = 0;
    }
    $resultado[$value]++;
}

print_r($resultado);

echo '<br>';
echo '<br>';
echo '<br>';

$matriz2 = $matriz;

array_push($matriz2, 5, 7);
print_r($matriz2);
echo '<br>';
array_pop($matriz2);
print_r($matriz2);
echo '<br>';
array_shift($matriz2);
print_r($matriz2);
echo '<br>';
array_unshift($matriz2, 12, 9583247);
print_r($matriz2);
echo '<br>';
echo '<br>';

$precios = array(1.2, 24, 14.5, 29.9);
function aEuros(&$valor, $clave)
{
    $valor = $valor / 166.386;
}
array_walk($precios, 'aEuros');
print_r($precios);

$matriz_destino = array('altura' => 185, 'peso' => 85);
$matriz_origen = array('pelo' => 'moreno', 'peso' => 95);
var_dump(array_replace($matriz_destino, $matriz_origen));
echo '<br>';
print_r($matriz_origen);
echo '<br>';
echo '<br>';

$num1 = array(25, 24, 23);
$num2 = array(5, 4, 3);
print_r(array_merge($num1, $num2));
echo '<br>';

print_r(array_replace($num1, $num2));
echo '<br>';
$resultado = array_merge_recursive($matriz_destino, $matriz_origen);
echo '<br>';

foreach ($resultado as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $key => $value) {
            echo ("key " . $key . " value " . $value);
            echo '<br>';
        }
    }
}
echo '<br>';
$input = array(12, 10, 9);

$result = array_pad($input, 5, 0);
print_r($result);
// el resultado es array(12, 10, 9, 0, 0)
echo '<br>';
$result = array_pad($input, -7, -1);
print_r($result);
// el resultado es array(-1, -1, -1, -1, 12, 10, 9)

$entrada = array("a", "b", "c", "d", "e");

$salida = array_slice($entrada, 2);
print_r($salida);
echo '<br>';  // devuelve "c", "d", y "e"
$salida = array_slice($entrada, -2, 1);
print_r($salida);
echo '<br>'; // devuelve "d"
$salida = array_slice($entrada, 0, 3);
print_r($salida);   // devuelve "a", "b", y "c"

// observe las diferencias en las claves de los arrays
echo '<br>';
print_r(array_slice($entrada, 2, -1));

echo '<br>';
print_r(array_slice($entrada, 2, -1, true));
echo ' true ^ <br>';


$result = array_pad($matriz_origen, 5, 0);
print_r($result);
echo '<br>';
echo '<br>';

$entrada = array("rojo", "verde", "azul", "amarillo");
array_splice($entrada, 2);
print_r($entrada);
echo '<br>';

$entrada = array("rojo", "verde", "azul", "amarillo");
array_splice($entrada, 1, -1);
print_r($entrada);
echo '<br>';
echo '<br>';

$precios = array("azucar", "sal", "caña");
$precios2 = array("cerveza", "cereal", "azucar");



print_r(array_intersect($precios, $precios2)); //==
echo '<br>';
print_r(array_intersect_assoc($precios, $precios2)); //===
echo '<br>';
echo '<br>';

$mat = array("arroz", "sal", "pepino");
$mat2 = array("Arroz", "sal", "pepino");

print_r(array_unique($mat));
echo '<br>';
print_r(array_unique($mat2));
echo '<br>';
$mat3 = array(77, "1.10", 3, 2, 99 , 1 , 128 , 100);
print_r(array_unique($mat3, SORT_NUMERIC));
echo '<br>';
print_r(array_combine($mat, $mat2));

$mat4 = array(
    1 => 'hola',
    2 => 'adios',
    3 => 'hello',
    4 => 'bye'
);

echo '<br> TRUE-';
print_r(array_reverse($mat2 , true));
echo '<br> FALSE-';
print_r(array_reverse($mat2 , false));
echo '<br>' ;
echo '<br>' ;

$ciudad="miami";
$edad="23";
$vec=compact("ciudad" , "edad");
print_r($vec);
echo '<br>' ;
echo '<br>' ;

shuffle($mat2);
print_r($mat2);
echo '<br>' ;
shuffle($mat4);
print_r($mat4);
echo '<br>' ;
echo '<br>' ;
echo '<br>' ;
//sort
echo '<br>' ;
print_r($mat3);
echo '<br>' ;
sort($mat3);
print_r($mat3);

echo '<br>' ;echo '<br>' ;

echo '<br>' ;
print_r($mat3);
echo '<br>' ;
arsort($mat3);
print_r($mat3);

echo '<br>' ;echo '<br>' ;

echo '<br>' ;
print_r($mat3);
echo '<br>' ;
asort($mat3);
print_r($mat3);

echo '<br>' ;echo '<br>' ;

echo '<br>' ;
print_r($mat3);
echo '<br>' ;
ksort($mat3);
print_r($mat3);

echo '<br>' ;echo '<br>' ;


function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

$a = array(3, 2, 5, 6, 1);

usort($a, "cmp");

print_r($a);

echo '<br>' ;echo '<br>' ;

$ar = array(
    array("10", 11, 100, 100, "a"),
    array(   1,  2, "2",   3,   1)
   );
array_multisort($ar[0], SORT_ASC, SORT_STRING,
             $ar[1], SORT_NUMERIC, SORT_DESC);
print_r($ar);
echo '<br>' ;echo '<br>' ;

$array1 = array(10, 100, 100, 0);
$array2 = array(1, 3, 2, 4);
array_multisort($array1, $array2);

print_r($array1);
echo '<br>' ;
print_r($array2);
echo '<br>' ;echo '<br>' ;
sort($ar);
print_r($ar);
echo '<br>' ;echo '<br>' ;

$datos[] = array('volumen' => 67, 'edición' => 2);
$datos[] = array('volumen' => 86, 'edición' => 1);
$datos[] = array('volumen' => 85, 'edición' => 6);
$datos[] = array('volumen' => 98, 'edición' => 2);
$datos[] = array('volumen' => 86, 'edición' => 6);
$datos[] = array('volumen' => 67, 'edición' => 7);

$volume  = array_column($datos, 'volume'); //column es importante
$edition = array_column($datos, 'edition');

print_r($datos);
echo '<br>' ;echo '<br>' ;
echo '<br>' ;echo '<pre>';
var_dump($_SERVER);
echo '</pre>';

echo '<br>' ;echo '<br>' ;
echo '<br>' ;echo '<pre>';
var_dump($_POST);
echo '</pre>';



?>

</html>