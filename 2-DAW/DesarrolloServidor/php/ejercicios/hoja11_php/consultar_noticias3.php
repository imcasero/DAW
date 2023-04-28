<?php
    echo   '
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
    if (empty($_POST['cat']) || $_POST['cat'] == 1){
        echo '
        <form action="consultar_noticias3.php" method="post">
        <select name="cat">
          <option value="1" selected>Todas</option> 
          <option value="ofertas">ofertas</option>
          <option value="costas">costas</option>
          <option value="promociones">promociones</option>
        </select>
        <button type="submit">Actualizar</button>
        </form>
        ';
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
            </tr>';
        while ($fila = mysqli_fetch_assoc($resul)) {
            echo '<tr>';
            echo '<td>'.$fila['ID'] .'</td>';
            echo '<td>'.$fila['TITULO'] .'</td>';
            echo '<td>'.$fila['TEXTO'] .'</td>';
            echo '<td>'.$fila['CATEGORIA'] .'</td>';
            echo '<td>'.$fila['FECHA'] .'</td>';
            echo '<td>'.$fila['IMAGEN'] .'</td>';
            echo '</tr>';
        }

        echo '</table></body></html>';
    } else {
        switch ($_POST['cat']) {
            case 'ofertas':
                echo '
                    <form action="consultar_noticias3.php" method="post">
                    <select name="cat">
                    <option value="1">Todas</option> 
                    <option value="ofertas" selected>ofertas</option>
                    <option value="costas">costas</option>
                    <option value="promociones">promociones</option>
                    </select>
                    <button type="submit">Actualizar</button>
                    </form>
                ';
                break;
            case 'costas':
                echo '
                    <form action="consultar_noticias3.php" method="post">
                    <select name="cat">
                    <option value="1">Todas</option> 
                    <option value="ofertas" >ofertas</option>
                    <option value="costas" selected>costas</option>
                    <option value="promociones">promociones</option>
                    </select>
                    <button type="submit">Actualizar</button>
                    </form>
                ';
                # code...
            break;
                case 'promociones':
                    echo '
                    <form action="consultar_noticias3.php" method="post">
                    <select name="cat">
                    <option value="1">Todas</option> 
                    <option value="ofertas" >ofertas</option>
                    <option value="costas" >costas</option>
                    <option value="promociones" selected>promociones</option>
                    </select>
                    <button type="submit">Actualizar</button>
                    </form>
                ';
            break;
        }
        $cons = "SELECT * FROM noticias WHERE categoria LIKE '$_POST[cat]'";
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
            </tr>';
        while ($fila = mysqli_fetch_assoc($resul)) {
            echo '<tr>';
            echo '<td>'.$fila['ID'] .'</td>';
            echo '<td>'.$fila['TITULO'] .'</td>';
            echo '<td>'.$fila['TEXTO'] .'</td>';
            echo '<td>'.$fila['CATEGORIA'] .'</td>';
            echo '<td>'.$fila['FECHA'] .'</td>';
            echo '<td>'.$fila['IMAGEN'] .'</td>';
            echo '</tr>';
        }

        echo '</table></body></html>';
    }
    

?>