<?php
    $inter = true;

    if (empty($_POST['textBusqueda'])) {
        $cadena_error = '<p style="color : red; font-size : 10px"> El texto a buscar es obligatorio </p>';
        $inter = false;
    }

    if (!$inter) {
        echo '
        <form action="index.php" enctype="multipart/form-data" method="post">
            <label for="textBusqueda"> Texto a buscar *</label>
            <input type="text" name="textBusqueda">
                '. $cadena_error .'
                </br>
            <label for="loca">Buscar en: </label>
            <input type="radio" name="loca" value="TituloCancione">Titulos de cancioes
            <input type="radio" name="loca" value="NombreAlbum">Nombres de album
            <input type="radio" name="loca" value="Ambos"> Ambos
                </br></br>
            <label for="genero">Eliga el genero de música</label>
            <select name="genero[]">
                <option value="rock">rock</option>
                <option value="pop">pop</option>
                <option value="electronica">electronica</option>
                <option value="clasica">clasica</option>
            </select>
                </br></br>
            <button type="submit">Enviar</button>
        </form>
        ';
    }
    else {
        echo '
        <p>Formulario enviado con existo</p>
        ';
    }
?>