<?php
    session_start();
    $productoID = $_POST['hidden'];
    $cantidad = 1;
    $email = $_SESSION['user'];

    $conn = new PDO("mysql:host=localhost;dbname=jabones", "root", "root");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT cestaID FROM cesta WHERE email_cesta = ?");
    $stmt->bindValue(1, $email);
    $stmt->execute();

    $cestaID = $stmt->fetchColumn();

    $stmt = $conn->prepare("SELECT * FROM itemCesta WHERE cestaID = ? AND productoID = ?");
    $stmt->bindValue(1, $cestaID);
    $stmt->bindValue(2, $productoID);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        // Actualizar la fila existente
        $row = $stmt->fetch();
        $cantidadActual = $row['cantidad'];
        $cantidadNueva = $cantidadActual + $cantidad;
        $stmt = $conn->prepare("UPDATE itemCesta SET cantidad = ? WHERE itemCestaID = ?");
        $stmt->bindValue(1, $cantidadNueva);
        $stmt->bindValue(2, $row['itemCestaID']);
        $stmt->execute();
    } else {
        // Insertar una nueva fila
        $stmt = $conn->prepare("INSERT INTO itemCesta (cestaID, productoID, cantidad) VALUES (?, ?, ?)");
        $stmt->bindValue(1, $cestaID);
        $stmt->bindValue(2, $productoID);
        $stmt->bindValue(3, $cantidad);
        $stmt->execute();
    }

    header('Location: carrito.php');
?>