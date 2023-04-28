<?php
    function conexionPDO($db , $user , $pass ){
        $con = new PDO ("mysql:dbname=$db;host=127.0.0.1", $user, $pass);
        $con -> setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
        return $con;
    }
    function cerrarSesion($redirect){
        session_start();
        $_SESSION = array();
        header("Location:$redirect");
    }
?>