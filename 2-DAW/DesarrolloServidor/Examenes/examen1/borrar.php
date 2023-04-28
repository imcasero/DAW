<?php
    $numero = $_POST['numeroInc'];
    $error;

    if (empty($numero)){
        $error = false;
    } else {
        $error = true;
    }

    if (!$error){
        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Borrar incidencia</title>
        </head>
        <body>
            <h3>Borrar incidencias</h3>
            <form action="borrar.php"  method="post">
                <label for="numeroInc">Numero incidencia: </label><input type="text" name="numeroInc"><br>
                <p style="color : red; font-size : 10px "> Debe introducir un valor</p><br><br>
                
                <button type="submit">Borrar</button>
            </form>
        </body>
        </html>
        ';
    }else {
        $fichero_lec = @fopen("fincidencias.txt" , "r+");
        if (!$fichero) {
            die("Fichero inaccesible");
        }
        $array_aux = array();
        while (!feof($fichero)) {
            $fila = fgets($fichero);
            array_push($array_aux , $fila);
        }
        $array = array();
        foreach ($array_aux as $key ) {
            $a = explode("$" , $key); 
            array_push($array , $a);
        }
        $array_aux= array();
        foreach ($array as $clave => $array_valor) {
            foreach ($array_valor as $clave => $valor) {
                if ($valor[0] == $numero) {
                    
                }
                
            }
        }
    }

?>