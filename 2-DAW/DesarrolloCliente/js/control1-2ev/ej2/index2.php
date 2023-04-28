<?php
    $valor = $_POST['select'] . '.txt';

    $fichero = @fopen($valor , 'r');
    $string = '';
    while(!feof($fichero)){
        $string .= fgets($fichero);
    }

    echo $string;
?>