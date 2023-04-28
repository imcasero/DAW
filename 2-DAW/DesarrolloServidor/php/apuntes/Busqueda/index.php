<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<?php
    $matriz = array(1.2 , 4, 3.5 ,6.7);
    $matriz_fl = preg_grep("/^(\d+)?\.\d+$/", $matriz);
    print_r($matriz_fl);
    echo '<br>';

    $matriz2 = array('casa' , 'cosa');
    $matriz_2 = preg_grep('/c[ao]sa/' , $matriz2);
    print_r($matriz_2);
    echo '<br>';

    $matriz3 = array('coche' , 'coches' , 'cochen' , 'cosa' , 'cochino' , 'contraccion' , 'abedul' , 'cancion');
    $matriz_3 = preg_grep('/coches?/' , $matriz3);
    print_r($matriz_3);
    echo '<br>';

    $matriz_4 = preg_grep('/^co/', $matriz3);
    print_r($matriz_4);
    echo '<br>';

    $matriz5 = array('alemania' , 'alemanes' , 'alemines', 'aletargado' , 'alakazan');
    $matriz_5=preg_grep( '/ale(ma|mi)n(ia|es)/',$matriz5);
    print_r($matriz_5);
    echo '<br>';

    $matriz6 = array('abc' , 'abcabcabcabcabcabc', 'abcjpabc');
    print_r($matriz_6=preg_grep('/(abc)+/' , $matriz6));
    echo '<br>';

    $matriz7 = array('co.pete' , 'jo*da' , 'diego' , 'cajon' , 'patron' , '1as' , '1' , 'Att' , 'Tapon@1');
    print_r(preg_grep($matriz_7='/^[a-z0-9_-]{3,16}$/', $matriz7));//no pilla mayusculas usuario
    echo '<br>';

    $matriz8 = array('co.pete' , 'jo*da' , 'diego2' , 'cajon' , 'patron' , 'diego@pass' , '1123123' , 'Att_123@' ,'123123_1');
    print_r(preg_grep($matriz_8='/^[a-z0-9_-]{6,18}$/', $matriz8));//no pilla @ contraseña
    echo '<br>';

    $matriz9 = array('co.pete' , 'jo*da' , '#ffffff' , '#000000' , '#2f' , '#ff32ab' , '#Fff333' , '#Aff_123@' ,'123123_1');
    print_r(preg_grep($matriz_9='/^#?([a-f0-9]{6}|[a-f0-9]{3})$/', $matriz9));//hexadecimal
    echo '<br>';

    $matriz10 = array('co.pete' , 'diego.@gmail.com' , '#ffffff' , '#000000' , 'alakazan@hotmail.es' , 'Diego12@gmail.es' , 'Diego' , 'aff_123@gmail.com' ,'diego@hotmail.com');
    print_r(preg_grep($matriz_10='/^[a-z0-9]{1}([a-z0-9_\.-]+)[a-z0-9]{1}@[a-z0-9]{1}([\da-z\.-]+)\.([a-z\.]{2,6})$/', $matriz10));//correo, puedes incluir mas puntos donde no deberia --solucionado
    echo '<br>';

    $matriz11 = array('co.pete' , 'jo*da' ,'(34)-6067-3532' , '34-606-73-53-26' , 'alakazan@hotmail.es' , '905789654' , '111 111 111' , 'aff_123@gmail.com' ,'diego@hotmail.com');
    print_r(preg_grep($matriz_11='/^\(?\d{2}\)?[\s\.-]?\d{4}[\s\.-]?\d{4}$/', $matriz11));//telefono (solo funcipona con este formato (00)-0000-0000)
    echo '<br>';

    //  \d = un caracter de 0-9

    $matriz12 = array('192.168.1.177' , '192.12.2-4' ,'(34)-6067-3532' , '34-606-73-53-26' , '255.0.0.0' , '256.255.255.0' , '111 111 111' , 'aff_123@gmail.com' ,'diego@hotmail.com');
    print_r(preg_grep($matriz_12='/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/', $matriz12));//telefono (solo funcipona con este formato (00)-0000-0000)
    echo '<br>';

?>
</html>