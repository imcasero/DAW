<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>log in</title>
    <style>
      /* Estilos generales */
      * {
        box-sizing: border-box;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
          Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
      }
      b{
        color : #0070c9;
      }
      /* Contenedor del formulario */
      .form-container {
        border-radius: 5px;
        width: 600px;
        margin: 50px auto;
        text-align: center;
        box-shadow: 0px 0px 34px -7px rgba(0, 0, 0, 0.64);
      }
      table {
        border-collapse: collapse;
        width: 100%;
      }

      th {
        background-color: #007aff;
        color: white;
        padding: 8px;
        text-align: left;
        font-weight: bold;
      }

      td {
        padding: 8px;
        text-align: left;
        color: black;
      }

      tr:nth-child(odd) td {
        background-color: #e6f2ff;
      }
      /* Estilos del título */
      h2 {
        padding-top: 30px;
        color: #333;
        font-weight: bold;
        margin-bottom: 40px;
      }
      input[type="text"],
      input[type="password"] {
        border: 1px solid #333 !important;
      }

      /* Estilos del input text */
      input[type="text"] {
        margin: 10px;
        width: 80%;
        padding: 10px;
        margin-bottom: 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        color: #333;
      }

      /* Estilos del input password */
      input[type="password"] {
        margin: 10px;
        width: 80%;
        padding: 10px;
        margin-bottom: 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        color: #333;
      }

      /* Estilos del check de aceptar términos y condiciones */
      input[type="checkbox"] {
        width: auto;
        margin-right: 10px;
      }

      /* Estilos del botón de envío */
      input[type="submit"] {
        margin: 10px;
        margin-bottom: 30px;
        width: 80%;
        padding: 10px;
        margin-top: 20px;
        background-color: #0070c9;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        color: #fff;
        cursor: pointer;
      }
      .enlaces {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
      }

      .enlaces a {
        font-size: 18px;
        color: #007aff;
        text-decoration: none;
        margin: 16px 0;
      }

      .enlaces a:hover {
        color: #00b3ff;
      }
    </style>
  </head>
  <body>
      <table>
        <tr>
            <th>nombre</th>
            <th>edad</th>
            <th>sexo</th>
            <th>especie</th>
            <th>raza</th>
            <th>peso</th>
            <th>estado</th>
            <th>vacunado</th>
            <th>desparasitado</th>
            <th>esterilizado</th>
            <th>microchip</th>
            <th>foto</th>
            <th>Adoptar</th>
            
        </tr>
        <?php
        session_start();
        if (!empty($_SESSION)) {
          try {
            $rasgos_mascotas = array();//array para los rasgos de las mascotas
            $array_user = array();//array para los rasgos de las personas ordenados por preferencia
            $array_result = array();//array final con el resultado
            $email = $_SESSION['user'];
            $raza = $_POST['raza'];
            $usuario = 'root';
            $pass = 'root';
            $con = new PDO ('mysql:dbname=adopta_mascota;host=127.0.0.1', $usuario, $pass);
            $con -> setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
            $smtp = $con->prepare('SELECT * FROM preferencias WHERE email like ? ORDER BY orden ASC');//consulta preferencias usuarios
            $smtp -> bindValue(1 , $email);
            $smtp ->execute();
            while ($fila = $smtp->fetch(PDO::FETCH_ASSOC)){
              array_push($array_user , $fila['rasgo']); //completamos el array_user
            }
            $smtp = $con->prepare('SELECT nombre FROM animales WHERE raza like ? AND estado NOT LIKE ? GROUP BY nombre');//consultamos las mascoas de la raza especificada y estadi
            $smtp ->bindValue(1 , $raza);
            $smtp ->bindValue(2 , 'Adoptado');
            $smtp ->execute();
            $rows = $smtp -> rowCount();
            if ($rows > 0) {
              
              while ($fila = $smtp->fetch(PDO::FETCH_ASSOC)) { //recorremos los resultados
                $nombre_mascota = $fila['nombre'];
                $smtp_1 =$con->prepare('SELECT * FROM personalidad_mascota WHERE nombre like ?'); //recorremos por nombre , es decir solo una mascota
                $smtp_1 ->bindValue(1 , $fila['nombre']);
                $smtp_1 ->execute();
                while ($fila = $smtp_1->fetch(PDO::FETCH_ASSOC)) { // aqui solo una mascora es decir solo las caracteristicas de junito
                  $init = array($fila['nombre'] , $fila['rasgo']);
                  array_push($rasgos_mascotas ,$init );
                }
                //recorremos las preferencias del usuario
                $puntos = 0;
                foreach ($array_user as $prioridad => $rasgo) {
                  foreach ( $rasgos_mascotas as $key => $val){
                    if ($rasgo == $val[1]) {
                    // echo ' prioridad --> ' .$prioridad.' preferencia persona-> '  .$rasgo . ' | rasgo mascota('.$rasgos_mascotas['nombre'].') ->' . $rasgos_mascotas['rasgo'] . '<br>';
                    // echo '</br>';
                      switch ($prioridad) {
                        case 0:
                          $puntos += 10;
                          break;
                        case 1:
                          $puntos += 8;
                          break;
                        case 2:
                          $puntos += 6;
                          break;
                        case 3:
                          $puntos += 4;
                          break;
                      }
                    }
                  }
                  
                }
                $resultado = array($nombre_mascota , $puntos);
                array_push($array_result ,$resultado );
                $rasgos_mascotas=array();
              }
            }
            $max = 0;
            $nombre = '';
              
            foreach ($array_result as $mascota) {
              if ($mascota[1] > $max) {
                $max = $mascota[1];
                $nombre = $mascota[0];
              }
            }

            echo "<p>Nuestra recomendacion personal es : <b>$nombre</b> debido a sus caracteristicas con estos puntos :<b>$max</b></p>";
            
          }catch (PDOExeption $e) {
            echo "An error occurred" . $e;
          }
        }
        

        $raza = $_POST['raza'];
        $usuario = 'root';
        $pass = 'root';
        $con = new PDO ('mysql:dbname=adopta_mascota;host=127.0.0.1', $usuario, $pass);
        $con -> setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
        $smtp = $con->prepare('SELECT * FROM animales WHERE raza like ? AND estado NOT LIKE ?');
        $smtp ->bindValue(1 , $raza);
        $smtp ->bindValue(2 , 'Adoptado');
        $smtp ->execute();
        $rows = $smtp -> rowCount();
            if ($rows > 0) {
              while ($fila = $smtp->fetch(PDO::FETCH_ASSOC)){
            echo '<tr>
            <td>'.$fila['nombre'].'</td>
            <td>'.$fila['edad'].'</td>
            <td>'.$fila['sexo'].'</td>
            <td>'.$fila['especie'].'</td>
            <td>'.$fila['raza'].'</td>
            <td>'.$fila['peso'].'</td>
            <td>'.$fila['estado'].'</td>
            <td>'.$fila['vacunado'].'</td>
            <td>'.$fila['desparasitado'].'</td>
            <td>'.$fila['esterilizado'].'</td>
            <td>'.$fila['microchip'].'</td>
            <td>'.$fila['foto'].'</td>
            ';
            
            if(isset($_SESSION['auth'])){
                echo '<td>
                    <form method="post" action="adoptar.php">
                        <input type="hidden" name="hidden" value="'.$fila['nombre'].'">
                        <input type="submit" value="adoptar">
                    </form>
                </td>';
            }else {
                 echo '<td>
                    <a href="login.html">Inicie sesion para adoptar</a>
                </td>';
            }
            echo '</tr>';
          }
            }else {
              echo '<h2>NO hay animales de la raza '.$raza.'</h2>';
            }
         
        ?>
    </table>
    
    <div class="enlaces">
        <a href="tabla.php">Filtrar razas</a>
        <a href="cerrar_sesion.php">Cerrar sesion</a>
    </div>
  </body>
</html>