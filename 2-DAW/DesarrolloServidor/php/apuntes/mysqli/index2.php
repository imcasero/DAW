<?php
$enlace = mysqli_connect("localhost", "diego", "diego" , "jardineria");
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}
// mysqli_query($enlace, "CREATE TEMPORARY TABLE miCiudad LIKE oficina");
// $ciudad = "Barcelona";
// /* esta consulta fallará debido a que no escapa $ciudad */
// if (!mysqli_query($enlace, "INSERT into miCiudad (Name) VALUES ('$ciudad')")) {
// printf("Error: %s\n", mysqli_sqlstate($enlace));
// }
// $ciudad = mysqli_real_escape_string($enlace, $ciudad);
// /* esta consulta con $ciudad escapada funcionará */
// if (mysqli_query($enlace, "INSERT into miCiudad (Name) VALUES ('$ciudad')")) {
// printf("%d fila insertada.\n", mysqli_affected_rows($enlace));
// }
// mysqli_close($enlace);
?>