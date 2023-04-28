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
    </form>
</body>
</html>
<?php
    $array_datos_aux = array();
    $datos_fichero = @fopen('index.txt' , 'r+');
    if (!$datos_fichero) {
        die('Probelmas con el fichero datos');
    }
    while (!feof($datos_fichero)) {
        $fila = fgets($datos_fichero);
        array_push($array_datos_aux , $fila);
    }
    $array_datos = array();
    foreach ($array_datos_aux as $string_datos) {
        $a = explode(':' , $string_datos); 
        array_push($array_datos , $a);
    }
    

    //pintar tabla

    echo '<table border="1" cellspacing="0">';
    foreach ($array_datos as $clave => $array) {
        echo '<tr>';
        foreach ($array as $valor) {
            echo '<td>'.$valor.'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
?>