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
    $a = array('uno' => 1, 'dos' => 2);
    $b = array('un' => 1, 'do' => 2);
    if($a === $b){
        echo '<h1> esto es verdad</h1>';
    };
    $c = $a + $b ;
    foreach ($c as $key => $value) {
        # code...
        echo $key .' '. $value . '<br>';
    }

    $array = array(
        0 => 100,
        'color'=>'rojo',
    );
    print_r(array_keys($array));

    $matriz = array(4.8 , 9 ,2.1 ,10);
    $matriz_reales = preg_grep("/^(\d+)?\.\d+$/" , $matriz);
    echo '<br>';
    print_r($matriz_reales);

?>
</html>