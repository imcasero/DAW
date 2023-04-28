<?php
    function repintar($cadena){
            echo '
            <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8" />
                    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                    <title>Solicitud para residentes</title>
                </head>
                <body>
                <h3>Solicitud Residentes</h3>
                <form action="../php/residentes.php" method="post">
                        <label for="matricula">Introduzca la matricula</label></br>
                        <input type="text" name="matricula" placeholder="1111-AAA"></br></br>

                        <label for="direccion">Direccion</label></br>
                        <input type="text" name="direccion" placeholder="Calle Numero"></br></br>

                        <label for="inicio">Fecha de ingreso</label></br>
                        <input type="text" name="inicio" placeholder="00/00/0000"></br></br>

                        <label for="salida">Fecha de salida</label></br>
                        <input type="text" name="salida" placeholder="00/00/0000"></br>
                        ' .$cadena. '

                        <button type="submit">Enviar</button>
                    </form>
                </body>
            </html>
            ';
    }
    function insertar($matricula , $direccion , $inicio , $salida){
        $cad = "\n" .$matricula . ' ' . $direccion . ' ' . $inicio->format("Y/m/d") . ' ' . $salida->format("Y/m/d");

        $fichero = @fopen('../txt/residentesYHoteles.txt' , 'a+');
        if (!$fichero) {
            die('fichero inaccesible');
        };
        fwrite($fichero , $cad);

        echo 'Solicitud enviada con existo';
        }
    $errors = array();

    if (!$_POST['matricula']){
        $errors['matricula'] = 'La matricula no puede estar en blanco'; 
    };
    if (!$_POST['direccion']){
        $errors['direccion'] = 'La direccion no puede estar en blanco'; 
    };
    if (!$_POST['inicio']){
        $errors['inicio'] = 'La fecha de inicio no puede estar en blanco'; 
    };
    if (!$_POST['salida']){
        $errors['salida'] = 'La fecha de salida no puede estar en blanco'; 
    };

    if (count($errors) > 0){
        
        $cad_1 = '<p style="color : red; font-size : 10px "> 
                        todos los campos son obligatorios
                    </p>';
            repintar($cad_1);
    }else {
        $matricula = $_POST['matricula'];
        $direccion = $_POST['direccion'];
        $inicio = $_POST['inicio'];
        $salida = $_POST['salida'];

        $inicio_date = new DateTime($inicio);
        

        $salida_date = new DateTime($salida);
        
        if ($inicio_date > $salida_date){
            $cad_2 = '<p style="color : red; font-size : 10px "> 
                        La fecha de inicio es mayor ue la fecha de salida
                    </p>';
            repintar($cad_2);
        } else {
            insertar($matricula , $direccion , $inicio_date , $salida_date);
        } 
    }
?> 