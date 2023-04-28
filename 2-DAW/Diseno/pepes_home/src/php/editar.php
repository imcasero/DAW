<?php
    $tdContenido = $_POST['contenido'];
    $tdContenido = explode("-" , $tdContenido);
    $num = count($tdContenido);
    
    switch($tdContenido[$num-1]){
        case 'carta_admin.html':
            if($tdContenido[0] == 0){
                insertar($tdContenido,$num);
            }else {
                $CodPlato = $tdContenido[0];
                $Nombre = $tdContenido[1];
                $Descripcion = $tdContenido[2];
                $PrecioPlato = $tdContenido[4];
                $TipoProducto = $tdContenido[5];
                try {
                    $usuario = 'root';
                    $pass = 'root';
                    $con = new PDO ('mysql:dbname=pepes_home;host=127.0.0.1', $usuario, $pass);
                    $con -> setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
                    $stmt = $con->prepare("UPDATE platos SET Nombre = :Nombre, Descripcion = :Descripcion, PrecioPlato = :PrecioPlato, TipoProducto = :TipoProducto WHERE CodPlato = :CodPlato");

                    $stmt->bindParam(':Nombre', $Nombre);
                    $stmt->bindParam(':Descripcion', $Descripcion);
                    $stmt->bindParam(':PrecioPlato', $PrecioPlato);
                    $stmt->bindParam(':TipoProducto', $TipoProducto);
                    $stmt->bindParam(':CodPlato', $CodPlato);

                    $stmt->execute();

                    echo "Registro actualizado exitosamente";
                }catch (PDOException $e) {
                    echo 'Error: '.$e->getMessage();
                }
                break;
            }
            
            case 'alergenos.html':
            if($tdContenido[0] == 0){
                insertar($tdContenido,$num);
            }else {
                $codalergeno = $tdContenido[0];
                $descrip = $tdContenido[1];
                try {
                    $usuario = 'root';
                    $pass = 'root';
                    $con = new PDO ('mysql:dbname=pepes_home;host=127.0.0.1', $usuario, $pass);
                    $con -> setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
                    $stmt = $con->prepare("UPDATE alergenos SET descripcion_al = ? WHERE Codalergeno = ?");
                    $stmt->bindValue(1, $descrip );
                    $stmt->bindValue(2 ,$codalergeno );
                    

                    $stmt->execute();

                    echo "Registro actualizado exitosamente";
                }catch (PDOException $e) {
                    echo 'Error: '.$e->getMessage();
                }
            break;
            }
            case 'menus.html':
                $codmenu = $tdContenido[0];
                break;
                
    }
    function insertar($tdContenido ,$num){
        switch($tdContenido[$num-1]){
        case 'carta_admin.html':
            
            $Nombre = $tdContenido[1];
            $Descripcion = $tdContenido[2];
            $PrecioPlato = $tdContenido[4];
            $TipoProducto = $tdContenido[5];
            try {
                $usuario = 'root';
                $pass = 'root';
                $con = new PDO ('mysql:dbname=pepes_home;host=127.0.0.1', $usuario, $pass);
                $con -> setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

                // Obtener el último valor de "codplato" y sumar 1
                $stmt = $con->query("SELECT MAX(codplato) FROM platos");
                $codplato = $stmt->fetchColumn() + 1;

                $stmt = $con->prepare("INSERT INTO platos (codplato, Nombre, Descripcion, PrecioPlato , TipoProducto) 
                VALUES(:codplato, :Nombre, :Descripcion, :PrecioPlato, :TipoProducto)");

                $stmt->bindParam(':codplato', $codplato);
                $stmt->bindParam(':Nombre', $Nombre);
                $stmt->bindParam(':Descripcion', $Descripcion);
                $stmt->bindParam(':PrecioPlato', $PrecioPlato);
                $stmt->bindParam(':TipoProducto', $TipoProducto);

                $stmt->execute();

                echo "Registro actualizado exitosamente";
            }catch (PDOException $e) {
                echo 'Error: '.$e->getMessage();
            }
            break;
            case 'alergenos.html':
                $descrip = $tdContenido[1];
                try {
                    $usuario = 'root';
                    $pass = 'root';
                    $con = new PDO ('mysql:dbname=pepes_home;host=127.0.0.1', $usuario, $pass);
                    $con -> setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
                    $stmt = $con->query("SELECT MAX(codalergeno) FROM alergenos");
                    $codalergeno = $stmt->fetchColumn() + 1;
                    $stmt = $con->prepare("INSERT INTO alergenos (codalergeno, descripcion_al) 
                    VALUES(? ,?)");
                    $stmt->bindValue(1 ,$codalergeno );
                    $stmt->bindValue(2, $descrip );
                    $stmt->execute();
                    

                    echo "Registro actualizado exitosamente";
                }catch (PDOException $e) {
                    echo 'Error: '.$e->getMessage();
                }
            break;
    }
}
?>