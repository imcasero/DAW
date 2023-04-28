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
    $nombre = 'Maria';
    echo $nombre[2];
    echo '<br>';
    $cad = 'a';
    echo strstr($nombre , $cad );//estandar
    echo '<br>';
    echo stristr($nombre , $cad );//insensible a mayus

    echo '<br>';
    echo strrchr($nombre , $cad );//caracteres

    echo '<br>';
    echo strpos($nombre , $cad );//posicion de caracter

    echo '<br>';
    echo strrpos($nombre , $cad );//reversa
    
    $validos = '123456';
    $cadena1 = '654321';

    $var1 = 'hello';
    $var2 = 'Hell';

    $cad1 = 'paca';
    $cad2 = 'paco';
    // subject no inicia con ningún caracter de mask
    echo '<br>';
    echo strspn($cadena1, $validos);
    
    echo '<br>';
    echo strcspn($cadena1, $validos); // validos ahora es no validos

    echo '<br>';
    echo '<br>';
    echo strcmp($var2, $var1); //longitud tambien no tiene sentido el valor
    echo '   ';
    echo strcmp($cadena1, $validos); //longitud tambien no tiene sentido el numero

    echo '<br>';
    echo strncmp($cad1, $cad2 , 4); //longitud tambien no tiene sentido el valor

    echo '<br>';
    echo strnatcmp($cad2, $cad1); //longitud tambien no tiene sentido el valor

    echo '<br>';
    echo strlen($cad1);
    echo '<br>';
    echo '<br>';
    
    $rest = substr("abcdef", -1);    // devuelve "f"
    echo $rest;
    echo '<br>';
    $rest = substr("abcdef", -2);    // devuelve "ef"
    echo $rest;
    echo '<br>';
    $rest = substr("abcdef", -3, 1); // devuelve "d"
    echo $rest;
    echo '<br>';


    $var = 'ABCDEFGH:/MNRPQR/';
    echo "Original: $var<hr />\n";

    /* These two examples replace all of $var with 'bob'. */
    echo substr_replace($var, 'bob', 0) . "<br />\n";
    echo substr_replace($var, 'bob', 0, strlen($var)) . "<br />\n";

    /* Insert 'bob' right at the beginning of $var. */
    echo substr_replace($var, 'bob', 0, 0) . "<br />\n";

    /* These next two replace 'MNRPQR' in $var with 'bob'. */
    echo substr_replace($var, 'bob', 10, -1) . "<br />\n";
    echo substr_replace($var, 'bob', -7, -1) . "<br />\n";

    /* Delete 'MNRPQR' from $var. */
    echo substr_replace($var, '', 10, -1) . "<br />\n";

    echo '<br>';
    echo substr_replace($var ,' bob' ,  '0' , 0 );

    //De esta forma, strtr() hace una conversión byte a byte
    //Por lo tanto, aquí se asume una codificación de un solo byte:
    $addr = 'äåö';
    $addr = strtr($addr, "äåö", "aao"); //repasar
    echo '<br>';
    echo $addr;
    echo '<br>';


    $text = 'This is a test';
    echo strlen($text); // 14
    echo '<br>';

    echo substr_count($text, 'is'); // 2
    echo '<br>';

    // the string is reduced to 's is a test', so it prints 1
    echo substr_count($text, 'is', 3);
    echo '<br>';

    // the text is reduced to 's i', so it prints 0
    echo substr_count($text, 'is', 3, 3);
    echo '<br>';

    // generates a WARING because 5+10 > 14
    //echo substr_count($text, 'is', 5, 10);
    //echo '<br>';


    // prints only 1, because it doesn't count overlapped substrings
    $text2 = 'gcdgcdgcd';
    echo substr_count($text2, 'gcdgcd');
    echo '<br>';


    $data = "Two Ts and one F.";

    foreach (count_chars($data, 1) as $i => $val) {
        echo "There were $val instance(s) of \"" , chr($i) , "\" in the string. <br>";
    }

    $cadena1 = ' Hola que tal ';
    $cadena2 = 'Continuamos ';
    $cadena3 = ' bueno';

    echo $cadena1.$cadena2;
    echo '<br>';
    $result =$cadena3.trim($cadena1).$cadena2; //quita espacios str_pad lo opuesto
    echo $result;
    echo '<br>';
    $result = str_pad($cadena1 , 200 , "-" );
    echo $result;
    echo '<br>';
    $result = str_pad($cadena1 , 200 , "-" , STR_PAD_LEFT);
    echo $result;
    echo '<br>';
    $str = "<img src='logo.gif'></img>";
    echo '<br>';

    // Outputs: Is your name O\'Reilly?
    echo $str;
    echo '<br>';

    
    echo addslashes($str);
    echo '<br>';

    $str = "Is your name O\'reilly?";

    // Salida: Is your name O'reilly?
    echo stripslashes($str);
    echo '<br>';

    

    echo nl2br("foo no es\n bar");
    echo '<br>';
    echo '&amp;';
    echo '<br>';
    

    $orig = "I'll \"walk\" the <b>dog</b> now";

    $a = htmlentities($orig);

    $b = html_entity_decode($a);

    echo $a; // I'll &quot;walk&quot; the &lt;b&gt;dog&lt;/b&gt; now

    echo '<br>';

    echo $b; // I'll "walk" the <b>dog</b> now

    $string = "This is\tan example\nstring";
    /* Utiliza tabulador y nueva línea como caracteres de tokenización, así  */

    $tok = strtok($string, " \n\t"); //IMPORTANTE

    while ($tok !== false) {
        echo "Word=$tok<br />";
        $tok = strtok(" \n\t");
    }

    echo chunk_split("hola que tal",3,'-');
    echo '<br>';

    $str = "Hello Friend";

    $arr1 = str_split($str); //IMPORTANTE
    $arr2 = str_split($str, 3);


    echo '<br>';
    print_r($arr1);
    echo '<br>';
    print_r($arr2);
    echo '<br>';


    

    $dir_correo="prueba@yahoo.com.ar";
    $parte_array=explode("@",$dir_correo);
    echo $parte_array[0]; // prueba
    echo '<br>';
    echo $parte_array[1]; // yahoo.com.ar

    $matriz=array(7,'julio',2011);
    echo implode(' de ',$matriz);
    $unidos=implode("@",$matriz);//7 de julio de 2011
?>
</html>