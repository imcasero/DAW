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
    $pais = array(
        'España' => array(
            'Provincias'=>array(
                'Albacete' => array(
                    'Nombre' => 'Albacete',
                    'Extension' => '12',
                    'Habitantes' => '12',

                ),
                'Alicante' => array(
                    'Nombre' => 'Alicante',
                    'Extension' => '13',
                    'Habitantes' => '13',
                ),
                'Almería' => array(
                    'Nombre' => 'Almería',
                    'Extension' => '14',
                    'Habitantes' => '14',
                ),
                'Álava' => array(
                    'Nombre' => 'Álava',
                    'Extension' => '15',
                    'Habitantes' => '15',
                ),
                'Asturias' => array(
                    'Nombre' => 'Asturias',
                    'Extension' => '16',
                    'Habitantes' => '16',
                ),
                'Ávila' => array(
                    'Nombre' => 'Ávila',
                    'Extension' => '17',
                    'Habitantes' => '17',
                ),
                'Badajoz' => array(
                    'Nombre' => 'Badajoz',
                    'Extension' => '18',
                    'Habitantes' => '18',
                ),
                'Balears' => array(
                    'Nombre' => 'Balears',
                    'Extension' => '19',
                    'Habitantes' => '19',
                ),
                'Barcelona' => array(
                    'Nombre' => 'Barcelona',
                    'Extension' => '20',
                    'Habitantes' => '20',
                ),
                'Bizkaia' => array(
                    'Nombre' => 'Bizkaia',
                    'Extension' => '21',
                    'Habitantes' => '21',
                ),
                'Burgos' => array(
                    'Nombre' => 'Burgos',
                    'Extension' => '22',
                    'Habitantes' => '22',
                ),
            )
        ),
        'Francia' => array(
            'Provincias' =>array(
                'Isla de Francia' => array(
                    'Nombre' => 'Isla de Francia',
                    'Extension' => '23',
                    'Habitantes' => '23',
                ),
                'Berry' => array(
                    'Nombre' => 'Berry',
                    'Extension' => '24',
                    'Habitantes' => '24',
                ),
                'Orleanesado' => array(
                    'Nombre' => 'Orleanesado',
                    'Extension' => '25',
                    'Habitantes' => '25',
                ),
                'Normandía' => array(
                    'Nombre' => 'Normandía',
                    'Extension' => '26',
                    'Habitantes' => '226',
                ),
                'Languedoc' => array(
                    'Nombre' => 'Languedoc',
                    'Extension' => '27',
                    'Habitantes' => '27',
                ),
                'Lyonnais' => array(
                    'Nombre' => 'Lyonnais',
                    'Extension' => '28',
                    'Habitantes' => '28',
                ),
                'Delfinado' => array(
                    'Nombre' => 'Delfinado',
                    'Extension' => '29',
                    'Habitantes' => '29',
                ),
                'Champaña' => array(
                    'Nombre' => 'Champaña',
                    'Extension' => '30',
                    'Habitantes' => '30',
                ),
                'Aunis' => array(
                    'Nombre' => 'Aunis',
                    'Extension' => '31',
                    'Habitantes' => '32',
                ),
                'Saintonge 	Saintonge' => array(
                    'Nombre' => 'Saintonge 	Saintonge',
                    'Extension' => '33',
                    'Habitantes' => '33',
                ),
            )
        ),
        'Alemania' =>array(
            'Provincias' =>array(
                'Baviera' => array(
                    'Nombre' => 'Baviera',
                    'Extension' => '1',
                    'Habitantes' => '1',
                ),
                'Baja Sajonia' => array(
                    'Nombre' => 'Baja Sajonia',
                    'Extension' => '2',
                    'Habitantes' => '2',
                ),
                'Baden-Wurtemberg' => array(
                    'Nombre' => 'Baden-Wurtemberg',
                    'Extension' => '3',
                    'Habitantes' => '3',
                ),
                'Renania del Norte-Westfalia' => array(
                    'Nombre' => 'Renania del Norte-Westfalia',
                    'Extension' => '4',
                    'Habitantes' => '4',
                ),
                'Brandeburgo' => array(
                    'Nombre' => 'Brandeburgo',
                    'Extension' => '5',
                    'Habitantes' => '5',
                ),
                'Mecklemburgo-Pomerania Occidental' => array(
                    'Nombre' => 'Mecklemburgo-Pomerania Occidental',
                    'Extension' => '6',
                    'Habitantes' => '6',
                ),
                'Hesse' => array(
                    'Nombre' => 'Hesse',
                    'Extension' => '7',
                    'Habitantes' => '7',
                ),
                'Sajonia-Anhalt' => array(
                    'Nombre' => 'Sajonia-Anhalt',
                    'Extension' => '8',
                    'Habitantes' => '8',
                ),
            )
        )
    );


    
        foreach ($pais as $nombrePais => $arrayPais) {
            
            echo '<h1>' . $nombrePais . '</h1> ';

            foreach ($arrayPais as $nombreProvincia => $arrayProvincia) {
                echo '<table border=1>';
                echo '<tr>';
                //echo '<th>' . $nombreProvincia . '<th>'; esto sobra
                foreach ($arrayProvincia as $key => $value) {
                    //echo '<td>' . $key . '</td>';
                    foreach ($value as $key => $value) {
                        # code...
                        echo '<td>' . $value . '</td>';
                    }
                    echo '</tr>';
                }
                
                echo '</table>';
            }
        }
    


?>
</html>