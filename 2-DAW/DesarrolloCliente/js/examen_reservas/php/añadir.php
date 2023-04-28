<?php
    $hora = $_POST['hora'];
    $fecha = $_POST['fecha'];
    $comen = $_POST['comensales'];
    $con = new mysqli("localhost","root","root");
    if (mysqli_connect_errno()) {
        printf("Falló la conexión: %s\n", mysqli_connect_error());
        exit();
    }
    $con->select_db("res");
    $hora = $con->real_escape_string($hora);
    $fecha = $con->real_escape_string($fecha);

    $cons = "SELECT * FROM reservas where dia_reserva = '$fecha' and hora_reserva = '$hora'";
    $resul = mysqli_query($con, $cons);
    if(!$resul){
        die('La consulta no obtuvo resultado' );
    }
    $num_rows = mysqli_num_rows($resul);
    if($num_rows == 0){
        $insert = "INSERT INTO `reservas` (`id_reserva`, `hora_reserva`, `dia_reserva`, `comensales`) VALUES (NULL, '$hora', '$fecha', '$comen')";
        $resul = mysqli_query($con ,$insert);
        header("location : ../../index.html");
    } else {
        echo 'la hora de reserva ya existe <br>
            <a href="../html/reserva.html">Pruebe con otra hora</a>';
    }
?>