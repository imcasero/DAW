<?php
$nombre;
$destino;
$duracion;
$salida;
$documento = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form action="validacion.php" enctype="multipart/form-data" method="post">
        <table border="1" cellspacing="0">
            <tr>
                <td><label for="nombre">Introduzca el nombre del circuito</label></td>
                <td><input type="text" name="nombre"></td>
            </tr>
            <tr>
                <td><label for="destino">Introduzca el destino</label></td>
                <td><input type="text" name="destino"></td>
            </tr>
            <tr>
                <td><label for="duracion">Introduzca la duracion</label></td>
                <td><input type="text" name="duracion"></td>
            </tr>
            <tr>
                <td><label for="salida">Introduzca los dias de salida</label></td>
                <td><input type="text" name="salida"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit">Enviar</button></td>
            </tr>
        </table>
    </form>
</body>
</html>';
$cadena_error_existe =
'<p style="color : red; font-size : 20px ;text-align:center"> 
   El destino ya existe
</p>';
$cadena_error = 
'<p style="color : red; font-size : 20px ;text-align:center"> 
   Todos los campos son obligarotios 
</p>';

$inter = array();

    if (empty($_POST['nombre'])) {
        $inter['nombre'] = false;
    }else {
        $inter['nombre'] = true;
        $nombre = $_POST['nombre'];
    }
    if (empty($_POST['destino'])) {
        $inter['destino'] = false;
    }else {
        $inter['destino'] = true;
        $destino = $_POST['destino'];
    }
    if (empty($_POST['duracion'])) {
        $inter['duracion'] = false;
    }else {
        $inter['duracion'] = true;
        $duracion = $_POST['duracion'];
    }
    if (empty($_POST['salida'])) {
        $inter['salida'] = false;
    }else {
        $inter['salida'] = true;
        $salida = $_POST['salida'];
    }

    if (in_array(false , $inter)) {
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
        <body>
            <form action="validacion.php" enctype="multipart/form-data" method="post">

                <table border="1" cellspacing="0">
                    <tr>
                        <td><label for="nombre">Introduzca el nombre del circuito</label></td>
                        <td><input type="text" name="nombre"></td>
                    </tr>
                    <tr>
                        <td><label for="destino">Introduzca el destino</label></td>
                        <td><input type="text" name="destino"></td>
                    </tr>
                    <tr>
                        <td><label for="duracion">Introduzca la duracion</label></td>
                        <td><input type="text" name="duracion"></td>
                    </tr>
                    <tr>
                        <td><label for="salida">Introduzca los dias de salida</label></td>
                        <td><input type="text" name="salida"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><button type="submit">Enviar</button></td>
                    </tr>
                </table>
                '.$cadena_error.'
            </form>
            
        </body>
        </html>
        ';
    }else{
        //CADENA PARA INTRODUCIR O COMPROBAR
        $cadena = "$nombre:$destino:$duracion:$salida\n";
        
        $existe = false; //INTERRUPTOR
        $fichero_lec = @fopen('index.txt' , 'r');//LEO FICHERO
        if (!$fichero_lec) {
            die('Problemas con el fichero lectura');
        }
        while (!feof($fichero_lec)) {
            $lec = fgets($fichero_lec);
            if (strpos($lec , $destino)) {
                $existe = true; //INTERRUPTOR SALTA SI EXISTE EL DESTINO
                break;
            }
        }
        if (!$existe) {//SI NO EXISTEN LOS DATOS...SOLO INSERCCION DE DATOS!!
            echo 'Insertando datos...';
            $fichero_es = @fopen('index.txt', 'a+');//ESCRITORUA
            if (!$fichero_es) {
                die('Problemas con el fichero escritura');
            }
            fwrite($fichero_es , $cadena);//ESCRIBIMOS LA CADENA AL FINAL
            @fclose($fichero_es);//CERRAMOS FICHEO ESCRITURA
        }
    }
    @fclose($fichero_lec);//CERRAMOS FICHERO LECTURA
    
    if ($existe) { //SI EXISTE
        echo $documento; //IMPRIMIMOS EL DOCUMENTO
        echo $cadena_error_existe; //Y LA CADENA ERROR DE QUE EXISTE
        //generar tabla
        $array_datos_aux = array();
        $datos_fichero = @fopen('index.txt' , 'r+'); //FICHERO LECTURA
        if (!$datos_fichero) {
            die('Probelmas con el fichero datos');
        }
        while (!feof($datos_fichero)) {
            $fila = fgets($datos_fichero);
            array_push($array_datos_aux , $fila); //ALAMACENO LOS DATOS EN EL ARRAY_DATOS_AUX
        }
        $array_datos = array();
        foreach ($array_datos_aux as $string_datos) { //CREO EL ARRAY BIDIMENSIONAL PARA IMPRIMIR
            $a = explode(':' , $string_datos); 
            array_push($array_datos , $a);
        }
        //PINTAMOS LA TABLA
        echo '<table border="1" cellspacing="0">';
        foreach ($array_datos as $clave => $array) {
            echo '<tr>';
            foreach ($array as $valor) {
                echo '<td>'.$valor.'</td>';
            }
            echo '</tr>';
        }
        echo '</table>';

    }else {
        echo $documento; //IMPRIMIMOS EL DOCUMENTO
        //generar tabla
        $array_datos_aux = array();
        $datos_fichero = @fopen('index.txt' , 'r+'); //FICHERO LECTURA
        if (!$datos_fichero) {
            die('Probelmas con el fichero datos');
        }
        while (!feof($datos_fichero)) {
            $fila = fgets($datos_fichero);
            array_push($array_datos_aux , $fila); //ALAMACENO LOS DATOS EN EL ARRAY_DATOS_AUX
        }
        $array_datos = array();
        foreach ($array_datos_aux as $string_datos) { //CREO EL ARRAY BIDIMENSIONAL PARA IMPRIMIR
            $a = explode(':' , $string_datos); 
            array_push($array_datos , $a);
        }
        //PINTAMOS LA TABLA
        echo '<table border="1" cellspacing="0">';
        foreach ($array_datos as $clave => $array) {
            echo '<tr>';
            foreach ($array as $valor) {
                echo '<td>'.$valor.'</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }

?>