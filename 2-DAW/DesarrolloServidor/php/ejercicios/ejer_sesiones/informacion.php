<?php
    session_start();
    if($_SESSION['aut'] != true){
        header('Location: index.php');
    }
    echo '<a href="https://chrome.google.com/webstore/category/extensions?hl=es">Google extension</a><br>';
    echo '<a href="cerrar_sesion.php">Cerrar sesion</a><br>';
?>