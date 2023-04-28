<?php
    session_start();
    $_SESSION=array();
    Setcookie(session_name(),time()-3600);
    Session_destroy();
    header("Location: index.php");
?>