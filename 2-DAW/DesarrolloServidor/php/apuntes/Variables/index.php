<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    
</body>
<?php

    $varN=1;
    $varC='2 flores';
    $varC = $varC+$varN;
    echo "<p>La variable tiene este valor $varC</p>";
    if($var){
        echo $var; //al no iniciarla esta vacia pero entra como false
    } else {
        echo $var;
        echo "Hola";
    }//tener en cuenta que podemos modificar el nombre de la misma variable

?>
</html>