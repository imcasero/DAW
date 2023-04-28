<?php
    $cad = '<p class="error"> este campo es obligatorio</p><br>';
    $inter = true;
    $resul = '
        <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <title>Insertar noticias</title>
                <style>
                * {
                    font-family: Helvetica, sans-serif;
                }
                .contenedor {
                    background-color: #dddddd;
                    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
                    width: 60%;
                    border-radius: 5px;
                    margin: auto;
                    margin-top: 50px;
                    text-align: left;
                }

                form {
                    padding: 20px;
                    background-color: #f2f2f2;
                }
                p {
                    font-size: 11px;
                }
                label,
                input[type="text"],
                textarea,
                select {
                    display: block;
                    margin-bottom: 10px;
                }

                input[type="text"],
                textarea {
                    padding: 5px;
                    width: 100%;
                }

                select {
                    width: 100%;
                    padding: 5px;
                }

                button[type="submit"] {
                    transition: 0.5s;
                    background-color: #4caf50;
                    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
                    border-radius: 20px;
                    color: white;
                    padding: 12px 20px;
                    border: none;
                    cursor: pointer;
                }
                button[type="submit"]:hover {
                    transition: 0.5s;
                    background-color: white;
                    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
                    border-radius: 20px;
                    color: #4caf50;
                    padding: 12px 20px;
                    border: none;
                    cursor: pointer;
                }
                </style>
            </head>
            <body>
                <div class="contenedor">
                <form action="insercion.php" method="post">
                    <h1>Inserte noticia</h1>
                    <p>Los campos con * son obligatorios</p>
    ';
    if (!empty($_POST['titulo'])){
        $tit = $_POST['titulo'];
        $resul .= '
        <label for="titulo">Titulo *: </label>
        <input type="text" name="titulo" value="'.$tit.'"/> <br />
        ';
    }else {
        $inter = false;
        $resul.= '
        <label for="titulo">Titulo *: </label>
        <input type="text" name="titulo" /> <br />
        '.$cad.'
        ';
    }
    if (!empty($_POST['descrip'])){
        $descrip = $_POST['descrip'];
        $resul .= '
        <label for="descrip">Descripcion *: </label>
        <textarea name="descrip" cols="30" rows="10"></textarea><br/>
        ';
    }else {
        $inter = false;
        $resul.= '
        <label for="descrip">Descripcion *: </label>
        <textarea name="descript" cols="30" rows="10"></textarea><br />
        '.$cad.'
        ';
    }

    if(!$inter){
        $resul .= '
                <label for="cat">Categoria :</label>
                <select name="cat">
                <option value="ofertas">ofertas</option>
                <option value="costas">costas</option>
                <option value="promociones">promociones</option></select
                ><br />
                <label for="imagen">Imagen</label>
                <input type="file" name="imagen" /><br /><br />
                <button type="submit">Insertar</button>
                    </form>
                    </div>
                </body>
                </html>';
        echo $resul;
    }else {
        $con = new mysqli("localhost","diego_inm","1234");
        if (mysqli_connect_errno()) {
            printf("Falló la conexión: %s\n", mysqli_connect_error());
            exit();
        }
        $con->select_db("inmobiliaria");
        $date = new DateTime('now');
        $hoy = $date->format('Y-m-d');
        
        if(empty($_FILES['imagen'])){
            $img = 'NULL';
        }else {
            $img = $_FILES['imagen']['name'];
        }
        $cat = $_POST['cat'];
        $query = "INSERT INTO noticias(TITULO , TEXTO , CATEGORIA , FECHA , IMAGEN) 
        VALUES( '$tit' , '$descrip' , '$cat' , '$hoy' , '$img')";
        mysqli_query($con, $query);
        $resul = '
            <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8" />
                    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                    <title>Inicio</title>
                    <style>
                        body {
                            background-color: #f2f2f2;
                        }
                        .contenedor {
                            width: 60%;
                            background-color: #dddddd;
                            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
                            width: 60%;
                            padding : 20px;
                            border-radius: 5px;
                            margin: auto;
                            margin-top: 50px;
                            text-align: left;
                        }
                        h1 {
                            color: #4caf50;
                        }
                        li {
                            list-style: none;
                            margin-bottom: 10px;
                        }
                        a {
                            transition: 0.5s;
                            color: #4caf50;
                            text-decoration: none;
                        }
                        a:hover {
                            transition: 0.5s;
                            background-color: #4caf50;
                            color: #fff;
                            padding: 10px;
                            border-radius: 5px;
                        }
}
                    </style>
                </head>
                <body>
                    <div class="contenedor">
                        <h1>Resultado de inserccion:</h1>
                        <ul>
                        <li>Titulo : '.$tit.'</li>
                        <li>Texto: '.$descrip.'</li>
                        <li>Categoria : '.$cat.'</li>
                        <li>Imagen : '.$img.'</li>
                        </ul>
                        <a href="./insertar_noticia.html">Insertar otra noticia</a>
                    </div>
                </body>
            </html>

        ';
        echo $resul;
    }

?>