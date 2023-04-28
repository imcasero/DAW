<?php
    $errors = array(true , true);
    if (empty($_POST['matricula'])){
        $errors[0] = false;
    }
    if (empty($_POST['propietario'])) {
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
                <h3>Solicitud Taxis</h3>
                <form action="../php/taxis.php" method="post">
                    <label for="matricula">Introduzca la matricula</label></br>
                    <input type="text" name="matricula" placeholder="1111-AAA"></br></br>

                    <label for="propietario">Introduzca el nombre del dueño</label></br>
                    <input type="text" name="propietario" ></br>
                <p style="color : red; font-size : 10px"> Todos los campos de este formuario son obligatorios</p></br>

                <button type="submit">Enviar</button>
                </form>
            </body>
            </html>
        ';
    } else {
        echo 'Formulario enviado';
        inser($_POST['matricula'] , $_POST['propietario']);
    }

    function inser($matricula , $propietario){
        $cad = "\n" .$matricula . " " . $propietario;

        $taxis = @fopen("../txt/taxis.txt" , "a+");
        if (!$taxis) {
            die('fichero inaccesible');
        };
        fwrite($taxis , $cad);
        fclose($taxis);
    }
?>