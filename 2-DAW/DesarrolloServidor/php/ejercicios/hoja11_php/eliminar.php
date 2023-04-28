<?php
    $con = new mysqli("localhost","diego_inm","1234");
    if (mysqli_connect_errno()) {
        printf("Falló la conexión: %s\n", mysqli_connect_error());
        exit();
    }
    $con->select_db("inmobiliaria");
    $cons = "DELETE FROM noticias WHERE ID LIKE $_POST[id]";
    $resul = mysqli_query($con, $cons);
    if(!$resul){
        die('La consulta no obtuvo resultado' );
    }
    header("location: eliminar_noticia.php");
?>