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
</html>
<?php
    $contador;
    $fp = fopen("visitas.txt", "r+");
    if (!$fp) { 
        die('Problema con el fichero');
    }
    while(!feof($fp)){
        $contador =  fgets($fp , 8192);
    }
    echo 'El contador es: ' .$contador;
    fclose($fp);
    $contador++;
    $write = fopen("visitas.txt", "r+");
    if (!$write) { 
        die('Problema con el fichero');
    }
    fwrite($write , $contador);
?>