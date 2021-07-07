<?php




function lorem (){

    return 'este es un texto de prueba retornado de la funcion lorem';
}


function promedio($n1,$n2){

return($n1 + $n2)/2;

}

echo promedio(10,20);

?>

<!DOCTYPE html>

<html lang ="es">

<head>
<meta charset="utf-8">
</head>

<body>
    <section>
    <?php echo lorem ()  ?>
    <?php echo lorem ()  ?>
    <?php echo lorem ()  ?>
    </section>

    <footer>
<h1> todos los derechos reservados <?php echo date ('Y')  ?> </h1>

</footer>
</body>


</html>