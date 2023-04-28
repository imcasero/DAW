<?php

/*EJERCIIO1*/
echo '<h1><i>EJERCICIO 1</i></h1>';
$v_num1 = array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);
$v_num2 = array(2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2);
$v_num3 = array();

    for ($i = 0; $i < 15; $i++) {

        $v_num3[$i] = $v_num1[$i] + $v_num2[$i];
    }
    print_r( $v_num3);
    echo implode(" ", $v_num3);

/*EJERCIIO2*/
$suma = 0;
$total = array ();
echo '<h1><i>EJERCICIO 2</i></h1>';
$habitantes = array(
    "España" => array(
        "Cataluña" => 1666526,
        "Madrid" => 1536826,
        "Andalucia" => 2695321
    ),
    "Italia" => array(
        "Toscana" => 2563789,
        "Sicilia" => 12365985,
        "Umbria" => 3265891
    ),
    "Francia" => array(
        "Córcega" => 1568326,
        "Bretaña" => 6239874,
        "Normandía" => 12365985
    ),
    "Alemania" => array(
        "Berlin" => 5236986,
        "Baviera" => 1236598,
        "Hamburgo" => 2365895
    ),
    "Dinamarca" => array(
        "Copenhague" => 501158,
        "Roskilde" => 6185235,
        "Fionia" => 478347
    )
);

    foreach($habitantes as $clave => $valor){
        $suma = array_sum($valor);
        //$total[$clave] = array_sum($valor);
        foreach($valor as $clave2 => $valor2){
            array_push( $total, $suma);
            //sobra este foreach
        }
    }
    print_r( $total);
   
/*EJERCIIO3*/
echo '<h1><i>EJERCICIO 3</i></h1>';
$aux = array();
foreach($habitantes as $clave => $valor){
    $aux = $valor;
    foreach($valor as $clave2 => $valor2){
    }
}
echo min($aux);

// $minimos = array();
// foreach($habitantes as $clave=> $valor){
//     $minimos[$clave] = min($valor);
// }
// echo 'La region '.array_search(min($minimos), $minimos).' es la que contiene el menor número de habitantes: '.min($minimos);


//otra opción ordenar por clave y coger la mínima.

// minimos = array();
// foreach($habitantes as $clave => $valor){
//     asort($habitantes[$clave]);
//     $minimos[key($habitantes[$clave])]=current($habitantes[$clave]);
// asort($minimos);
// echo 'La región: '.key($minimos).' es la que tiene meor numero de habitantes'.current($minimos);
// }

/*EJERCIIO4*/
echo '<h1><i>EJERCICIO 4</i></h1>';

$alumnos = array(
    "Jorge" => array(
        "Lengua"=> array(
                "Ev1" => 8,
                "Ev2" => 5,
                "Ev3" => 7
            ),
        "Matemáticas"=> array(
            "Ev1" => 7,
            "Ev2" => 5,
            "Ev3" => 7
        ),
        "Biología"=> array(
            "Ev1" => 8,
            "Ev2" => 7,
            "Ev3" => 6
        )
    ),
    "Álvaro" => array(
        "Lengua"=> array(
                "Ev1" =>6,
                "Ev2" => 4,
                "Ev3" => 3
            ),
            "Matemáticas"=> array(
                "Ev1" => 5,
                "Ev2" => 5,
                "Ev3" => 3
            ),
            "Biología"=> array(
                "Ev1" => 6,
                "Ev2" => 5,
                "Ev3" => 3
            )
        ),
        "Alicia" => array(
            "Lengua"=> array(
                "Ev1" => 9,
                "Ev2" => 8,
                "Ev3" => 7
            ),
            "Matemáticas"=> array(
                "Ev1" => 10,
                "Ev2" => 9,
                "Ev3" => 6
            ),
            "Biología"=> array(
                "Ev1" => 9,
                "Ev2" => 8,
                "Ev3" => 7
            )
        )
    );

$asignaturas = array('Lengua', 'Matemáticas', 'Biología');
$mediaAsignaturas = array_fill_keys($asignaturas, 0);
    foreach($alumnos as $clave => $valor){
        foreach($valor as $clave2 => $valor2){
            $mediaAsignaturas[$clave2]+= array_sum($valor2)/3;
            foreach($valor2 as $clave3 => $valor3){
            }
        }
    
    }
    foreach($mediaAsignaturas as $clave=>$valor){
        echo 'Media en '.$clave.' es: '.round($valor/3,2);
        echo '<br>';
    }


/*EJERCIIO5*/
echo '<h1><i>EJERCICIO 5</i></h1>';
$strign1 = "Hola me llamo Ainhoa.¿Como estás?.Yo bien";
echo "$strign1 <br>";
$string2 = str_ireplace( "." , "*", $strign1 );
echo $string2;

/*EJERCIIO6*/
echo '<h1><i>EJERCICIO 6</i></h1>';
$frase = "En mi mesa hay un boli muy bonito";
$vocales = array("a", "e", "i", "o", "u");
echo "$frase <br>";
$frase2 = str_ireplace($vocales, "", $frase);
echo $frase2;
/*EJERCIIO7*/
echo '<h1><i>EJERCICIO 7</i></h1>';
$ruta="D:2DAW\PHP\Practica4.php";
$resul= explode("\\", $ruta);
print_r ($resul);
/*EJERCIIO8*/
echo '<h1><i>EJERCICIO 8</i></h1>';




?>