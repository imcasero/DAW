<?php
    $back_w=@fopen("back.txt", "w"); // Para escribir el fichero aux
    if(!$back_w){
        die("Error en fichero back_w");
    }
    $sanc_r=@fopen("alumnos_sancionados.txt", "r"); // Para leer el fichero original
    if(!$sanc_r){
        die("Error en fichero sanc_r");
    }
    $datos = explode("," , $_POST['hidden']); //Estado[EP , P , C] , codigo sancion; ()llega desde los botoens con los datos
    if (trim($datos[0]) == 'En proceso') { // si datos 0(Estado [En proceso]) 
        while(!feof($sanc_r)){
            $in = explode("," , fgets($sanc_r));
            if (trim($datos[1]) == $in[0]){ //cuando cincida el cod
                //  print_r($in);
                //  echo '<br> barrera';
                $in[5] = "C\n"; //cambio el estado
                // print_r($in);
                // echo '<br>';
                fwrite($back_w , implode("," , $in));// lo escribo en el fichero aux
            }else {
                fwrite($back_w , implode("," , $in));// Si no escribo la lina para no perderla
            }
        }
    }else if (trim($datos[0]) == 'pendiente'){ // lo mismo pero con pendiente
        while(!feof($sanc_r)){
            $in = explode("," , fgets($sanc_r));
            if (trim($datos[1]) == $in[0]){
                // print_r($in);
                // echo '<br> barrera';
                $in[5] = "EP \n";
                // print_r($in);
                // echo '<br>';
                fwrite($back_w , implode("," , $in));
            }else {
                fwrite($back_w , implode("," , $in));
            }
        }
    }
    fclose($back_w);//cierro los ficheros
    fclose($sanc_r);
    $back_r=@fopen("back.txt", "r"); //leo el fichero aux
    if(!$back_r){
        die("Error en fichero back_r");
    }
    $sanc_w=@fopen("alumnos_sancionados.txt", "w+"); // borro el fichero original
    fclose($sanc_w);
    $sanc_w=@fopen("alumnos_sancionados.txt", "a"); //y escribo sobre el en blanco
    if(!$sanc_w){
        die("Error en fichero sanc_w");
    }
    $array_aux = array();
    while(!feof($back_r)){
        array_push($array_aux,fgets($back_r) ); //paso los datos de aux a un array
    }
    foreach ($array_aux as $key => $value) {
        fwrite($sanc_w , $value); //escribo los datos de aux
    }
    fclose($sanc_w);
    fclose($back_r);
    $back_b=@fopen("back.txt", "w+"); //para borrar backup
    fclose($back_b);
    header('Location: index.php');
?>