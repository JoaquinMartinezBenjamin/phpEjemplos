<?php



$nombre = 'Ignacio';
$animales = ['perro','gato','elefante'];

?>

<!DOCTYPE html>

<html lang ="es">

<head>
<meta charset="utf-8">
</head>

<body>

<h1>hola  <?php echo $nombre ?> </h1>

<h1> mi animal favorito es  <?php echo $animales[1] ?> </h1>

<?php

$i=0;

while ($i <= 2){

    echo '<h2>mi animal favorito es '.$animales[$i]. '</h2></br>';
    $i++;
}
?>
</body>

</html>