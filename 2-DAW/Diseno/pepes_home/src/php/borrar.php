<?php
    $tdContenido = $_POST['contenido'];
    $tdContenido = explode("-" , $tdContenido);
    $num = count($tdContenido);
    switch($tdContenido[$num-1]){
        case 'carta_admin.html':
            try {
                $usuario = 'root';
                $pass = 'root';
                $con = new PDO ('mysql:dbname=pepes_home;host=127.0.0.1', $usuario, $pass);
                $con -> setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
                $smtp = $con->prepare('DELETE FROM  platos WHERE codPlato LIKE ?');
                $smtp ->bindValue(1 , $tdContenido[0]);
                $smtp ->execute();
                $num_filas = $smtp ->rowCount();
                echo $num_filas . ' rows devuelta';
            }catch (PDOException $e) {
                echo 'Error: '.$e->getMessage();
            }
            break;
            case 'alergenos.html':
            try {
                $usuario = 'root';
                $pass = 'root';
                $con = new PDO ('mysql:dbname=pepes_home;host=127.0.0.1', $usuario, $pass);
                $con -> setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
                $smtp = $con->prepare('DELETE FROM  alergenos WHERE codAlergeno LIKE ?');
                $smtp ->bindValue(1 , $tdContenido[0]);
                $smtp ->execute();
                $num_filas = $smtp ->rowCount();
                echo $num_filas . ' rows devuelta';
            }catch (PDOException $e) {
                echo 'Error: '.$e->getMessage();
            }
            break;
    }
    
?>