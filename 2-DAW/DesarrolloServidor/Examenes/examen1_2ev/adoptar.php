<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoptame</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
                Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
        }
        .contenedor{
            border-radius: 5px;
            width: 600px;
            margin: 50px auto;
            text-align: center;
            box-shadow: 0px 0px 34px -7px rgba(0, 0, 0, 0.64);
            height: 30vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        b{
            color : #0070c9;
        }
        .enlaces {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
      }

      .enlaces a {
        font-size: 18px;
        color: #007aff;
        text-decoration: none;
        margin: 16px 0;
      }

      .enlaces a:hover {
        color: #00b3ff;
      }
    </style>
</head>
<body>
    <div class="contenedor">
        <p>Enhorabuena has adoptado a 
            <?php

                try {
                    //code...
                    session_start();
                    $mascota = $_POST['hidden'];
                    // echo $mascota;
                    // print_r( $_SESSION);
                    $usuario = 'root';
                    $pass = 'root';
                    $con = new PDO ('mysql:dbname=adopta_mascota;host=127.0.0.1', $usuario, $pass);
                    $con -> setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
                    $smtp=$con->prepare('UPDATE animales SET estado="adoptado" WHERE nombre LIKE ?');
                    $smtp ->bindValue(1 , $mascota);
                    $smtp->execute();
                    $num_filas = $smtp ->rowCount();
                    if ($num_filas > 0) {
                        $smtp=$con->prepare('INSERT INTO adopciones(usuario , mascota , fecha) VALUES(? ,? ,?)');
                        $smtp ->bindValue(1 , $_SESSION['user']);
                        $smtp ->bindValue(2 , $mascota);
                        $hoy = new DateTime('now');
                        
                        $smtp ->bindValue(3 , $hoy->format("Y-m-d"));
                        $smtp->execute();
                        echo '<b>' . $_POST['hidden'] . '</b>';
                    }else {
                        echo '<b>ERROR</b>';
                    }
                } catch (PDOException $e) {
                    throw $th;
                }
                
            ?>
            !!
        </p>
    </div>
    <div class="enlaces">
        <a href="index.html">Inicio</a>
        <a href="cerrar_sesion.php">Cerrar Sesion</a>
    </div>
</body>
</html>