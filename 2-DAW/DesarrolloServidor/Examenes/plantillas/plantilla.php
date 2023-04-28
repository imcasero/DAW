<?php
    //DATETIME
        //BASICO
        $hoy = new DateTime('now');
        echo  $hoy->format("Y-m-d H:i:s") .'<br>';
        $ayer = new DateTime('yesterday');
        echo  $ayer->format("Y-m-d H:i:s").'<br>';
        $maniana = new DateTime('tomorrow');
        echo  $maniana->format("Y-m-d H:i:s").'<br>';
        //ZONA HORARIA
        date_default_timezone_set('Europe/Madrid');
        $nuevaFecha = new DateTime(); //Se genera objeto con la fecha actual
        echo $nuevaFecha->format("Y-m-d H:i:s"); // formato aceptado por date()
        echo '<br>';
        date_default_timezone_set('Europe/London'); //puede fallar si contradice php.ini no es recomendable
        $nuevaFecha = new DateTime();
        echo $nuevaFecha->format("Y-m-d H:i:s");
        echo '<br>';
        if (date_default_timezone_get()){
            echo 'date_default_timezone_set: ' . date_default_timezone_get() . '<br />';
        }
        if (ini_get('date.tmezone')){
            echo 'date.timezone: ' . ini_get('date.timezone');
        }
        //FORMA CORRECTA
        // obtener y mostrar la hora actual en Europe/London
        $zona = new DateTimeZone('Europe/London'); //solo para esta variable
        $fecha = new DateTime('now', $zona); //NULL no funciona aqui no se porque
        echo '<br>' . $fecha->format('H:i:s');
        //INTERVALOS
        $intervalo = new DateInterval('P2Y3M1DT2H');
        $fecha = new DateTime();
        $fecha->add(new DateInterval('P2Y3M1DT2H'));
        echo '<br>' . $fecha->format("Y-m-d H:i:s");

        $fecha1 = new DateTime('2022-01-01 10:30:00');
        $fecha2 = new DateTime('2023-05-03 15:30:00');
        $intervalo = $fecha1->diff($fecha2); //la fecha pequeña al principio
        echo '<br>';
        echo $intervalo->format('%R%a días'); //Imprime 122 días , con la R da el valor + o -
        echo '<br>';
        echo $intervalo->format('%R%Y año'); 
        echo '<br>';
        echo $intervalo->format('%R%y año'); 
        echo '<br>';
        echo $intervalo->format('%h : %i : %s  horas , minutos , segundos'); 
        echo '<br>';
        

        $formato = 'Y-m-d';
        $fecha = DateTime::createFromFormat($formato , '2009-02-12');
        echo 'Formato: ' . $formato . $fecha->format('Y-m-d H:i:s') . "\n";
    //COKIEES
        //CREAR
        setcookie('nombre', 'contenido', time() + 30*24*60*60);
        //ELIMINAR
        setcookie('nombre', 'contenido', time() - 60);
        //LEER(TODAS)
        foreach($_COOKIE as $key => $val){
            echo $key . '<br>' ;
        }
        //COMPROBAR SI EXISTE
        if(isset($_COOKIE['nombre'])){
            echo 'La cookie ha sido creada';
        }else {
            echo 'Si no existe se puede crear asi';
        }

    //SESIONES
        //CREAR
        session_start();
        $_SESSION["aut"] = true;
        $_SESSION["user"] = 'Diego';
        echo "Sesión iniciada !<br>";
        //ELIMINAR SESIONES
        session_start();
        $_SESSION=array();
        Setcookie(session_name(),time()-3600);
        Session_destroy();
        header("Location: index.php");
        //COMPROBAR SI SE HA INICIADO SESION
        if (!isset($_SESSION['aut'])){
            echo 'Si entra no esta vacio';
        }else {
            echo 'No hay sesion';
        }
        //COMPROBAR PARA MOSTRAR DATOS
        session_start();
        if($_SESSION['aut'] != true){
            echo 'Sesion no iniciada';
        }
    //PDO
        //BASICO
        $usuario = 'diego_jar';
        $pass = 'diego_jar';
        $con = new PDO ('mysql:dbname=jardineria;host=127.0.0.1', $usuario, $pass);
        $con -> setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
        $smtp = $con->prepare('SELECT * FROM oficinas WHERE pais LIKE ?');
        // $smtp ->bindValue(1 , $tabla);
        $smtp ->bindValue(1 , $pais);
        $smtp ->execute();
        $num_filas = $smtp ->rowCount();
        echo $num_filas . ' rows devuelta<br>';
        //Recorrer array
        while ($fila = $smtp->fetch(PDO::FETCH_ASSOC)) {//asociativo
            echo $fila['Ciudad']. ' '.$fila['Telefono'] . '<br>';
        }
        while ($row = $stmt->fetch()) {//sin asociar
            echo $row[0];
        }
    //MYSQL
        // Consulta básica
        $basic_query = "SELECT column1, column2, ...
        FROM table_name
        WHERE condition";

        // Agrupamiento de datos
        $group_query = "SELECT column1, SUM(column2), ...
        FROM table_name
        GROUP BY column1";

        // Únicamente valores distintos
        $distinct_query = "SELECT DISTINCT column1, column2, ...
        FROM table_name";

        // Ordenamiento de datos
        $order_query = "SELECT column1, column2, ...
        FROM table_name
        ORDER BY column1 [ASC|DESC]";

        // Subconsulta
        $subquery = "SELECT column1, column2, ...
        FROM table_name
        WHERE column_name operator
        (SELECT column_name
        FROM table_name
        WHERE condition)";

        // Comando DELETE
        $delete_query = "DELETE FROM table_name
        WHERE condition";

        // Comando INNER JOIN
        $inner_join_query = "SELECT column1, column2, ...
        FROM table1
        JOIN table2
        ON table1.column_name = table2.column_name";

        // Comando LEFT JOIN
        $left_join_query = "SELECT column1, column2, ...
        FROM table1
        LEFT JOIN table2
        ON table1.column_name = table2.column_name";

        // Comando RIGHT JOIN
        $right_join_query = "SELECT column1, column2, ...
        FROM table1
        RIGHT JOIN table2
        ON table1.column_name = table2.column_name";

        // Comando FULL OUTER JOIN
        $full_outer_join_query = "SELECT column1, column2, ...
        FROM table1
        FULL OUTER JOIN table2
        ON table1.column_name = table2.column_name";
        
    
        // Inserción Simple
        $sql = "INSERT INTO tabla (columna1, columna2, columna3) 
                VALUES ('valor1', 'valor2', 'valor3')";

        // Inserción con variables
        $columna1 = "valor1";
        $columna2 = "valor2";
        $columna3 = "valor3";

        $sql = "INSERT INTO tabla (columna1, columna2, columna3) 
                VALUES ('$columna1', '$columna2', '$columna3')";

        // Inserción con una sentencia preparada
        $columna1 = "valor1";
        $columna2 = "valor2";
        $columna3 = "valor3";

        $sql = "INSERT INTO tabla (columna1, columna2, columna3) 
                VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $columna1, $columna2, $columna3);
        $stmt->execute();

        // Inserción múltiple
        $sql = "INSERT INTO tabla (columna1, columna2, columna3) 
        VALUES ('valor1-1', 'valor1-2', 'valor1-3'),
               ('valor2-1', 'valor2-2', 'valor2-3'),
               ('valor3-1', 'valor3-2', 'valor3-3')";


    //CADENAS

        // strlen(): Devuelve la longitud de una cadena
        $cadena = "Hola mundo";
        $longitud = strlen($cadena);
        // Imprimirá 11
        echo $longitud;

        // substr(): Devuelve una parte de una cadena
        $nueva_cadena = substr($cadena, 0, 4);
        // Imprimirá "Hola"
        echo $nueva_cadena;

        // str_replace(): Reemplaza una parte de una cadena con otra
        $reemplazo = str_replace("Hola", "Adiós", $cadena);
        // Imprimirá "Adiós mundo"
        echo $reemplazo;

        // strtolower(): Convierte una cadena a minúsculas
        $minusculas = strtolower($cadena);
        // Imprimirá "hola mundo"
        echo $minusculas;

        // strtoupper(): Convierte una cadena a mayúsculas
        $mayusculas = strtoupper($cadena);
        // Imprimirá "HOLA MUNDO"
        echo $mayusculas;

        // trim(): Elimina los espacios en blanco al inicio y al final de una cadena
        $cadena_espacios = " Hola mundo ";
        $sin_espacios = trim($cadena_espacios);
        // Imprimirá "Hola mundo"
        echo $sin_espacios;

        // explode(): Divide una cadena en un arreglo
        $division = explode(" ", $cadena);
        // Imprimirá Array ( [0] => Hola [1] => mundo )
        print_r($division);

        // implode(): Junta los elementos de un arreglo en una cadena
        $union = implode(" ", $division);
        // Imprimirá "Hola mundo"
        echo $union;

        // strpos(): Encuentra la posición de la primera aparición de una subcadena en una cadena
        $posicion = strpos($cadena, "mundo");
        // Imprimirá 5
        echo $posicion;

        // strcmp(): Compara dos cadenas y devuelve 0 si son iguales, un número negativo si la primera es menor o un número positivo si la primera es mayor
        $comparacion = strcmp($cadena, "Hola mundo");
        // Imprimirá 0
        echo $comparacion;
    //ARRAYS
        // count(): Devuelve el número de elementos en un arreglo
        $numeros = array(1, 2, 3, 4, 5);
        $elementos = count($numeros);
        // Imprimirá 5
        echo $elementos;

        // array_push(): Añade uno o más elementos al final de un arreglo
        array_push($numeros, 6, 7);
        // Imprimirá Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 7 )
        print_r($numeros);

        // array_pop(): Elimina el último elemento de un arreglo y lo devuelve
        $ultimo = array_pop($numeros);
        // Imprimirá 7
        echo $ultimo;

        // array_shift(): Elimina el primer elemento de un arreglo y lo devuelve
        $primero = array_shift($numeros);
        // Imprimirá 1
        echo $primero;

        // array_unshift(): Añade uno o más elementos al inicio de un arreglo
        array_unshift($numeros, 0);
        // Imprimirá Array ( [0] => 0 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 )
        print_r($numeros);

        // array_slice(): Devuelve una parte de un arreglo
        $parte = array_slice($numeros, 1, 3);
        // Imprimirá Array ( [0] => 2 [1] => 3 [2] => 4 )
        print_r($parte);

        // array_splice(): Elimina una parte de un arreglo y, opcionalmente, la reemplaza con otra
        array_splice($numeros, 1, 3, array(9, 8, 7));
        // Imprimirá Array ( [0] => 0 [1] => 9 [2] => 8 [3] => 7 [4] => 5 [5] => 6 )
        print_r($numeros);

        // array_merge(): Fusiona dos o más arreglos en uno solo
        $otros_numeros = array(10, 11, 12);
        $todos_numeros = array_merge($numeros, $otros_numeros);
        // Imprimirá Array ( [0] => 0 [1] => 9 [2] => 8 [3] => 7 [4] => 5 [5] => 6 [6] => 10 [7] => 11 [8] => 12 )
        print_r($todos_numeros);

        // array_keys(): Devuelve las claves de un arreglo
        $claves = array_keys($todos_numeros);
        // Imprimirá Array ( [0] => 0 [1] => 1 [2] => 2 [3] => 3 [4] => 4 [5]
        // array_values(): Devuelve todos los valores de un arreglo
        $colores = array("rojo" => "#ff0000", "verde" => "#00ff00", "azul" => "#0000ff");
        $valores = array_values($colores);
        // Imprimirá Array ( [0] => #ff0000 [1] => #00ff00 [2] => #0000ff )
        print_r($valores);

        // in_array(): Busca un valor en un arreglo y devuelve verdadero si se encuentra o falso si no
        $encontrado = in_array("#00ff00", $valores);
        // Imprimirá 1
        echo $encontrado;

        $no_encontrado = in_array("#000000", $valores);
        // Imprimirá 
        echo $no_encontrado;
    //LEER DIRECTORIOS
        //scandir
        $ficheros = scandir("ruta desde xampp");
        
        foreach ($imagenes as $key => $value) {//recorremos el array
            if ($value != "." && $value != "..") {//el value es el nombre del fichero o directorio
                //ignoramos los puntos
            }
        }
        //glob
        $directorios = glob("*", GLOB_ONLYDIR);

        foreach ($directorios as $directorio) {
            echo $directorio . "<br>";
        }
        $archivos = glob("*.txt");

        foreach ($archivos as $archivo) {
            echo $archivo . "<br>";
        }
    //ESCAPAR
        $nombre = $_POST['nombre'];
        $nombre = htmlspecialchars($nombre);
?>