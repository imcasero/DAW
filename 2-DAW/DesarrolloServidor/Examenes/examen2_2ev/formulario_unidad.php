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
        <form action="insertar_unidad.php" method="post">
            <input type="text" name="titulo" placeholder="Introduzca el nombre de la unidad" require>
            <input type="text" name="id_profesor" placeholder="INtroduzca el id del profesor" require>
            <input type="text" name="clase" placeholder="Introduzca la clase" require>
            <input type="text" name="area" placeholder="Introduzca el area" require>
            <input type="text" name="horas" placeholder="Introduzca el numero de horas" require>
            <input type="date" name="fecha_inicio" placeholder="Introduzca el inicio" require>
            <input type="date" name="fecha_fin" placeholder="Introduzca el fin" require>
            <input type="submit" value="insertar">
        </form>
    </div>
    
</body>
</html>