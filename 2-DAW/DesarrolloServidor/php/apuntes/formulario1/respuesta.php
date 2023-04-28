<?php
    
    echo 'nombre: '.$_POST['nombre'].'<br>';
    echo 'sexo: '.$_POST['sexo'].'<br>';

    if(!empty($_POST['idiomas'])){
        $idiomas = $_POST['idiomas'];
        foreach ($idiomas as $idioma) {
            echo $idioma . "</br>";
        }
    } 
    if (isset($_POST['idiomas'])){
        echo 'Se ha seleccionado idioma';
    }

    if(!empty($_POST['extras'])){
        print_r($_POST['extras']);
    }
    echo '<br>';
    print_r($_FILES['imagen']);
?>