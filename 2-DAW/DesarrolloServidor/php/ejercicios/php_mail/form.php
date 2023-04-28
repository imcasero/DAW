<!DOCTYPE html>
<html lang="en">
  <!-- 
    $mail->addEmbebedImage() consultar parametros
    <img src="cid:alias">
 -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postales</title>
    <style>
      * {
        font-family: Helvetica, sans-serif;
      }
      .contenedor{
        width: 60%;
        display : flex;
        margin: auto;
        justify-content: center;
      }
      .contenedor img{
        width: 30%;
        padding: 10%;

      }
      form {
        width: 50%;
        margin: auto;
        padding: 20px;
        border: 1px solid gray;
        border-radius: 10px;
      }
      label {
        font-weight: bold;
        margin-top: 20px;
        display: block;
      }
      select,
      input[type="text"],
      textarea {
        width: 90%;
        padding: 10px;
        margin-top: 10px;
        border-radius: 5px;
        border: 1px solid gray;
      }

      input[type="submit"] {
        margin-top: 20px;
        padding: 10px 20px;
        background-color: green;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: 0.5s;
      }
      input[type="submit"]:hover{
        transition: 0.5s;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: white;
        color: green;
        border: none;
        border-radius: 5px;
        border : 1px solid green;
        cursor: pointer;
      }
</style>

</head>
<body>
    <!-- formulario.php -->
<?php

  $tema = $_POST['tema'];
  
  $imagenes = scandir("/xampp/htdocs/2-DAW/DesarrolloServidor/php/ejercicios/php_mail/img/" . $tema );
  echo '<div class="contenedor">';
  foreach ($imagenes as $key => $value) {
    if ($value != "." && $value != "..") {
      echo '<img src="./img/' . $tema . '/' . $value . '"/>';
    }
  }
  echo '</div>';
  echo '<form action="accion.php" method="post">';
  echo '<input type="text" name="tema" hidden value="'.$tema.'">';
?>

  <p>Los campos con * son obligatorios</p>
  <label for="cliente">Selecciona un cliente : *</label>
  <select name="cliente" id="cliente" required>
    <?php
    // Conexión a la base de datos
    $dsn = "mysql:host=localhost;dbname=php_mail";
    $pdo = new PDO($dsn, "root", "root");
    // Consulta para obtener los nombres de los clientes
    $query = "SELECT nombre FROM clientes";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      echo "<option value='" . $row['nombre'] . "'>" . $row['nombre'] . "</option>";
    }
    ?>
  </select><br>
  <label for="tema">Asunto: *</label>
  <input type="text" name="asunto" id="tema" required><br>
  <label for="mensaje">Mensaje:</label>
  <textarea name="mensaje" id="mensaje"></textarea><br>
  <select name="imagen" id="">
    <?php
      echo '<option value ="vacio">Elige</option>';
      $tema = $_POST['tema'];
      $imagenes = scandir("/xampp/htdocs/2-DAW/DesarrolloServidor/php/ejercicios/php_mail/img/" . $tema );
      foreach ($imagenes as $key => $value) {
        if ($value != "." && $value != "..") {
          echo '<option value ="'.$value.'">' . $value . '</option>';
        }
      }
    ?>
  </select>
  <input type="submit" value="Enviar">
</form>

<div class="contenedor">
      <a href="./index.html">Volver</a>
</div>

</body>
</html>