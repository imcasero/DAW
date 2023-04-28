<?php
    $email = $_POST['emailInput'];
    $pass = $_POST['passwordInput'];
    $name = $_POST['nameInput'];
    $surname = $_POST['surnameInput'];
    $address = $_POST['addressInput'];
    $tel = $_POST['telInput'];
    $fecha = $_POST['fechaInput'];
    $dni = $_POST['dniInput'];

    $GLOBALS['DB_IP'] = '127.0.0.1';
    $GLOBALS['DB_USER'] = 'root';
    $GLOBALS['DB_PASS'] = 'root';
    $GLOBALS['DB_NAME'] = 'pepes_home';

    $db = mysqli_connect($GLOBALS['DB_IP'] , $GLOBALS['DB_USER'] , $GLOBALS['DB_PASS']);
    if (!$db){
        die('No se puedo conectar con la BD' );
    }
    mysqli_select_db($db ,  $GLOBALS['DB_NAME']);
    $query = "SELECT * FROM clientes WHERE dni='$dni'";
    $result = mysqli_query($db, $query);
    if (mysqli_num_rows($result) > 0) {
        header("location: ../html/registro.html");
    } else {
        $query = "INSERT INTO `clientes` (`Nombre`, `Apellidos`, `Contraseña`, `Fecha_nacimiento`, `Email`, `Telefono`, `Direccion`, `DNI`, `Rol`, `Puntos`) 
        VALUES ('$name', '$surname', '$pass' , '$fecha', '$email', '$tel', '$address', '$dni', 'user', '10');";
        $result = mysqli_query($db, $query);
        header("location: ../html/login.html");
    }
?>