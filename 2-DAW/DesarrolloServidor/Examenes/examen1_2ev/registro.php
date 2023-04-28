<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro</title>
    <style>
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
      .error{
        color: red;
        font-size : 12px;
      }
    </style>
  </head>
  <body>
    <div class="form-container">
      <h2>Registro</h2>
      <p>Los campos con * son obligatorios</p>
      <form action="validacion.php" method="post">
        <input
          type="text"
          class="form-control"
          name="email"
          
          placeholder="Email *"
        />

        <input
          type="text"
          class="form-control"
          name="nombre"
          
          placeholder="Nombre *"
        />

        <input
          type="text"
          class="form-control"
          name="direccion"
          
          placeholder="Direccion *"
        />

        <input
          type="text"
          class="form-control"
          name="localidad"
          
          placeholder="Localidad *"
        />

        <input
          type="password"
          class="form-control"
          id="contraseña"
          
          placeholder="Contraseña *"
        /> <br>
        <label for="pref1">Preferencia 1*:</label>
        <select name="pref1">
          <?php
          $usuario = 'root';
          $pass = 'root';
          $con = new PDO ('mysql:dbname=adopta_mascota;host=127.0.0.1', $usuario, $pass);
          $con -> setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
          $smtp = $con->prepare('SELECT * FROM rasgos');
          $smtp ->execute();
          echo '<option value="0">--Elige--</option>';
          while ($fila = $smtp->fetch(PDO::FETCH_ASSOC)) {//asociativo
            echo '<option value="'.$fila['id'].'">' . $fila['descripcion']. '</option>';
          }
          ?>
        </select><br><br>
        <label for="pref2">Preferencia 2*:</label>
        <select name="pref2">
          <?php
          $usuario = 'root';
          $pass = 'root';
          $con = new PDO ('mysql:dbname=adopta_mascota;host=127.0.0.1', $usuario, $pass);
          $con -> setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
          $smtp = $con->prepare('SELECT * FROM rasgos');
          $smtp ->execute();
          echo '<option value="0">--Elige--</option>';
          while ($fila = $smtp->fetch(PDO::FETCH_ASSOC)) {//asociativo
            echo '<option value="'.$fila['id'].'">' . $fila['descripcion']. '</option>';
          }
          ?>
        
        </select><br><br>
        <label for="pref3">Preferencia 3:</label>
        <select name="pref3">
          <?php
          $usuario = 'root';
          $pass = 'root';
          $con = new PDO ('mysql:dbname=adopta_mascota;host=127.0.0.1', $usuario, $pass);
          $con -> setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
          $smtp = $con->prepare('SELECT * FROM rasgos');
          $smtp ->execute();
          echo '<option value="0">--Elige--</option>';
          while ($fila = $smtp->fetch(PDO::FETCH_ASSOC)) {//asociativo
            echo '<option value="'.$fila['id'].'">' . $fila['descripcion']. '</option>';
          }
          ?>
        </select><br><br>
        <label for="pref4">Preferencia 4:</label>
        <select name="pref4">
          <?php
          $usuario = 'root';
          $pass = 'root';
          $con = new PDO ('mysql:dbname=adopta_mascota;host=127.0.0.1', $usuario, $pass);
          $con -> setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
          $smtp = $con->prepare('SELECT * FROM rasgos');
          $smtp ->execute();
          echo '<option value="0">--Elige--</option>';
          while ($fila = $smtp->fetch(PDO::FETCH_ASSOC)) {//asociativo
            echo '<option value="'.$fila['id'].'">' . $fila['descripcion']. '</option>';
          }
          ?>
        </select><br><br>

        <div style="margin-bottom: 20px">
          <input type="checkbox" id="terms" />
          <label for="terms">Acepto los términos y condiciones</label>
        </div>

        <input type="submit" value="Registrate" />
      </form>
    </div>
    <div class="enlaces">
      <a href="login.html">Iniciar Sesión</a><br />
      <p>O</p>
      <a href="tabla.php">Continuar como invitado</a>
    </div>
  </body>
</html>
