<?php
     $num = [12 ,19 , 11 , 14];

     if (in_array(10 , $num)) {
         echo 'elemento encontrado';
     } else {
         header("Refresh: 5 ;url= index.txt");
         header('Content-type: image/png');
         header('Content-Disposition: attachment; filename="dowland.png"');//en vez de attachment , inline te muestra el fichero
         readfile('indice.png');
    }
    // $a = array(12 , 28);

    // if(in_array(10 , $a)){
    //     echo 'encontrado';
    // } else {
    //     header("Refresh: 5;url=error_busqueda.php");
    // }
?>