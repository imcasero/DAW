<?php
    $pass = 'hola';
    $hash = password_hash($pass ,PASSWORD_BCRYPT);

    if(password_verify('hola' , $hash)){
        echo 'correcto';
    } else {
        echo 'incorrecto';
    }
        


?>