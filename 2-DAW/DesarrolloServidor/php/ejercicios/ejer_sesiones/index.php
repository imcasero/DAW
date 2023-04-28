<?php
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
<div class="contenedor">
    <form action="acreditacion.php" method="post">
        <label for="nam">Name: </label>
        <input type="text" name="nam"><br><br>
        <label for="pass">Contraseña: </label>
        <input type="password" name="pass"><br><br>
    <div class="boton">
        <button type="submit" name="login">Log in</button>
    </div>
    </form>
</div>
    
</body>
</html>
';
?>

