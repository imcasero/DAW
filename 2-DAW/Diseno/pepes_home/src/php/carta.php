<?php
$conn = mysqli_connect("127.0.0.1", "root", "root");
$conn->select_db("pepes_home");

$sql = "SELECT platos.CodPlato, platos.Nombre, platos.Descripcion, platos.PrecioPlato, platos.TipoProducto, 
GROUP_CONCAT(alergenos.Descripcion_al SEPARATOR ', ') as Alergenos
FROM platos
LEFT JOIN platos_alergenos on platos.codPlato = platos_alergenos.codPlato_a
LEFT JOIN alergenos on alergenos.codAlergeno = platos_alergenos.codAlergeno_a
GROUP BY platos.CodPlato, platos.Nombre, platos.Descripcion, platos.PrecioPlato, platos.TipoProducto";
$result = mysqli_query($conn, $sql);

$data = "";

while ($row = mysqli_fetch_assoc($result)) {
    $cad = $row['CodPlato'] . '-' . $row['Nombre'] . '-' . $row['Descripcion'] .  '-'
     . $row['Alergenos'] . '-' . $row['PrecioPlato'] . '-' . $row['TipoProducto'];
    $data .= $cad . '_';
}

echo $data;
?>
