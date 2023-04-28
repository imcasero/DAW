<?php
    $errors = array(true , true);
    if (empty($_POST['matricula'])){
        $errors[0] = false;
    }
    if (empty($_POST['servicio'])) {
        $errors[1] = false;
    }

    if (in_array(false , $errors)) {
        echo '
       <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <title>Servicios</title>
            </head>
            <body>
                <h3>Solicitud servicios</h3>
                <form action="../php/servicios.php" method="post">
                <label for="matricula">Introduzca la matricula</label></br>
                <input type="text" name="matricula" placeholder="1111-AAA"></br></br>

                <label for="servicio">Introduzca el tipo de servicio</label></br>
                <input type="text" name="servicio" ></br>
                <p style="color : red; font-size : 10px"> Todos los campos de este formuario son obligatorios</p></br>

                <button type="submit">Enviar</button>
                </form>
            </body>
            </html>
        ';
    } else {
        echo 'Formulario enviado';
        inser($_POST['matricula'] , $_POST['servicio']);
    }

    function inser($matricula , $servicio){
        $cad = "\n" .$matricula . " " . $servicio;

        $servicios = @fopen("../txt/servicios.txt" , "a+");
        if (!$servicios) {
            die('fichero inaccesible');
        };
        fwrite($servicios , $cad);
        fclose($servicios);
    }
?>