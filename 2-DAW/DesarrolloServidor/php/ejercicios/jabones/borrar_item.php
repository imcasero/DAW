<?php
    session_start();
    $conn = new PDO("mysql:host=localhost;dbname=jabones", "root", "root");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $datos = explode("-", $_POST['hidden']);
    if (!empty($_SESSION)) {
    $usuario = $_SESSION['user'];
    
        $id = id_cesta($conn);
        $productoID = $datos[0]; // Id del producto
        if($datos[1] >1){
            $stmt = $conn->prepare("UPDATE itemCesta SET cantidad = cantidad - 1 WHERE cestaID = :id AND productoID = :productoID");
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':productoID', $productoID);
            $stmt->execute();
        }else {
            $stmt = $conn->prepare("DELETE FROM itemCesta WHERE cestaID = ? AND productoID = ?");
            $stmt->execute([$id, $productoID]);
        }
        header('Location: carrito.php');
    }else {
        header('Location: index.html');
    }

    function id_cesta($conn){
         $usuario = $_SESSION['user'];
        try {
            
            $stmt = $conn->prepare("SELECT cestaID FROM cesta WHERE email_cesta = ?");
            $stmt->bindValue(1 , $usuario);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if($result){
                return $cestaID = $result['cestaID'];
            }else {
                echo '<p>No tiene pedidos en la cesta</p>';
            }
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
?>
