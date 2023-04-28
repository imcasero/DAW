<?php
include 'funciones.php';
    $curso = $_POST['curso'];
    $asignatura = $_POST['asignatura'];
    $semana = $_POST['semana'];
    $lunes = $_POST['lunes'];
    $martes = $_POST['martes'];
    $miercoles = $_POST['miercoles'];
    $jueves = $_POST['jueves'];
    $viernes = $_POST['viernes'];

    
        $con = conexionPDO('pgaula' , 'diego_examen' , 'diego');
        $smtp = $con->prepare('SELECT area FROM temporizacion WHERE area LIKE ? group by area');
        
        $smtp ->bindValue(1 , $asignatura);
        $smtp ->execute();
        $num_filas = $smtp ->rowCount();
        if ( $num_filas > 0 ){
            $smtp = $con->prepare('SELECT horario , diasemana FROM temporizacion WHERE area LIKE ? AND  clase like ?');
        
            $smtp ->bindValue(1 , $asignatura);
            $smtp ->bindValue(2 , $curso);
            $smtp ->execute();
            $horario = "";
            $dia_semana ="";
             while ($fila = $smtp->fetch(PDO::FETCH_ASSOC)) {//asociativo
                    $horario .= $fila['horario'];
                    $dia_semana .= $fila['diasemana'];
                }
            
            $registro = str_split($dia_semana , 1);
            $inter = true;
            foreach ($registro as $key => $value) {
                switch ($key) {
                    case 0:
                        if ($value != $lunes) {
                            $inter = false;
                        }
                        break;
                    case 1:
                        if ($value != $martes) {
                            $inter = false;
                        }
                        break;
                    case 2:
                        if ($value != $miercoles) {
                            $inter = false;
                        }
                        break;
                    case 3:
                        if ($value != $jueves) {
                            $inter = false;
                        }
                        break;
                    case 4:
                        if ($value != $viernes) {
                            $inter = false;
                        }
                        break;
                }
            }
            if ($inter) {
                echo 'no hay cambios que registrar<br>';
                echo '<a href="registrar_cambios.php">Volver</a>';
            }else {
                $horario = str_split($horario , 5);
                $horario[$semana-1] = $lunes . $martes . $miercoles .$jueves . $viernes;
                $nuevo_registro = "";
                foreach ($horario as $key => $val) {
                    $nuevo_registro .= $val;
                }
                // echo "UPDATE temporizacion SET horario =  $nuevo_registro";
                $stmt = $con->prepare("UPDATE temporizacion SET horario =  $nuevo_registro");

                $smtp ->bindValue(1 , $nuevo_registro);
                    

                $stmt->execute();
                
                echo 'Valores actualizados con existo :D';
                echo '<a href="index.html">Volver a la pagina principal</a>';
            }
        }else {
            echo 'No existe esta asignatura';
            
        }
?>