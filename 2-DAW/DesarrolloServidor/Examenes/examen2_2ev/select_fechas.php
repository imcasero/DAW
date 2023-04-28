<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen 2</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <form action="mostrar_datos.php" method="post">
            <input type="text" name="asignatura" placeholder="Indique la asignatura" require>
            <input type="date" placeholder="Indique la fecha requerida" name="fecha" require>

            <input type="submit" value="Consultar">
        </form>
    </div>
</body>
</html>