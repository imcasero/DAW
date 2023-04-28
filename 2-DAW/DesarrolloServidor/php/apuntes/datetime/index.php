<?php
//BASICO
    $hoy = new DateTime('now');
    echo  $hoy->format("Y-m-d H:i:s") .'<br>';
    $ayer = new DateTime('yesterday');
    echo  $ayer->format("Y-m-d H:i:s").'<br>';
    $maniana = new DateTime('tomorrow');
    echo  $maniana->format("Y-m-d H:i:s").'<br>';

//ZONA HORARIA
    date_default_timezone_set('Europe/Madrid');
    $nuevaFecha = new DateTime(); //Se genera objeto con la fecha actual
    echo $nuevaFecha->format("Y-m-d H:i:s"); // formato aceptado por date()
    echo '<br>';
    date_default_timezone_set('Europe/London'); //puede fallar si contradice php.ini no es recomendable
    $nuevaFecha = new DateTime();
    echo $nuevaFecha->format("Y-m-d H:i:s");
    echo '<br>';
    if (date_default_timezone_get())
        echo 'date_default_timezone_set: ' . date_default_timezone_get() . '<br />';
    if (ini_get('date.tmezone'))
        echo 'date.timezone: ' . ini_get('date.timezone');
//FORMA CORRECTA
    // obtener y mostrar la hora actual en Europe/London
    $zona = new DateTimeZone('Europe/London'); //solo para esta variable
    $fecha = new DateTime('now', $zona); //NULL no funciona aqui no se porque
    echo '<br>' . $fecha->format('H:i:s');

//INTERVALOS
    $intervalo = new DateInterval('P2Y3M1DT2H');
    $fecha = new DateTime();
    $fecha->add(new DateInterval('P2Y3M1DT2H'));
    echo '<br>' . $fecha->format("Y-m-d H:i:s");

    $fecha1 = new DateTime('2022-01-01 10:30:00');
    $fecha2 = new DateTime('2023-05-03 15:30:00');
    $intervalo = $fecha1->diff($fecha2); //la fecha pequeña al principio
    echo '<br>';
    echo $intervalo->format('%R%a días'); //Imprime 122 días , con la R da el valor + o -
    echo '<br>';
    echo $intervalo->format('%R%Y año'); 
    echo '<br>';
    echo $intervalo->format('%R%y año'); 
    echo '<br>';
    echo $intervalo->format('%h : %i : %s  horas , minutos , segundos'); 
    echo '<br>';
    

    $formato = 'Y-m-d';
    $fecha = DateTime::createFromFormat($formato , '2009-02-12');
    echo 'Formato: ' . $formato . $fecha->format('Y-m-d H:i:s') . "\n";
?>