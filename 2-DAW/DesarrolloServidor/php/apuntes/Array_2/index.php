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
    $pais=array(
        'España'=>array(
            'nombre'=> 'España',
            'idioma'=> 'Español',
            'moneda'=> 'euro',  
        ),
        'Francia'=>array(
            'nombre '=> 'Francia',
            'idioma '=> 'Frances',
            'moneda '=> 'euro', 
        )
    );

    echo '<table border="1">';
    foreach ($pais as $nombrePais => $array2) {
        echo '<tr>';
        echo '<th>' . $nombrePais . '</th>';
        foreach ($array2 as $key => $value) {
            echo '<td>' . $value . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
?>
</html>