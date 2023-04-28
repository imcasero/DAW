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
    echo '1-----------------------------------------------------------------------------</br>';
    $v_num1 = [1 ,2, 3 ,4 ,5, 6, 7 , 8, 9 ,10 ,11 ,12, 13, 14 ,15];
    $v_num2 = [1 ,2, 3 ,4 ,5, 6, 7 , 8, 9 ,10 ,11 ,12, 13, 14 ,15]; 
    for ($i = 0; $i < count($v_num1) ; $i++){
        $v_num3[$i] = $v_num1[$i] + $v_num2[$i] ;
    }
    print_r($v_num3);
    echo '</br>';
    echo '2-----------------------------------------------------------------------------</br>';
    $paises = array(
        'España' => array(
            'Toledo' => 300,
            'Madrid' => 700,
            'Barcelona' => 800,
            'Cantabria' => 400,
            'Valencia' => 500,
            'Albacete' =>200,
            'Canarias' =>  100
        ),
        'Alemania' => array(
            'Munich' => 500,
            'Berlin' => 400,
            'Sajonia' => 100,
            'Hesse' => 200,
            'Dormunt' => 300,
        )
    );

    $paises2 = array();
    $habitanespais=0;
    foreach ($paises as $pais => $arrayprov) {
        foreach($arrayprov as $prov => $numhabitantes){
            $habitanespais += $numhabitantes;
        };
        array_push($paises2 , array($pais => $habitanespais));
        $habitanespais = 0;
    }
    echo '</br>';
    print_r($paises2);
    echo '</br>';
    echo '3-----------------------------------------------------------------------------</br>';
    foreach ($paises as $pais => $arrayprov) {
        sort($arrayprov, 1); //No se porque aqui no ordena :,(
    };
    foreach ($paises as $pais => $arrayprov) {
        foreach($arrayprov as $provincia => $hab){
            echo 'La provincia con menos habaitantes de '. $pais . ' es ' .$provincia . ' con ' . $hab .'</br>';
            break;
        }
    }
    
?>