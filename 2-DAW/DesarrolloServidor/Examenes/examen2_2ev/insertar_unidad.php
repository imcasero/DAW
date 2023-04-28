<?php
    include 'funciones.php';
    $titulo = $_POST['titulo'];
    $id_profesor = $_POST['id_profesor'];
    $clase = $_POST['clase'];
    $area = $_POST['area'];
    $horas = $_POST['horas'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_fin = $_POST['fecha_fin'];

    $con = conexionPDO('pgaula' , 'diego_examen' , 'diego');
    $smtp = $con->prepare("INSERT INTO ud(titulo , clase , idpro , area , nhoras , fechaini , fechafin)
                            VALUES(? , ? , ? , ? , ? , ? , ?) ");
    
    $smtp ->bindValue(1 , $titulo);
    $smtp ->bindValue(2 , $clase);
    $smtp ->bindValue(3 , $id_profesor);
    $smtp ->bindValue(4 , $area);
    $smtp ->bindValue(5 , $horas);
    $smtp ->bindValue(6 , $fecha_inicio);
    $smtp ->bindValue(7 , $fecha_fin);
    $smtp ->execute();
    header('Location:enlaces1.php');
?>