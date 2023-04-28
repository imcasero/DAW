<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="funcion">
        <?php
        session_start();
        if (!empty($_SESSION)) {
            
            if ($_SESSION['admin'] !== true) {
                echo '
                    <div class="carrito">
                        <a href="./carrito.php">
                            <img src="./media/icon/carrito.png">
                        </a>
                    </div>
                ';
            }

            
            
            $usuario = 'root';
            $pass = 'root';
            $con = new PDO ('mysql:dbname=jabones;host=127.0.0.1', $usuario, $pass);
            $con -> setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
            $smtp = $con->prepare('SELECT * FROM productos');
            // $smtp ->bindValue(1 , $tabla);
            $smtp ->execute();
            echo '<table cellspan=0 border=1>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Peso</th>
                <th>Precio</th>
                <th>Imagen</th>


                <th>Accion</th>
            </tr>';
            
            while ($fila = $smtp->fetch(PDO::FETCH_ASSOC)) {
                echo '
                <tr>
                    <td>'.$fila['nombre'].'</td>
                    <td>'.$fila['descripcion'].'</td>
                    <td>'.$fila['peso'].'</td>
                    <td>'.$fila['precio'].'</td>
                    <td><img src="'.$fila['imagen'].'"></td>
                ';
                if ($_SESSION['admin'] === true){
                    echo '
                        <td>
                            <form action="borrar_producto.php" method="post">
                                <input type="text" name="hidden" hidden value ='.$fila['productoID'].'>
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>';
                }else {
                    echo '
                        <td>
                            <form action="añadir_carrito.php" method="post">
                                <input type="text" name="hidden" hidden value ='.$fila['productoID'].'>
                                <button type="submit">Añadir al carrito</button>
                            </form>
                        </td>
                    ';
                }
                echo '
                </tr>';
            }
            echo '</table>';
        }else {
            header("Location: index.html");
        }



        ?>
    </div>
    <div class="enlaces">
        <a href="cerrar_sesion.php">Cerrar Sesion</a>
    </div>
</body>
</html>