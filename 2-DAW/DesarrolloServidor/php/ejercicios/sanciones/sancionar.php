<?php
    $alumno = $_POST['alum'];
    $sancion = $_POST['sancion'];
    $estado = $_POST['estado'];
    $sanc = $_POST['sanc'];

    insertar($alumno , $sancion , $sanc , $estado);

    function insertar($a  ,$s, $sc , $e){
        $fichero_cod = @fopen("alumnos_sancionados.txt", "r");
        if (!$fichero_cod){
            die("Error en el fichero");
        }
        $fichero="alumnos_sancionados.txt";
        $filas=file($fichero);
        $cod = array_pop($filas);
        
        $fichero_lec = @fopen("alumnos_sancionados.txt", "a");
        if (!$fichero_lec){
            die("Error en el fichero");
        }
        $hoy = new DateTime('now');
        if($s == 'leve'){
            $s = 'L';
        } else if($s == 'grave'){
            $s = 'G';
        }else {
            $s = 'MG';
        }
        $cadena = "\n" . $cod[0]+1 .',' . $a  . ',' .$hoy->format("Y-m-d"). ','.$s. ','.$sc . ',' . $e  ;
        fwrite($fichero_lec , $cadena);
        header("Location:index.php");
    }
    
?>