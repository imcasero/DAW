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
    <form action="sancionar.php" method="post">
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
        <br><br>
        <label for="sancion" require>Sancion: </label>
        <input type="radio" name="sancion" value="leve">Leve
        <input type="radio" name="sancion" value="grave">Grave
        <input type="radio" name="sancion" value="muygrave">Muy grave

        <br><br>
        <label for="estado">Estado</label>
        <select name="estado" require>
            <option value="P">Pendiente</option>
            <option value="EP">En proceso</option>
            <option value="C">Cumplida</option>
        </select>
        <br><br>
        <label for="sanc">Sancion</label>
        <input type="text" name="sanc" require></input>
        <br><br>
        <button type="submit">Sancionar</button>
    </form>
</body>
</html>