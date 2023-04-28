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
                    margin-bottom: 1em;
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
                    a.pagination {
                        padding: 8px 16px;
                        text-decoration: none;
                        border: 1px solid #ddd;
                        margin-right: 8px;
                    }

                    /* Estilo para el enlace activo (página actual) */
                    a.pagination.active {
                        background-color: #4CAF50;
                        color: white;
                    }

                    /* Estilo para el enlace al pasar el mouse */
                    a.pagination:hover:not(.active) {
                        background-color: #ddd;
                    }
            </style>
        </head>
        <body>
    ';
$conn = new mysqli("localhost","diego_inm","1234");
$conn->select_db("inmobiliaria");
// Asume que la variable $page contiene el número de página actual
$sql = "SELECT COUNT(*) as total_rows FROM noticias";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$total_rows = $row['total_rows'];

// Calcular el número de páginas
$num_pages = ceil($total_rows / 3);
$page = 1;
if(isset($_GET['page'])){
    $page = (int)$_GET['page'];
}

// Establece el límite de inicio y fin para la consulta SQL
$start = ($page - 1) * 3;
$end = $start + 3;

// Realiza la consulta a la tabla noticias
$sql = "SELECT * FROM noticias LIMIT $start, $end";
$result = mysqli_query($conn, $sql);

// Inicia la tabla
echo "<table>";

// Crea la fila de encabezado
echo "<tr>";
echo "<th>Título</th>";
echo "<th>Texto</th>";
echo "<th>Categoría</th>";
echo "<th>Fecha</th>";
echo "<th>Imagen</th>";
echo "</tr>";

// Itera a través de los resultados y muestra las noticias
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['TITULO'] . "</td>";
    echo "<td>" . $row['TEXTO'] . "</td>";
    echo "<td>" . $row['CATEGORIA'] . "</td>";
    echo "<td>" . $row['FECHA'] . "</td>";
    echo "<td>" . $row['IMAGEN'] . "</td>";
    echo "</tr>";
}

// Cierra la tabla
echo "</table>";

// Muestra los enlaces para las páginas siguientes y anteriore
if ($page == 1) {
    
    echo "<a class='pagination' href='?page=".($page+1)."'>Siguiente</a>";
    echo "<a class='pagination' href='?page=". $num_pages ."'>Final</a>";
}else if($page == $num_pages){
    echo "<a class='pagination' href='?page=". 1 ."'>Inicio</a>";
    echo "<a class='pagination' href='?page=".($page-1)."'>Anterior</a>";
}else {
    echo "<a class='pagination' href='?page=". 1 ."'>Inicio</a>";
    echo "<a class='pagination' href='?page=".($page-1)."'>Anterior</a>";
    echo "<a class='pagination' href='?page=".($page+1)."'>Siguiente</a>";
    echo "<a class='pagination' href='?page=". $num_pages ."'>Final</a>";
    
}
echo '</body> </html>';

?>