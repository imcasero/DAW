<?php 
    
    $document = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Examen php Diego Casero Martin</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form action="validar.php" method="post" enctype="multipart/form-data">
            <h1>Formulario de incidencias</h1>
            <label for="categoria">Categoria</label>
            <select name="categoria" >
                <option value="Parques infantiles">Parques infantiles</option>
                <option value="Iluminacion">Iluminacion</option>
                <option value="Calzada">Calzada</option>
                <option value="Jardines">Jardines</option>
            </select> </br></br>
            <label for="direccion">Direccion</label>
            <input type="text" name="direccion" ></br></br>
            <label for="descripcion">Descripcion</label>
            <textarea name="descripcion" cols="30" rows="10"></textarea></br></br>
            <label for="email">email</label>
            <input type="text" name="email" ></br></br>
            <label for="fecha">Fecha</label>
            <input type="text" name="fecha" ></br></br>
            <label for="hora">hora</label>
            <input type="text" name="hora" ></br></br>
    
            <label for="foto">foto</label>
            <input type="file" name="foto" ></br></br>
    
            <input type="submit">
    
        </form>
    </body>
    </html>';

    //array de boolean para validar
    $inter = array();
    $cadena_error = 
    '<p style="color : red; font-size : 10px ;text-align:center"> 
        Este campo es obligatorio o incorrecto
    </p>';

    //VALIDACION
    if (empty($_POST['categoria'])) {
        $inter['categoria'] = false;
    } else {
        $categoria = $_POST['categoria'];
        $inter['categoria'] = true;
    }

    if (empty($_POST['direccion'])) {
        $inter['direccion'] = false;
    } else {
        $direccion = $_POST['direccion'];
        $inter['direccion'] = true;
    }

    if (empty($_POST['descripcion'])) {
        $inter['descripcion'] = false;
    } else {
        $descripcion = $_POST['descripcion'];
        $inter['descripcion'] = true;
    }

    if (empty($_POST['email'])) {
        $inter['email'] = false;
    } else {
        $email = $_POST['email'];
        $inter['email'] = true;
    }

    if (empty($_POST['fecha'])) {
        $inter['fecha'] = false;
    } else {
        $fecha = $_POST['fecha'];
        $inter['fecha'] = true;
    }

    if (empty($_POST['hora'])) {
        $inter['hora'] = false;
    } else {
        $hora = $_POST['hora'];
        $inter['hora'] = true;
    }

    if (in_array(false , $inter)) {
        //repinto form
        if ($inter['categoria'] == false) {
            echo '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Examen php Diego Casero Martin</title>
                <link rel="stylesheet" href="style.css">
            </head>
            <body>
                <form action=".php" method="post" enctype="multipart/form-data">
                    <h1>Formulario de incidencias</h1>
                    <label for="categoria">Categoria</label>
                    <select name="categoria" >
                        <option value="Parques infantiles">Parques infantiles</option>
                        <option value="Iluminacion">Iluminacion</option>
                        <option value="Calzada">Calzada</option>
                        <option value="Jardines">Jardines</option>
                    </select> </br></br>';
                    echo $cadena_error;
        } else {
            echo '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Examen php Diego Casero Martin</title>
                <link rel="stylesheet" href="style.css">
            </head>
            <body>
                <form action=".php" method="post" enctype="multipart/form-data">
                    <h1>Formulario de incidencias</h1>
                    <label for="categoria">Categoria</label>
                    ';
                    switch ($categoria) {
                        case 'Parques infantiles':
                            echo '
                            <select name="categoria" >
                                <option value="Parques infantiles" selected>Parques infantiles</option>
                                <option value="Iluminacion">Iluminacion</option>
                                <option value="Calzada">Calzada</option>
                                <option value="Jardines">Jardines</option>
                            </select> </br></br>
                            ';
                            break;
                        
                        case 'Iluminacion':
                            echo '
                            <select name="categoria" >
                             <option value="Parques infantiles">Parques infantiles</option>
                                <option value="Iluminacion" selected>Iluminacion</option>
                                <option value="Calzada">Calzada</option>
                            <option value="Jardines">Jardines</option>
                            </select> </br></br>
                            ';
                            break;
                        case 'Calzada':
                            echo '<select name="categoria" >
                            <option value="Parques infantiles">Parques infantiles</option>
                            <option value="Iluminacion">Iluminacion</option>
                            <option value="Calzada" selected>Calzada</option>
                            <option value="Jardines">Jardines</option>
                        </select> </br></br>';
                            break;
                        case 'Jardines':
                            echo '<select name="categoria" >
                            <option value="Parques infantiles">Parques infantiles</option>
                            <option value="Iluminacion">Iluminacion</option>
                            <option value="Calzada">Calzada</option>
                            <option value="Jardines" selected>Jardines</option>
                        </select> </br></br>';
                            break;
                    }
        }
        if ($inter['direccion'] == false){
            echo '
            <label for="direccion">Direccion</label>
            <input type="text" name="direccion" ></br></br>
            ' . $cadena_error;
        }else {
            echo '
            <label for="direccion">Direccion</label>
            <input type="text" name="direccion" value="'.$direccion.'"></br></br>
            ';
        }
        if ($inter['descripcion'] == false){
            echo '
            <label for="descripcion">Descripcion</label>
            <textarea name="descripcion" cols="30" rows="10"></textarea></br></br>
            ' . $cadena_error;
        }else {
            echo '
            <label for="descripcion">Descripcion</label>
            <textarea name="descripcion" cols="30" rows="10"></textarea></br></br>
            ';
        }
        if ($inter['email'] == false) {
            echo '<label for="email">email</label>
            <input type="text" name="email" ></br></br>' . $cadena_error;
        }else {
            echo '<label for="email">email</label>
            <input type="text" name="email" value="'.$email.'"></br></br>';
        }
        if ($inter['fecha'] == false) {
            echo '
            <label for="fecha">Fecha</label>
            <input type="text" name="email" ></br></br>
            ' . $cadena_error;
        }else {
            echo '
            <label for="fecha">Fecha</label>
            <input type="text" name="email" value="'.$fecha.'"></br></br>
            ';
        }
        if ($inter['hora'] == false) {
            echo '<label for="hora">hora</label>
            <input type="text" name="hora" ></br></br>' . $cadena_error;
        }else {
            echo '
            <label for="hora">hora</label>
            <input type="text" name="hora" value="'.$hora.'"></br></br>
            ';
        }
        //Accediendo a fichero 
        $fichero = @fopen("fincidencias.txt", "r+");
        $array_aux = array();

        if (!$fichero) {
            die("Fichero inaccesible");
        }
        while (!feof($fichero)) {
            $fila = fgets($fichero);
            array_push($array_aux , $fila);
        }
        $array = array();
        foreach ($array_aux as $string_datos) {
            $a = explode("$" , $string_datos); 
            array_push($array , $a);
        }
        //pinto tabla
        echo '<table border="1" cellspacing="0" style="margin-top : 20px">';
        foreach ($array as $clave => $array_fila) {
            echo '<tr>';
            foreach ($array_fila as $valor) {
                echo '<td>'.$valor.'</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        @fclose($fichero);
    }else {
        echo $document;

        //leo el ultimo codigo;
        $fichero_lec = @fopen("fincidencias.txt", "r+");
        if (!$fichero_lec){
            die('Problemas con el fichero lectura cod');
        }
        $array_para_cod_aux = array();
        while (!feof($fichero_lec)) {
            $f = fgets($fichero_lec);
            array_push($array_para_cod_aux , $f);
        }
        $array_cod = array();
        foreach ($array_para_cod_aux as $key) {
            $z = explode("$" , $key);
            array_push($array_cod , $z);
        }

        
        // echo $ult .'</br>';
        // print_r($array_cod);
        $ult_fila = array_pop($array_cod);
        
        //print_r($ult_fila);
        for ($i=0; $i < 1; $i++) { 
            $cod = $ult_fila[$i] +1;
        }
        
        //insertamos nuevos datos en el fichero
        $fichero_es = @fopen("fincidencias.txt", "a+");
        if (!$fichero_es){
            die('Problemas con el fichero escritura');
        }
        $cadena_intro = "\n" .$cod . '$'. $categoria . '$'. $direccion . '$' . $descripcion . '$'. $email . '$'
        . $fecha . '$'. $hora ;
        
        // echo 'la cadena es: ' . $cadena_intro;

        fwrite($fichero_es , $cadena_intro);

        @fclose($fichero_es);
                //Accediendo a fichero 
                $fichero = @fopen("fincidencias.txt", "r+");
                $array_aux = array();
        
                if (!$fichero) {
                    die("Fichero inaccesible");
                }
                while (!feof($fichero)) {
                    $fila = fgets($fichero);
                    array_push($array_aux , $fila);
                }
                $array = array();
                foreach ($array_aux as $string_datos) {
                    $a = explode("$" , $string_datos); 
                    array_push($array , $a);
                }
                //pinto tabla
                echo '<table border="1" cellspacing="0" style="margin-top : 20px">';
                foreach ($array as $clave => $array_fila) {
                    echo '<tr>';
                    foreach ($array_fila as $valor) {
                        echo '<td>'.$valor.'</td>';
                    }
                    echo '</tr>';
                }
                echo '</table>';
                @fclose($fichero);

    }

?>