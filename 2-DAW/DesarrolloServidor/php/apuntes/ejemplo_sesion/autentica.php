<?php //crea la variable de sesión de usuario autentcado para consultarla después
 session_start();
 if (!isset($_SESSION["autentficado"])){ 
 if (isset($_POST["usuario"]) && isset($_POST["contrasena"])){
 if ($_POST["usuario"]=="carmen" && $_POST["contrasena"]=="carmen"){
    $_SESSION["autentificado"]="SI";
 header("Location: aplicacionsegura.php");
}
 else // Credenciales erróneas
    header("Location: index.php?errorusuario=1"); 
 }
 else //No ha rellenado el formulario de autentcación
    header("Location: index.php"); 
}else // Ya está acreditado y no ha cerrado la sesión aún
    header("Location: aplicacionsegura.php"); 
?>
