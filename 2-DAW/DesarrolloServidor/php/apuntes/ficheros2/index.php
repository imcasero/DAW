<?php
    $cadena = 'Hola mundo';
    $fichero = @fopen("index.txt" , 'a+');
    if (!$fichero) { 
        die('Problema con el fichero');
    }
    fwrite($fichero , $cadena);

    $fichero_a = @fopen('index.txt' , 'r');
    if (!$fichero_a) { 
        die('Problema con el fichero');
    }
    while(!feof($fichero_a)){
        echo fgets($fichero_a) . '<br>';
    }
    fclose($fichero);
    fclose($fichero_a);
?>