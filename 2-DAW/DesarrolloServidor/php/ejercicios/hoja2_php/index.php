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
<?php
    echo "1--------------------------------------------------------------";
    $palabra1 = "Maria";
    $palabra2 = "Bajaria";

    $palabra1 = strtoupper($palabra1);
    $palabra2 = strtoupper($palabra2);

    $comp1 = substr($palabra1 , -3);
    
    echo "<br>";
    if (str_ends_with($palabra2 , $comp1)) {
        echo "Riman en " . $comp1;
    } else {
        $comp1 = substr($palabra1 , -2);
        if(str_ends_with($palabra2 , $comp1)){
            echo "Riman a medias en " . $comp1;
        }else {
            echo "No riman";
        }  
    }
    echo "<br>";
    echo "2--------------------------------------------------------------";

    echo "<br>";
    echo "3--------------------------------------------------------------";
    
    echo "<br>";
    echo "4--------------------------------------------------------------";
    $frase = "Hola que tal";
    $fraseFinal = explode(" " , $frase);
    echo "<br>";
    print_r($fraseFinal);
    echo array_slice($fraseFinal , -2 , 2);
    echo "<br>";
    echo "5--------------------------------------------------------------";
    echo "<br>";
    echo substr_count($frase , "a");
    

?>
</html>