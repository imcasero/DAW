<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="ej.php" method="post">
        <label for="alum">Alumno</label>
        <select name="alum" require>
            <?php
                $fic = @fopen('alumnos.txt' , 'r+');
                if (!$fic) { 
                    die('Problema con el fichero');
                } 
                while(!feof($fic)){
                    $fila = explode("," , fgets($fic));
                    echo '<option value="'.$fila[0].'">'.$fila[0].','.$fila[1].'</option>';
                }
            ?>
        </select>
        <button type="submit">Ver sanciones</button>
    </form>
</body>
</html>