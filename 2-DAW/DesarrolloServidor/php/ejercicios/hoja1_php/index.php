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

echo "1----------------------------------------------------------------------------- <br>";
    $dias = array(
        "Lunes" , 
        "Martes" , 
        "Miercoles" , 
        "Jueves" , 
        "Viernes" , 
        "Sabado" , 
        "Domingo"
    );

    //Bucle foreach
    echo "BUCLE FOREACH <br>";
    foreach ($dias as $key => $value) {
        # code...
        echo "El dia " . $key . " corresponde con " .$value;
        echo "<br>";
    }
    echo "<br>";
    echo "BUCLE FOR <br>";
    for ($i=0; $i < count($dias); $i++) { 
        # code...
        echo "El dia " . $i . " corresponde con " .$dias[$i];
        echo "<br>";
    }
    echo "<br>";

    echo "2----------------------------------------------------------------------------- <br>";
    $alumnos = array(
        "Juan Feliz", 
        "Carlos Vegas", 
        "Maria Magdalena", 
        "John Nieve", 
        "Mariano Da Silva"
    );

    print_r(array_slice($alumnos, 0, 3));
    echo "<br>";
    print_r(array_splice($alumnos, 3, 2));
    echo "<br> <br>";
    echo "3----------------------------------------------------------------------------- <br>";
    $colores = array(
        "Fuertes" => array(
            "Rojo" => "#FF0000",
            "Verde" => "#00FF00",
            "Azul" => "#0000FF",
        ),
        "Suaves" => array(
            "Rosa" => "#FE9ABC",
            "Amarillo" => "#FDF189",
            "Malva" => "#BC8F8F"
        )
    );

    echo "<table border=1>";
    foreach ($colores as $key => $value) {
        echo "<tr>";
        echo "<td>$key</td>";
        foreach ($value as $key1 => $value1) {
            echo "<td style=background-color:" . $value1 .";>" . $key1 . ":" .$value1."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<br> <br>";
    echo "4----------------------------------------------Corregir con foreach------------------------------- <br>";
    
    if (in_array("FF0000" , $colores)) {
        echo "existe";
    }else {
        echo "no existe";
    }
    echo "<br> <br>";
    echo "5----------------------------------------------------------------------------- <br>";
    $pila = array("cinco" => 5, "uno"=>1, "cuatro"=>4, "dos"=>2, "tres"=>3);

    print_r($pila);
    echo "<br>";
    asort($pila);
    print_r($pila);
    echo "<br>";
    $pila = array("cinco" => 5, "uno"=>1, "cuatro"=>4, "dos"=>2, "tres"=>3);
    arsort($pila);
    print_r($pila);
    echo "<br>";
    $pila = array("cinco" => 5, "uno"=>1, "cuatro"=>4, "dos"=>2, "tres"=>3);
    ksort($pila);
    print_r($pila);
    echo "<br>";
    $pila = array("cinco" => 5, "uno"=>1, "cuatro"=>4, "dos"=>2, "tres"=>3);
    sort($pila);
    print_r($pila);
    echo "<br>";
    $pila = array("cinco" => 5, "uno"=>1, "cuatro"=>4, "dos"=>2, "tres"=>3);
    rsort($pila);
    print_r($pila);
    echo "<br>";
    echo "<br>";
    echo "6----------------------------------------------------------------------------- <br>";
    $paises = array(
        "España" => "Madrid",
        "Francia" => "Paris",
        "Italia" => "Roma",
        "Alemania" => "Berlin",
        "Reino Unido" => "Londres" //Se que no es Europeo
    );
    ksort($paises);
    foreach ($paises as $key => $value) {
        # code...
        echo "La capital de " . $key . " es " .$value. "<br>";
    }
    asort($paises);
    echo "<br>";
    foreach ($paises as $key => $value) {
        # code...
        echo "La capital de " . $key . " es " .$value. "<br>";
    }
    echo "<br> <br>";
    echo "7----------------------------------------------------------------------------- <br>";
    $valores = array();
    $max_num = 10;

    for ($x=0;$x<$max_num;$x++) {
        $num_aleatorio = rand(1,10);
        array_push($valores,$num_aleatorio);
    };
    print_r($valores);
    
    $cant = array_count_values($valores);
    //print_r($cant);
    echo "<br>";
    if(isset($cant[2])){
        echo 'Cantidad:' .$cant[2];
    }else {
        echo 'No existe';
    };
?>
</html>