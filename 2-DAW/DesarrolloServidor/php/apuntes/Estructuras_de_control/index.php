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
    $i = 6.8;
    switch($i){
        case 6.8:
            echo "correcto <br>";
            break;
        case 6:
            echo "casi";
            break;//para no lea el resto

    }
    $i=0;
    do{
        echo ("<li>Elemento $i</li>\n");
        $i++;
    }
    while($i <= 5);
    //for each con array
    $array1 = array("PHP 3" ,"PHP 4" ,"PHP 5" );
    foreach ($array1 as $var1) {
        echo "Elemento matriz 1: $var1 <br>";
    }
    //array con clave y valor
    $matriz2["PHP 3"] = 1998;
    $matriz2["PHP 4"] = 2000;
    $matriz2["PHP 5"] = 2004;
    foreach ($matriz2 as $key => $var1) { //=> es un operador de array de asignación
        echo "Elemento matriz 2:clave $key año $var1  <br>";
    }
?>
</html>