<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funsiones en php</title>
</head>
<body>
    <h1>Funsiones en php</h1>
    <?php
        /*Una finción es un bloque de codigo que introducimos en nuestra pagina y que puede ser utilizado a lo largo de todo nuestro codigo php. La principal ventaja de las funciones es que nos permite ahorrar codigo*/

        /*Para definir funciones se emplea la sentencia funtion. Las funciones pueden resivir tantos argumentos comosea necesario separandolos por comas*/

        echo "<h1>";
        function sura($x, $y)
        {
            $z = $x + $y;
            return $z;
        }

        $resultado = sura(5,12);
        echo "<br>"; 
        echo $resultado;
        echo "</h1>";
    ?>
</body>
</html>