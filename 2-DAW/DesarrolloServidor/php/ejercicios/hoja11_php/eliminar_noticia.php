<?php
    echo '
         <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>Noticias</title>
            <style>
                table {
                    font-family: arial, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                    }

                    td, th {
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                    }

                    th {
                    background-color: #dddddd;
                    }

                    tr:nth-child(even) {
                    background-color: #f2f2f2;
                    }
            </style>
        </head>
        <body>
    ';
    $con = new mysqli("localhost","diego_inm","1234");
    if (mysqli_connect_errno()) {
        printf("Falló la conexión: %s\n", mysqli_connect_error());
        exit();
    }
    $con->select_db("inmobiliaria");
    $cons = "SELECT * FROM noticias";
    $resul = mysqli_query($con, $cons);
    if(!$resul){
        die('La consulta no obtuvo resultado' );
    }
    echo '<table>';
    echo '
        <tr>
            <th>ID</th>
            <th>TITULO</th>
            <th>TEXTO</th>
            <th>CATEGORIA</th>
            <th>FECHA</th>
            <th>IMAGEN</th>
            <th>BORRAR</th>
        </tr>';
        while ($fila = mysqli_fetch_assoc($resul)) {
        echo '<tr>';
        echo '<td>'.$fila['ID'] .'</td>';
        echo '<td>'.$fila['TITULO'] .'</td>';
        echo '<td>'.$fila['TEXTO'] .'</td>';
        echo '<td>'.$fila['CATEGORIA'] .'</td>';
        echo '<td>'.$fila['FECHA'] .'</td>';
        echo '<td>'.$fila['IMAGEN'] .'</td>';
        echo '<td>
                <form method="post" action="eliminar.php">
                    <input type="hidden" name="id" value="'.$fila['ID'] .'">
                    <button type="submit">Eliminar</submit>
                </form>
            </td>';
        echo '</tr>';
    }

    echo '</table></body></html>';

    function eliminar(){
        $cons = "DELETE FROM noticias WHERE ID LIKE $_POST[id]";
        $resul = mysqli_query($con, $cons);
        if(!$resul){
            die('La consulta no obtuvo resultado' );
        }
    };
?>