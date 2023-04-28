<?php
     $file = fopen("index.txt", "a");

     fwrite($file, "==================". PHP_EOL);

     fwrite($file, $text. PHP_EOL);
     
     fwrite($file, $area. PHP_EOL);
     
     fclose($file);

     echo 'Comentario enviado';
?>