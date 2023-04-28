<?php
$conn = mysqli_connect("127.0.0.1" , "root" , "root");
$conn->select_db("pepes_home");

$sql = "SELECT codMenu, precioMenu , tipoMenu FROM menus";
$result = mysqli_query($conn, $sql);

$data = "";

while ($row = mysqli_fetch_assoc($result)) {
    $data .= implode("-", $row) . "_";
}

echo $data;
?>