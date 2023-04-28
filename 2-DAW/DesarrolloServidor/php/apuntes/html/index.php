<?php
    echo "<b>Formulario simple. Resultado del formulario";
    echo "<br><br>";
    echo "Estos son los datos introducidos";
    echo "<ul>";
    echo "<li>texto de busqueda: " . $_POST["texto"]. "</li>";
    echo "<li>BUscar en: " . $_POST["buscar"]. "</li>";
    echo "<li> Genero: " . $_POST["genero"]. "</li>";
    echo "</ul>";
    echo "<br>";
    echo "<a href='formularioSimple.html'>nueva busqueda</a>";
?>