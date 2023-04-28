<?php

    echo '
    <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href="style.css">
        </head>
    <body>';

    $fichero = @fopen("alumnos_sancionados.txt", "r");
    if (!$fichero) {
        die("Error en el fichero");
    }
    echo '<table>';
    while(!feof($fichero)){
        $fila = explode("," , fgets($fichero));
        echo '<tr>';
        foreach ($fila as $key => $value) {
            echo '<td>' . $value . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';

    echo '</body>
</html>';
?>