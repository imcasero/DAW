<?php
    $errors = [];
    $mensaje='
    <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>Plantilla formulario</title>
            <style>
            .error {
                color: red;
            }
            </style>
        </head>
        <body>
    <form action="form.php" method="post" enctype="multipart/form-data">
    ';
    $inter = true;
    $cad = '<p class="error"> este campo es obligatorio</p><br>';
    if (empty($_POST['text-input'])){
        $inter = false;
        $mensaje .= '
            <label for="text-input">Text Input:</label>
            <input type="text" id="text-input" name="text-input" /><br/>
            '.$cad.'
        ';
    }else {
        $var = $_POST['text-input'];
        $mensaje .= '
            <label for="text-input">Text Input:</label>
            <input type="text" id="text-input" name="text-input" value="'.$var.'"/><br/><br/>
        ';
    }
    if (empty($_POST['password-input'])){
        $inter = false;
        $mensaje .= '
            <label for="password-input">Password Input:</label>
            <input
                type="password"
                id="password-input"
                name="password-input"
            /><br />
            '.$cad.'
        ';
    }else {
        $var = $_POST['password-input'];
        $mensaje .= '
            <label for="password-input">Password Input:</label>
            <input
                type="password"
                id="password-input"
                name="password-input"
                value="'.$var.'"
            /><br /><br />
        ';
    }
    if (empty($_FILES['file-input'])){
        $inter = false;
        $mensaje .= '
            <label for="file-input">File Input:</label>
            <input type="file" id="file-input" name="file-input" /><br />
            '.$cad.'
        ';
    }else {
        $var = $_FILES['file-input'];
        $mensaje .= '
            <label for="file-input">File Input:</label>
            <input type="file" id="file-input" name="file-input""/><br /><br />
        ';
    }
    if (empty($_POST['checkbox-input'])){
        $inter = false;
        $mensaje .= '
            <label for="checkbox-input">Checkbox Input:</label>
            <input
                type="checkbox"
                id="checkbox-input"
                name="checkbox-input"
            /><br />
            '.$cad.'
        ';
    }else {
        
        $mensaje .= '
            <label for="checkbox-input">Checkbox Input:</label>
            <input
                type="checkbox"
                id="checkbox-input"
                name="checkbox-input"
                checked
            /><br /><br />
        ';
    }
    if (empty($_POST['radio-input'])){
        $inter = false;
        $mensaje .= '
            <label for="radio-input">Radio Input:</label>
            <input type="radio" id="radio-input" name="radio-input" value="1" />
            <input
                type="radio"
                name="radio-input"
                id="radio-input"
                value="2"
            /><br />
            '.$cad.'
        ';
    }else {
        $var = $_POST['radio-input'];
        switch ($var) {
            case '1':
                $mensaje .='
                    <label for="radio-input">Radio Input:</label>
                    <input type="radio" id="radio-input" name="radio-input" value="1" checked/>
                    <input
                        type="radio"
                        name="radio-input"
                        id="radio-input"
                        value="2"
                    /><br /><br />
                ';
                break;
            
            case '2':
                $mensaje .='
                    <label for="radio-input">Radio Input:</label>
                    <input type="radio" id="radio-input" name="radio-input" value="1" />
                    <input
                        type="radio"
                        name="radio-input"
                        id="radio-input"
                        value="2"
                        checked
                    /><br /><br />
                ';
                break;
        }
    }
    if (empty($_POST['date-input'])){
        $inter = false;
        $mensaje .= '
            <label for="date-input">Date Input:</label>
            <input type="date" id="date-input" name="date-input" /><br />
            '.$cad.'
        ';
    }else {
         $var = $_POST['date-input'];
         $mensaje .= '
            <label for="date-input">Date Input:</label>
            <input type="date" id="date-input" name="date-input" value="'.$var.'"/><br /><br />
         ';
    }
    if (empty($_POST['textarea'])){
        $inter = false;
        $mensaje .= '
            <label for="textarea">Textarea:</label>
            <textarea id="textarea" name="textarea"></textarea><br />
            '.$cad.'
        ';
    }else {
         $var = $_POST['textarea'];
         $mensaje .= '
            <label for="textarea">Textarea:</label>
            <textarea id="textarea" name="textarea" value="'.$var.'"></textarea><br /><br />';
    }
    

    if($inter){
        echo 'Todos los datos son correctos';
    } else {
        $mensaje .= '
        <input type="submit" value="Submit" name="submit" />
        </form>
        </body>
        </html>';
        echo $mensaje;
    }
?>