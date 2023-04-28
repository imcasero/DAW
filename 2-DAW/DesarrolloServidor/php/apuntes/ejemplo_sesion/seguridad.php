<?php // comprueba la existencia de usuario autenticado
    session_start();
    if ($_SESSION["autentificado"]!="SI"){
        header("Location: index.php");
        exit();
   }
?>