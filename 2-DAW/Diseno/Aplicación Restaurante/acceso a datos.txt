<?php
header('Content-Type: text/html; charset=ISO-8859-1');

// se establecen las variales para la conexion
$GLOBALS['DB_IP'] = '127.0.0.1';
$GLOBALS['DB_USER'] = 'root';
$GLOBALS['DB_PASS'] = 'contaseña';
$GLOBALS['DB_NAME'] = 'res_aulas';

// se establece el conector
$db = mysqli_connect($GLOBALS['DB_IP'], $GLOBALS['DB_USER'], $GLOBALS['DB_PASS']);


// seleccionamos la base de datos del conector anterior
mysql_select_db($GLOBALS['DB_NAME'], $db);

// verificamos que la conexión haya sido correcta
if (!$db) 
{
echo "No pudo conectarse a la BD: " . mysql_error();
exit();
}

	// como se recogen las variables desde el javascript/html
	$php_pass = $_POST['contrasenia'];
	$php_email= $_POST['email'];
	
	
	
	// compruebo que exista el usuario con el email anterior
	$consulta = "SELECT * FROM usuarios WHERE email_c = '$php_email'";
	$result = mysql_query($consulta,$db);
	
	if (!$result) 
			{
					si no existe.......html
			} 
			else 
			{
					while ($valor = mysql_fetch_array($result)) 
					{
						// aqui se pasan a variables los campos leidos de la base de datos
						// a través de la variable valor........
						$ver_ds = $valor['contrasenia_c'];
						
						//comprobar que la contrasenia leida e introducida son iguales
						si son iguales ........html
						si no son iguales .......html
						
						
					}
								
			}	
			
					
mysql_close($db);
?> 