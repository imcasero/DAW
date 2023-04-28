<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <form action="insertar_actividad.php" method="post">
            <input type="text" name="unidad" placeholder="Introduzca el codigo de la unidad" require><br>
            <label for="descripcion" >Introduzca una descripcion de la actividda</label><br>
            <textarea name="descripcion" cols="30" rows="10" require></textarea>
            <input type="text" name="importancia" placeholder="Introduzca la importancia" require>
            <input type="text" name="horas" placeholder="Introduzca el numero de horas" require>
            <input type="date" name="fecha_inicio" placeholder="Introduzca el inicio" require>
            <input type="date" name="fecha_fin" placeholder="Introduzca el fin" require>
            <input type="submit" value="insertar">
        </form>
    </div>
    
</body>
</html>