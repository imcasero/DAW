<?php
    $select = [];
    $mensaje='
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
    ';
    $inter = true;
    $cad = '<p class="error"> este campo es obligatorio</p><br>';
    if (empty($_POST['email'])){
        $inter = false;
        $mensaje .= '
        <input
          type="text"
          class="form-control"
          name="email"
          placeholder="Email *"
        />
            '.$cad.'
        ';
    }else {
        $var = $_POST['email'];
        $mensaje .= '
            <input
          type="text"
          class="form-control"
          name="email"
          value="'.$var.'"
          placeholder="Email *"
        />
        ';
    }
    if (empty($_POST['nombre'])){
        $inter = false;
        $mensaje .= '
        <input
          type="text"
          class="form-control"
          name="nombre"
          
          placeholder="Nombre *"
        />
            '.$cad.'
        ';
    }else {
        $var = $_POST['nombre'];
        $mensaje .= '
           <input
          type="text"
          class="form-control"
          name="nombre"
          value="'.$var.'"
          placeholder="Nombre *"
        />
        ';
    }
    if (empty($_POST['direccion'])){
        $inter = false;
        $mensaje .= '
            <input
          type="text"
          class="form-control"
          name="direccion"
          
          placeholder="Direccion *"
        />
            '.$cad.'
        ';
    }else {
        $var = $_POST['direccion'];
        $mensaje .= '
            <input
          type="text"
          class="form-control"
          name="direccion"
          value="'.$var.'"
          placeholder="Direccion *"
        />
        ';
    }
    if (empty($_POST['localidad'])){
        $inter = false;
        $mensaje .= '
            <input
            type="text"
          class="form-control"
          name="localidad"
          
          placeholder="localidad *"
        />
            '.$cad.'
        ';
    }else {
        $var = $_POST['localidad'];
        $mensaje .= '
            <input
          type="text"
          class="form-control"
          name="localidad"
          value="'.$var.'"
          placeholder="localidad *"
        />
        ';
    }
    if (empty($_POST['password'])){
        $inter = false;
        $mensaje .= '
            <input
          type="text"
          class="form-control"
          name="password"
          
          placeholder="password *"
        />
            '.$cad.'
        ';
    }else {
        $var = $_POST['password'];
        $mensaje .= '
            <input
          type="text"
          class="form-control"
          name="password"
          value="'.$var.'"
          placeholder="password *"
        />
        ';
    }
    
    
    if (empty($_POST['pref1'])){
        $inter = false;
        $mensaje .= '
            <label for="pref1">Preferencia 1*:</label>
            <select name="pref1">
        ';
        $mensaje .= preferencias('');
        $mensaje .= ' '.$cad.' </select><br><br>';
    }else {
        $var = $_POST['pref1'];
        array_push($select , $var);
        $mensaje .= '
            <label for="pref1">Preferencia 1*:</label>
            <select name="pref1">
        ';
        $mensaje .= preferencias($var);
        $mensaje .= ' '.$cad.' </select><br><br>';
    }
    if (empty($_POST['pref2'])){
        $inter = false;
        $mensaje .= '
            <label for="pref2">Preferencia 2*:</label>
            <select name="pref1">
        ';
        $mensaje .= preferencias('');
        $mensaje .= ' '.$cad.' </select><br><br>';
    }else {
        $var = $_POST['pref2'];
        array_push($select , $var);
        $mensaje .= '
            <label for="pref2">Preferencia 2*:</label>
            <select name="pref2">
        ';
        $mensaje .= preferencias($var);
        $mensaje .= ' '.$cad.' </select><br><br>';
    }

    
    

    if($inter){
        $usuario = 'root';
        $pass = 'root';
        $con = new PDO ('mysql:dbname=adopta_mascota;host=127.0.0.1', $usuario, $pass);
        $con -> setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
        $smtp = $con->prepare("INSERT INTO usuarios (email , pwd , nombre ,direccion , localidad)
        VALUES( ? , ? , ? , ? , ?)");
        $smtp ->bindValue(1 , $_POST['email']);
        $smtp ->bindValue(2 , $_POST['password']);
        $smtp ->bindValue(3 , $_POST['nombre']);
        $smtp ->bindValue(4 , $_POST['direccion']);
        $smtp ->bindValue(5 , $_POST['localidad']);
        $smtp ->execute();
        array_push($select , $_POST['pref3']);
        array_push($select , $_POST['pref4']);
        foreach ( $select as $key => $val ){
            $smtp = $con->prepare("INSERT INTO preferencias (email , rasgo , orden)
        VALUES( ? , ? , ? , )");
        if($val != "0"){
            $smtp ->bindValue(1 , $_POST['email']);
            $smtp ->bindValue(2 , $val);
            $smtp ->bindValue(3 , $key + 1);
        }
        
        }


        session_start();
        $_SESSION["aut"] = true;
        header("Location: tabla.php");
    } else {
        $mensaje .= '
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
                <a href="">Continuar como invitado</a>
                </div>
            </body>
            </html>';
        echo $mensaje;
    }

    function preferencias($var){
        $mensaje = '';
        $usuario = 'root';
          $pass = 'root';
          $con = new PDO ('mysql:dbname=adopta_mascota;host=127.0.0.1', $usuario, $pass);
          $con -> setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
          $smtp = $con->prepare('SELECT * FROM rasgos');
          $smtp ->execute();
          if($var == '' || $var == "0"){
            $mensaje .= '<option value="0">--Elige--</option>';
            while ($fila = $smtp->fetch(PDO::FETCH_ASSOC)) {//asociativo
                $mensaje .=  '<option value="'.$fila['id'].'">' . $fila['descripcion']. '</option>';
            }
          return $mensaje;
          }else {
            $mensaje .= '<option value="0">--Elige--</option>';
            while ($fila = $smtp->fetch(PDO::FETCH_ASSOC)) {//asociativo
                if($var != $fila['id']){
                    $mensaje .=  '<option value="'.$fila['id'].'">' . $fila['descripcion']. '</option>';
                } else {
                    $mensaje .=  '<option selected value="'.$fila['id'].'">' . $fila['descripcion']. '</option>';
                }
                
            }
          return $mensaje;
          }
          
    }
?>