<?php

session_start();

if (!isset($_SESSION['aut'])){
    if(!empty($_POST['nam']) && !empty($_POST['pass'])){
        if ($_POST['pass'] == 'diego' && $_POST['nam'] == 'diego'){
            $_SESSION['aut'] = true;
            $_SESSION['user'] = 'diego';
            header("Location: informacion.php");
        } else {
            header("Location: index.php");
        }
    }else {
        header("Location: index.php");
    }
} else {
    header("Location: index.php");
}
?>

