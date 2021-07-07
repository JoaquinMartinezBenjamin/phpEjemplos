<?php




$animales = ['perro','gato','elefante'];

?>

<!DOCTYPE html>

<html lang ="es">

<head>
<meta charset="utf-8">
</head>

<body>

<?php


for ($i=0; $i<= 2; $i++){

    echo '<h2>mi animal favorito es '.$animales[$i]. '</h2></br>';
    
}

foreach ($animales as $valor){
    echo '<h2>mi animal favorito es '.$valor. '</h2></br>';

}
?>
</body>

</html>