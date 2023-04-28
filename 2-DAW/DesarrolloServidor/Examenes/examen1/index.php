<!DOCTYPE html>
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
    <a href="listar.php">Listar por categoria</a>
    <a href="borrar.html">Borrar incidencias</a>
</body>
</html>
<?php
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
?>