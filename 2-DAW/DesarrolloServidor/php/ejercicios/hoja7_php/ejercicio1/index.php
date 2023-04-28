<?php

    $fichero = @fopen("index.html" , 'r');
    if (!$fichero) { 
        die('Problema con el fichero');
    } 
    $salida = @fopen("index.txt" , 'a+');
    if (!$salida) { 
        die('Problema con el fichero');
    }
    while(!feof($fichero)){
        fwrite($salida , fgets($fichero));
    }
    fclose($fichero);
    fclose($salida);
    $bytes = filesize("index.txt");
    echo 'El numero de bits del ficero son: ' .$bytes;
?>