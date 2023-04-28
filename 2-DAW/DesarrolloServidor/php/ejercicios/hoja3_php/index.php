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
    $frase = "Esta cadena tiene mucha letras";
    echo $frase . "<br>";

    $fraseDes = str_split($frase , 1);

    $clave = array_search('a', $fraseDes); //strpost se sua esta
    if ($clave != null || $calve == false) {
        echo "La letra a se encuentra en : " . $clave . "(contando espacios)</br>";
    } else {
        echo "La ocurrencia no existe</br>";
    }

    $clave = array_search('m', $fraseDes);
    
    if ($clave != null || $calve == false) {
        echo "La letra m se encuentra en : " . $clave . "(contando espacios)</br>";
    } else {
        echo "La ocurrencia no existe</br>";
    }

    $fraseDes = explode(' ' , $frase);

    $clave = array_search('tiene', $fraseDes);
    

    if ($clave != null || $calve == false) {
        echo "La letra m se encuentra en : " . $clave . "</br>";
    } else {
        echo "La ocurrencia no existe</br>";
    }


    $fraseDes = str_split(strrev($frase) , 1);

    $clave = array_search('a', $fraseDes);
    if ($clave != null || $calve == false) {
        echo "La letra a se encuentra en : " . $clave . "(contando espacios)</br>";
    } else {
        echo "La ocurrencia no existe</br>";
    }
    //no funciona
    $clave = substr_count($frase , 'cadena');
    echo substr($frase , $clave) . "</br>";


    echo substr($frase , 12) . "</br>";
    echo substr($frase , 18 , 6) . "</br>";
    echo substr($frase , -6) . "</br>";
    //No funciona
    echo substr($frase , 26 , -6) . "</br>";
    echo substr($frase , 4 , 3) . "</br>";


    //PARTE 2

    $frase = "Bienvenidos a la aventura de aprender PHP en 30 horas";

    $long = strlen($frase);

    echo substr($frase , $long/2 , 1). "</br>";

    echo strpos($frase , "PHP"). "</br>";

    $fraseAux = str_replace($frase , "aventura" , "<b>misión</b>");

    echo $fraseAux . "</br>";
?>
</html>