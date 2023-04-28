<?php
function Test (){
    static $a = 0;
    echo $a. '<br>';
    $a++;
    }
    test();
    $a=25;
    echo $a. '<br>';
    test();
    test();
    echo $a . '<br>';

    function prueba(){
        $num_args = func_num_args();
        echo "Numero de argumentos:$num_args<br/>\n";
        if ($num_args >= 2) {
            echo "El 2ºargumento es:".func_get_arg(1)."<br/>\n";
        }
        $parametros=func_get_args();
        echo "Array con todos los argumentos:<br />\n";
        print_r($parametros);
    }
    prueba (1, 2, 3);
    prueba (1, 2);
    echo '<br>';
    function sum(...$números) {
        $acu = 0;
        foreach ($números as $n) {
        $acu += $n;
        }
        return $acu;
        }
    echo sum(1, 2, 3, 4); // El resultado sería 10
?>

