<?php
$inter = array();
$cadena_error = '<p style="color : red; font-size : 10px"> Este campo es obligatorio </p>';
//VALIDACION INPUTTEXT
    if (empty($_POST['inputText'])) {
        $inter['inputText'] = false;
    } else {
        $inputText = $_POST['inputText'];
        $inter['inputText'] = true;

    }
//VALIDACION RADIO
    if (empty($_POST['inputRadio'])) {
        $inter['inputRadio'] = false;
    } else {
        $inputRadio = $_POST['inputRadio'];
        $inter['inputRadio'] = true;

    }
//VALIDACION CHECKINPUT
    if (empty($_POST['inputCheck'])) {
        $inter['inputCheck'] = false;
    } else {
        $inputCheck = $_POST['inputCheck'];
        $inter['inputCheck'] = true;
    }
//VALIDACION FILEINPUT
    if (empty($_FILES['inputFile'])) {
        $inter['inputFile'] = false;
    } else {
        $inputFile = $_FILES['inputFile']['name']; 
        $inter['inputFile'] = true;
    }
//VALIDACION HiddenINPUT
    if (empty($_POST['inputHidden'])) {
        $inter['inputHidden'] = false;
    } else {
        $inputHidden = $_POST['inputHidden'];
        $inter['inputHidden'] = true;
    }
//VALIDACION passInput
    if (empty($_POST['inputPass'])) {
        $inter['inputPass'] = false;
    } else {
        $inputPass = $_POST['inputPass'];
        $inter['inputPass'] = true;
    }
//VALIDACION COLORES
    if (empty($_POST['colores'])) {
        $inter['colores'] = false;
    } else {
        $colores = $_POST['colores'];
        $inter['colores'] = true;
    }
//VALIDACION IDIOMAS
    if (empty($_POST['idiomas'])) {
        $inter['idiomas'] = false;
    } else {
        $idiomas = $_POST['idiomas'];
        $inter['idiomas'] = true;
    }
//COMPROBACION DE ERRORES
    if (in_array(false , $inter)) {
        echo '
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        ';
        if (!$inter['inputText']) {
            echo '<form action="index.php" enctype="multipart/form-data" method="post">
            <h3>ELEMENTO DE ENTRADA</h3>
            <h4>Elementos input</h4>
            <label for="inputText">Text</label></br>
            <input type="text" name="inputText"></br>' . $cadena_error . '</br>';
        }else {
            echo '<form action="index.php" enctype="multipart/form-data" method="post">
            <h3>ELEMENTO DE ENTRADA</h3>
            <h4>Elementos input</h4>
            <label for="inputText">Text</label></br>
            <input type="text" name="inputText" value="'.$inputText.'"></br>';
        };
        if (!$inter['inputRadio']) {
            echo '</br>
            <label for="inputRadio">Radio</label></br>
            Sexo :
            <input type="radio" name="inputRadio" value="Hombre">hombre
            <input type="radio" name="inputRadio" value="Mujer">mujer
            '.$cadena_error.'</br>
            </br></br>';
        } else {
            switch ($inputRadio) {
                case 'Hombre':
                    echo '</br>
                    <label for="inputRadio">Radio</label></br>
                    Sexo :
                    <input type="radio" name="inputRadio" value="Hombre" checked>hombre
                    <input type="radio" name="inputRadio" value="Mujer">mujer
                    </br></br>';
                    break;
                
                case 'Mujer':
                    echo '</br>
                    <label for="inputRadio">Radio</label></br>
                    Sexo :
                    <input type="radio" name="inputRadio" value="Hombre">hombre
                    <input type="radio" name="inputRadio" value="Mujer" checked>mujer
                    </br></br>';
                    
                    break;
            }
        }
        if (!$inter['inputCheck']){
            echo '<label for="inputCheck[]">Checkbox</label></br>
            Extras :
            <input type="checkbox" name="inputCheck" value="garaje">garaje
            <input type="checkbox" name="inputCheck" value="piscina">piscina
            <input type="checkbox" name="inputCheck" value="ascensor">ascensor
            '.$cadena_error.'</br>
        </br></br>';
        }else {
            switch ($inter['inputCheck']) {
                case 'garaje':
                    echo '<label for="inputCheck[]">Checkbox</label></br>
                    Extras :
                    <input type="checkbox" name="inputCheck" value="garaje" checked>garaje
                    <input type="checkbox" name="inputCheck" value="piscina">piscina
                    <input type="checkbox" name="inputCheck" value="ascensor">ascensor
                </br></br>';
                    break;
                case 'piscina':
                    echo '<label for="inputCheck[]">Checkbox</label></br>
                    Extras :
                    <input type="checkbox" name="inputCheck" value="garaje">garaje
                    <input type="checkbox" name="inputCheck" value="piscina" checked>piscina
                    <input type="checkbox" name="inputCheck" value="ascensor">ascensor
                </br></br>';
                    break;
                case 'ascensor':
                    echo '<label for="inputCheck[]">Checkbox</label></br>
                    Extras :
                    <input type="checkbox" name="inputCheck" value="garaje">garaje
                    <input type="checkbox" name="inputCheck" value="piscina">piscina
                    <input type="checkbox" name="inputCheck" value="ascensor" checked>ascensor
                </br></br>';
                    break;
            }
        }
        if (!$inter['inputFile']) {
            echo '<label for="inputFile">File</label></br>
            <input type="file" name="inputFile">
            '.$cadena_error.'</br>
        </br></br>';
        } else {
            echo '
            <label for="inputFile">File</label></br>
            <input type="file" name="inputFile"> 
            '.$inputFile.'</br>    
            </br></br>';
        }
        if (!$inter['inputHidden']) {
            # code...
            echo 'Error inesperado... </br>';
        }else {
            echo '<label for="inputHidden">Hidden</label></br>
            <input type="text" name="inputHidden" value="clave" hidden>
            </br></br>';
        }
        if (!$inter['inputPass']) {
            echo '<label for="inputPass">Password</label></br>
            <input type="password" name="inputPass" >
            '.$cadena_error.'</br>
        </br></br>';
        }else{
            echo '
            <label for="inputPass">Password</label></br>
            <input type="password" name="inputPass">
            </br></br>
            ';
        }
        if (!$inter['colores']) {
            echo '<h4>Elementos select</h4></br>
            <label for="colores">Select simple</label></br>
            <select name="colores">
                <option value="rojo">rojo</option>
                <option value="azul">azul</option>
                <option value="verde">verde</option>
                <option value="amarillo">amarillo</option>
            </select>
            '.$cadena_error.'</br>
        </br></br>';
        }else {
            switch ($colores) {
                case 'rojo':
                    echo '<h4>Elementos select</h4></br>
                    <label for="colores">Select simple</label></br>
                    <select name="colores">
                        <option value="rojo" selected>rojo</option>
                        <option value="azul">azul</option>
                        <option value="verde">verde</option>
                        <option value="amarillo">amarillo</option>
                    </select>
                </br></br>';
                    break;
                case 'azul':
                    echo '<h4>Elementos select</h4></br>
                    <label for="colores">Select simple</label></br>
                    <select name="colores">
                        <option value="rojo">rojo</option>
                        <option value="azul" selected>azul</option>
                        <option value="verde">verde</option>
                        <option value="amarillo">amarillo</option>
                    </select>
                </br></br>';
                    break;
                case 'verde':
                    echo '<h4>Elementos select</h4></br>
                    <label for="colores">Select simple</label></br>
                    <select name="colores">
                        <option value="rojo">rojo</option>
                        <option value="azul">azul</option>
                        <option value="verde" selected>verde</option>
                        <option value="amarillo">amarillo</option>
                    </select>
                </br></br>';
                    break;
                case 'amarillo':
                    echo '<h4>Elementos select</h4></br>
                    <label for="colores">Select simple</label></br>
                    <select name="colores">
                        <option value="rojo">rojo</option>
                        <option value="azul">azul</option>
                        <option value="verde">verde</option>
                        <option value="amarillo" selected>amarillo</option>
                    </select>
                </br></br>';
                    break;
            }
        }
        if (!$inter['idiomas']) {
            echo '<label for="idiomas[]">Select multiple</label></br>
            <select name="idiomas[]" multiple>
            <option value="aleman">Aleman</option>
            <option value="ingles">Ingles</option>
            <option value="español">Español</option>
            <option value="frances">Frances</option>
            </select>
            '.$cadena_error.'</br>
            </br></br>';
        } else {
            echo '<label for="idiomas[]">Select multiple</label></br>
            <select name="idiomas[]" multiple>
                <option value="aleman">Aleman</option>
                <option value="ingles">Ingles</option>
                <option value="español">Español</option>
                <option value="frances">Frances</option>
            </select>
        </br></br>';
        }
        echo 
        '<h4>Elemento textarea</h4>
        <label for="inputTextArea">Textarea</label></br>
        <textarea name="inputTextArea" cols="30" rows="10" placeholder="Texto en area">
        </textarea>
        </br></br>
        <button type="submit">Enviar</button>
        </form>
        </body>
        </html>';
    } else {
        echo 'Formulario enviado correctamente </br>
            Los datos enviados son : </br>'. $inputText  .'</br>', 
            $inputCheck .'</br>', 
            $inputFile .'</br>', 
            $inputPass .'</br>', 
            $inputRadio .'</br>',
            $colores .'</br>';
            foreach ($idiomas as $key) {
                echo $key.'</br>';
            }

    }
?>