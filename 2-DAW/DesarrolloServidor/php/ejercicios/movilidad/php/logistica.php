<?php
    $errors = array(true , true);
    if (empty($_POST['matricula'])){
        $errors[0] = false;
    }
    if (empty($_POST['empresa'])) {
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
                <title>Document</title>
            </head>
            <body>
                <h3>Solicitud logistica</h3>
                <form action="../php/logistica.php" method="post">
                    <label for="matricula">Introduzca la matricula</label></br>
                    <input type="text" name="matricula" placeholder="1111-AAA"></br></br>

                    <label for="empresa">Introduzca el nombre de su empresa</label></br>
                    <input type="text" name="empresa" ></br>
                    <p style="color : red; font-size : 10px"> Todos los campos de este formuario son obligatorios</p></br>
                    <button type="submit">Enviar</button>
            </form>
            </body>
        </html>
        ';
    } else {
        echo 'Formulario enviado';
        inser($_POST['matricula'] , $_POST['empresa']);
    }

    function inser($matricula , $empresa){
        $cad = "\n" .$matricula . " " . $empresa;

        $logistica = @fopen("../txt/logistica.txt" , "a+");
        if (!$logistica) {
            die('fichero inaccesible');
        };
        fwrite($logistica , $cad);
        fclose($logistica);
    }
?>