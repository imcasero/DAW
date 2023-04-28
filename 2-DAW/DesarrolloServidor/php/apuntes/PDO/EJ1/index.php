<?php
try {
    $tabla = 'oficinas';
    $pais = 'España';
    $usuario = 'diego_jar';
    $pass = 'diego_jar';
    $con = new PDO ('mysql:dbname=jardineria;host=127.0.0.1', $usuario, $pass);
    $con -> setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    $smtp = $con->prepare('SELECT * FROM oficinas WHERE pais LIKE ?');
    // $smtp ->bindValue(1 , $tabla);
    $smtp ->bindValue(1 , $pais);
    $smtp ->execute();
    $num_filas = $smtp ->rowCount();
    echo $num_filas . ' rows devuelta<br>';

    while ($fila = $smtp->fetch(PDO::FETCH_ASSOC)) {
        echo $fila['Ciudad']. ' '.$fila['Telefono'] . '<br>';
    }

} catch (PDOException $e) {
    echo 'Error: '.$e->getMessage();
}
?>