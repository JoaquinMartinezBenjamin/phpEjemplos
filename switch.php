<?php


$eleccion = 'Helado';
switch ($eleccion){

    case 'Helado':
          echo ' el valor del helado es de $ 1000 ';
    break;

    case 'Pizza':
        echo ' el valor del pizza es de $ 5000 ';
  break;

  case 'Torta':
    echo ' el valor de torta es de $ 10000 ';
break;

default:
echo 'opción no valida ';
break;


}


?>

<!DOCTYPE html>

<html lang ="es">

<head>
<meta charset="utf-8">
</head>

<body>

<h1> Ingrese una opción</h1>
<h2>Pizza</h2>
<h2>Helado</h2>
<h2>Torta</h2>

<?php

?>
</body>

</html>