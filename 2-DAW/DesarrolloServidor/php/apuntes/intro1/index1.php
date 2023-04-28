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
    
</body>
<?php
    $a = 9;
    echo 'a vale $a\n<br>'; //muestra a
    echo "a vale $a\n<br>"; //muestra a y avanza
    echo "<img src='logo.gif'><br>"; //muestra una imagen
    echo "<img src=\"logo.gif\"><br>"; //muestra la imagen
    $nombre="pepe";
$var=<<<xxx
Esta cadena que termina al encontrarse xxx.$nombre
xxx;
    echo $var;
?>
</html>