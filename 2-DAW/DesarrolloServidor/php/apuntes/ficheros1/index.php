<?php
    $fichero = @fopen("index.txt" , 'r');
    if (!$fichero) { 
        die('Problema con el fichero');
    } 
    while(!feof($fichero)){
        echo fgets($fichero) . '<br>';
    }
    fclose($fichero);
    
?>