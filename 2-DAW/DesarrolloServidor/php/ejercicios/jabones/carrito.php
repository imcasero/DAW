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
    echo '<div class="funcion">';
    echo '<h1>Carrito</h1>';
    session_start();
    if (!empty($_SESSION)) {
        $usuario = $_SESSION['user'];
        try {
            $conn = new PDO("mysql:host=localhost;dbname=jabones", "root", "root");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT cestaID FROM cesta WHERE email_cesta = ?");
            $stmt->bindValue(1 , $usuario);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if($result){
                $stmt = $conn->prepare("SELECT *
                                        FROM productos
                                        INNER JOIN itemCesta
                                        ON productos.productoID = itemCesta.productoID
                                        WHERE itemCesta.cestaID IN (
                                        SELECT cestaID
                                        FROM cesta
                                        WHERE email_cesta = ?
                                        );");
                $stmt->bindValue(1 , $usuario);
                $stmt->execute();
                echo '<table>';
                echo '<tr><th>ID</th><th>Nombre</th><th>Descripción</th><th>Peso</th><th>Precio</th><th>Imagen</th><th>Cantidad</th><th>Borrar</th></tr>';

                while ($row =  $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo '<tr>';
                    echo '<td>' . $row['productoID'] . '</td>';
                    echo '<td>' . $row['nombre'] . '</td>';
                    echo '<td>' . $row['descripcion'] . '</td>';
                    echo '<td>' . $row['peso'] . '</td>';
                    echo '<td>' . $row['precio'] . '</td>';
                    echo '<td><img src="' . $row['imagen'] . '"></td>';
                    echo '<td>' . $row['cantidad'] . '</td>';
                    echo '<td>';
                    $datos = $row['productoID'] . '-' . $row['cantidad'];
                    echo '<form method="post" action="borrar_item.php">';
                    echo '<input type="hidden" name="hidden" value="' . $datos . '">';
                    echo '<input type="submit" value="Eliminar">';
                    echo '</form>';
                    echo '</td>';
                    echo '</tr>';
                }

                echo '</table>';
                echo '</div>';
                echo '<div class="enlaces">';
                echo '<a href="menu.php">Volver </a>
                    <a href="cerrar_sesion.php">Cerrar Sesion</a>
                ';
                echo '</div>';

            }else {
                echo '<p>No tiene pedidos en la cesta</p>';
            }
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

    }else {
        header('Location: index.html');
    }
    ?>
</body>
</html>