<?php
$datos_error = '
    <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>log in</title>
            <style>
            /* Estilos generales */
            * {
                box-sizing: border-box;
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
                Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            }
            /* Contenedor del formulario */
            .form-container {
                border-radius: 5px;
                width: 600px;
                margin: 50px auto;
                text-align: center;
                box-shadow: 0px 0px 34px -7px rgba(0, 0, 0, 0.64);
            }

            /* Estilos del título */
            h2 {
                padding-top: 30px;
                color: #333;
                font-weight: bold;
                margin-bottom: 40px;
            }
            input[type="text"],
            input[type="password"] {
                border: 1px solid #333 !important;
            }

            /* Estilos del input text */
            input[type="text"] {
                margin: 10px;
                width: 80%;
                padding: 10px;
                margin-bottom: 20px;
                border: none;
                border-radius: 5px;
                font-size: 16px;
                color: #333;
            }

            /* Estilos del input password */
            input[type="password"] {
                margin: 10px;
                width: 80%;
                padding: 10px;
                margin-bottom: 20px;
                border: none;
                border-radius: 5px;
                font-size: 16px;
                color: #333;
            }

            /* Estilos del check de aceptar términos y condiciones */
            input[type="checkbox"] {
                width: auto;
                margin-right: 10px;
            }

            /* Estilos del botón de envío */
            input[type="submit"] {
                margin: 10px;
                margin-bottom: 30px;
                width: 80%;
                padding: 10px;
                margin-top: 20px;
                background-color: #0070c9;
                border: none;
                border-radius: 5px;
                font-size: 16px;
                color: #fff;
                cursor: pointer;
            }
            .error{
                color: red;
            }
            .enlaces {
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .enlaces a {
                font-size: 18px;
                color: #007aff;
                text-decoration: none;
                margin: 16px 0;
            }

            .enlaces a:hover {
                color: #00b3ff;
            }
            </style>
        </head>
        <body>
            <div class="form-container">
            <h2>Iniciar sesión</h2>
            <form action="auth.php" method="post">
                <input type="text" placeholder="Email" name="email" required />
                <input type="password" placeholder="Contraseña" name="pass" required />
                <p class="error">Usuario o contraseña incorrecta</p>
                <div style="margin-bottom: 20px">
                <input type="checkbox" id="terms" required />
                <label for="terms">Acepto los términos y condiciones</label>
                </div>
                <input type="submit" value="Iniciar sesión" />
            </form>
            </div>
            <div class="enlaces">
            <a href="registro.html">Registrate</a>
            <p>O</p>
            <a href="">Continuar como invitado</a>
            </div>
        </body>
</html>
'; 
$email = $_POST['email'];
$pass = $_POST['pass'];
session_start();
try {
  $conn = new PDO("mysql:host=localhost;dbname=jabones", "root", "root");
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Consulta para verificar si existe el correo en la tabla administrador
  $stmt = $conn->prepare("SELECT usuario, pass FROM administrador WHERE usuario = :email");
  $stmt->bindParam(':email', $email);
  $stmt->execute();
  $result = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($result) {
    // Si existe el correo en la tabla administrador, verificar la contraseña
    if ($result['pass'] === $pass) {
        $_SESSION['auth'] = true;
        $_SESSION['admin'] = true;
        header("Location: menu.php");
    } else {
      echo $datos_error;
    }
  } else {
    // Si no existe el correo en la tabla administrador, buscar en la tabla clientes
    $stmt = $conn->prepare("SELECT email, password_cliente FROM clientes WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
      // Si existe el correo en la tabla clientes, verificar la contraseña
      if ($result['password_cliente'] === $pass) {
        $_SESSION['auth'] = true;
        $_SESSION['admin'] = false;
        $_SESSION['user'] = $email;
        header("Location: menu.php");
      } else {
        echo $datos_error;
      }
    } else {
      echo $datos_error;
    }
  }
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>

