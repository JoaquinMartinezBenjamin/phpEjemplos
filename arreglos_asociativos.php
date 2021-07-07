<?php




$ciudad [0] = [


'nombre'=>'Oaxaca',
'poblacion' => 100
];


$ciudad [1] = [


    'nombre'=>'México',
    'poblacion' => 150
    ];

?>

<!DOCTYPE html>

<html lang ="es">

<head>
<meta charset="utf-8">
</head>

<body>
<h1> CIUDADES </h1>
<?php
for ($i=0; $i<= 1; $i++){
echo '<h2>Ciudad: '.$ciudad[$i]['nombre'].'</h2>';
echo '<h2>Población: '.$ciudad[$i]['poblacion'].'</h2>';

echo '<hr>';
}



foreach ($ciudad as $valor){
    echo '<h2>Ciudad: '.$valor['nombre'].'</h2>';
    echo '<h2>Población: '.$valor['poblacion'].'</h2>';
    
    echo '<hr>';
    }
    


?>
</body>

</html>