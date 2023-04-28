<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
        include 'funciones.php';
        $con = conexionPDO('pgaula' , 'diego_examen' , 'diego');
        $smtp = $con->prepare('SELECT area FROM temporizacion WHERE area LIKE ? group by area');
        $asig = $_POST['asignatura'];
        $smtp ->bindValue(1 , $asig);
        $smtp ->execute();
        $num_filas = $smtp ->rowCount();
        if ( $num_filas > 0 ){
            $smtp = $con->prepare('SELECT * FROM ud WHERE area LIKE ? AND fechafin <= ?');
            $fecha = $_POST['fecha'];
            $smtp ->bindValue(1 , $asig);
            $smtp ->bindValue(2 , $fecha);
            $smtp ->execute();
            $num_filas = $smtp ->rowCount();
            $horas_totales = 0;
            if($num_filas > 0){
                echo '<table>';
                echo '<tr>';
                echo '<th>Area</th>';
                echo '<th>Fecha fin</th>';

                echo '</tr>';
                while ($fila = $smtp->fetch(PDO::FETCH_ASSOC)) {//asociativo
                    echo '<tr>';
                    echo '<td>'.$fila['area'].'</td>';
                    echo '<td>'.$fila['fechafin'].'</td>';
                    $horas_totales += $fila['nhoras'];
                    echo '</tr>';
                }
                echo '</table>';
                // $fecha_inicio = new DateTime('2022-09-12 00:00:00');
                // $intervalo = $fecha_inicio->diff($fecha); //la fecha pequeña al principio
                
                // echo $intervalo->format('%R%a días');
                echo '<br>';
                echo "<p>El numero de horas totales que debio impartir son :<b> $horas_totales</b></p>";
            }else {
                echo 'No hay planificacion de esta asignatura';
            }
        }else {
            echo 'No hay registro de la asignatura </br>';
            echo '<a href="select_fechas.php">Volver</a>';
        }
        
    ?>
</body>
</html>