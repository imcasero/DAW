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
    $semana = array("Lunes " , "Martes " , "Miercoles " , "Jueves " , "Viernes " , "Sabado " , "Domingo ");
    echo count($semana); //7
    reset($semana); //al principio
    echo current($semana);//lubes
    next($semana);
    echo pos($semana); //martes
    end($semana);
    echo pos($semana); //domingo
    prev($semana);
    echo current($semana);//sabado
    echo key($semana); //5

    echo '<br>';

    $vec;
    $vec[1]='1ºElemento';
    $vec[8]='2ºElemento';
    $vec['tercero'] = '3ºElemento';

    foreach ($vec as $key) {
        echo 'Ind es: '. $key .'<br>';//aunque le pongas indices...(siguiente comentario)
    }

    $color = array('rojo' => 101, 'verde' => 51 , 'azul'=>255);
    $medidas = array(10 , 25 ,15); //imprime según tu hayas añadido los valores

    $medidas[] = 'vacio';//si no le indicas orden lo metera en el siguiente

    foreach ($medidas as $key) {
        echo 'medida : ' . $key . '<br>';
    }

    $a[] = 'vacio';
    
    foreach ($a as $key => $value) {
        echo 'a: ' . $key . ' valor : ' . $value.'<br>'; //te asigna un indice automatico
    }
    $vec[5] = 'soy una cadena';
    $vec[1000] = 5;

    foreach ($vec as $key) {
        echo 'Ind es: '. $key .'<br>';//aunque le pongas indices exageradamente grade no te reservara esas posiciones
    }

    $vec = array ( 2=>3 ,9, 2.4, 'nombre'=>'Juan');
    $vec[]='vacio'; //te lo añade a partir del maximo contador utilizado, ya que no puede interpretar cadenas

    foreach ($vec as $key => $value) {
        echo 'vec: ' . $key . ' valor : ' . $value.'<br>';
    }
    $vec[5] = '1º elemento'; 
    $vec[1] = '2º elemento';
    $vec[] = '3º elemento'; //este escribe en el 6
    $vec[6]= 'prueba'; //y este lo sobreescribe
    echo '<br>';
    foreach ($vec as $key => $value) {
        echo 'vec: ' . $key . ' valor : ' . $value.'<br>';
    }
    unset($vec[6]);//borrar el balor 6 pero no el contador interno
    $vec[]='Siguente';//asique aqui te cogera el indice 7
    foreach ($vec as $key => $value) {
        echo 'vec: ' . $key . ' valor : ' . $value.'<br>';
    }
    print_r($vec);//MUestra el contenido del array
    echo '<br><br>';
    //print()//va con formato
    //echo //escribe a porron
    echo '<pre>';
    var_dump($vec);//Muestra el array de golpe
    echo '</pre>';//con el pre le das format de que salga linea a linea
    echo '<br>';
?>
</html>