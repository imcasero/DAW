<?php
    include 'funciones.php';
    $unidad = $_POST['unidad'];
    $descripcion = $_POST['descripcion'];
    $importancia = $_POST['importancia'];
    $horas = $_POST['horas'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_fin = $_POST['unidad'];
    $con = conexionPDO('pgaula' , 'diego_examen' , 'diego');
    try {
        $smtp = $con->prepare('SELECT idud FROM ud WHERE idud LIKE ?');
    $smtp ->bindValue(1 , $unidad);
    $smtp ->execute();
    $num_filas = $smtp ->rowCount();
    if ($num_filas > 0) {
        $smtp = $con->prepare("INSERT INTO actividades(descripcion , nhoras , importancia , fechaini , fechafin)
                            VALUES(? , ? , ? , ? , ? ) ");
    
        $smtp ->bindValue(1 , $descripcion);
        $smtp ->bindValue(2 , $horas);
        $smtp ->bindValue(3 , $importancia);
        $smtp ->bindValue(4 , $fecha_inicio);
        $smtp ->bindValue(5 , $fecha_fin);
        $smtp ->execute();

        $smtp = $con->prepare('SELECT idact FROM actividades ORDER BY idact desc limit 1');
        $smtp ->execute();

        // $smtp = $con->prepare('SELECT SUM(actividades.nhoras) FROM actividades
        //  INNER JOIN distribucion on distribucion.idact = actividades.idact');

        while ($fila = $smtp->fetch(PDO::FETCH_ASSOC)) {//asociativo
            $idact =  $fila['idact'];
        }
        $smtp = $con->prepare('INSERT INTO distribucion (idact ,idud , anno)
                                VALUES(? , ? , ?)');
        $hoy = new DateTime('now');
        $año = $hoy->format("Y");
        $smtp ->bindValue(1 , $idact);
        $smtp ->bindValue(2 , $unidad);
        $smtp ->bindValue(3 , $año);
        $smtp ->execute();
        header('Location: enlaces1.php');
    }else {
        echo 'No hay registro de la unidad </br>';
        echo '<a href="formulario_actividad.php">Volver</a>';
    }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    
?>