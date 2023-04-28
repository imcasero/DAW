<?php
    $alumno = $_POST['alum'];
    $fichero = @fopen('alumnos_sancionados.txt' ,  'r');
    if (!$fichero){
        die("Error en el fichero");
    }
    echo '<h1>Faltas de : '.$alumno.'</h1>';
    echo '<table>';
    while(!feof($fichero)){
        $fila = explode("," , fgets($fichero));
        if ($alumno == $fila[1]){
            echo '<tr>';
            foreach ($fila as $key => $value) {
                echo '<td>'.$value.'</td>';
            }
            if (trim($fila[5]) == 'EP') {
                echo '
                <td>
                    <form action="accion.php" method="post">
                        <input type="text" name="hidden" value="En proceso,'.$fila[0].'" hidden>
                        <button type="submit">Finalizar</button>
                    </form>
                </td>';
            } else if (trim($fila[5]) == 'P'){
                echo '
                <td>
                    <form action="accion.php" method="post">
                        <input type="text" name="hidden" value="pendiente,'.$fila[0].'" hidden>
                        <button type="submit">Iniciar</button>
                    </form>
                </td>';
            }
            echo '</tr>';
        }            
    }
    echo '<table>';
?>