<?php

    $GLOBALS['DB_IP'] = '127.0.0.1';
    $GLOBALS['DB_USER'] = 'root';
    $GLOBALS['DB_PASS'] = 'root';
    $GLOBALS['DB_NAME'] = 'prueba_ajax';

    // se establece el conector
    $db = mysqli_connect($GLOBALS['DB_IP'], $GLOBALS['DB_USER'], $GLOBALS['DB_PASS']);

    if(!$db){
        die('No se establece conexion');
    }
    $db->select_db($GLOBALS['DB_NAME']);

    $consulta = "SELECT * FROM nombres_edades";
	$result = mysqli_query($db,$consulta);
    $cadena = '';
    $cadena .= '<table>';
    foreach( $result as $row){
        $cadena .= '<tr>';
        foreach( $row as $key => $val){
            $cadena .= '<td>'. $val .'</td>';
        }
        $cadena .= '</tr>';
    }
    $cadena .= '</table>';

    echo $cadena;
?>