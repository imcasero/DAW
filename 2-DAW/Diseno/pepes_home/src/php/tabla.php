<?php
    $tdContenido = $_POST['contenido'];
    $tdContenido = explode("-" , $tdContenido);
    try {
        $usuario = 'root';
        $pass = 'root';
        $con = new PDO ('mysql:dbname=pepes_home;host=127.0.0.1', $usuario, $pass);
        $con -> setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
        $smtp = $con->prepare("SELECT platos.CodPlato, platos.Nombre, platos.Descripcion, platos.PrecioPlato, platos.Tipoproducto
                            FROM platos
                            INNER JOIN platos_menu
                            ON platos.CodPlato = platos_menu.CodPlato_r
                            INNER JOIN menus
                            ON platos_menu.CodMenu_r = menus.CodMenu
                            WHERE menus.CodMenu = ?
                                ");
        $smtp->bindValue(1, $tdContenido[0]);
        $smtp->execute();
        $results = '';
        while ($row = $smtp->fetch(PDO::FETCH_ASSOC)) {
            $results .= $row['CodPlato'] . '-' . $row['Nombre'] . '-' . $row['Descripcion'] . '-' . $row['Tipoproducto'] . '_';
        }

        // Eliminar el último guion bajo
        $results = substr($results, 0, -1);

        // Imprimir resultados
        echo $results;
    } catch (PDOException $e) {
        echo 'error: '.$e;
    }


    
?>