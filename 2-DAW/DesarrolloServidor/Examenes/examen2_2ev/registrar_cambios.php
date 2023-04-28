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
        <h2>Registro</h2>
        <form action="cambiar_registro.php" method="post">
            <input type="text" name="curso" placeholder="Introduzca el curso" require>
            <input type="text" name="asignatura" placeholder="Introduzca el nombre de la asignatura" require>
            <p>Introduzca la semana correspondiente</p>
            <input type="number" name="semana" placeholder="" require>
            <p>Introduzca el numero de horas impartidas por dia</p>
            <p>Lunes: </p>
            <input type="number" name="lunes" placeholder="" require>
            <p>martes: </p>
            <input type="number" name="martes" placeholder="" require>
            <p>miercoles: </p>
            <input type="number" name="miercoles" placeholder="" require>
            <p>jueves: </p>
            <input type="number" name="jueves" placeholder="" require>
            <p>viernes: </p>
            <input type="number" name="viernes" placeholder="" require>
            <input type="submit" value="insertar">
        </form>
    </div>
</body>
</html>