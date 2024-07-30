<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones para manipular cadenas</title>
</head>
<body>
    <h1>Funciones para manipular cadenas</h1>
    <?php
        // subtr
        $cadena = "Hola Mundo";
        $subcadena = substr($cadena, 0, 4); // Extrae "Hola"
        echo $subcadena;

        // ord
        $caracter = 'A';
        $valor_ascii = ord($caracter); // Devuelve 65
        echo $valor_ascii;

        // printf
        $nombre = "Juan";
        $edad = 30;
        printf("Nombre: %s, Edad: %d", $nombre, $edad);
        // Imprime "Nombre: Juan, Edad: 30"

        // sprintf
        $nombre = "Ana";
        $edad = 25;
        $mensaje = sprintf("Nombre: %s, Edad: %d", $nombre, $edad);
        echo $mensaje;
        // Imprime "Nombre: Ana, Edad: 25"
       
        // strtolower
        $cadena = "HELLO WORLD";
        $minusculas = strtolower($cadena); // Convierte a "hello world"
        echo $minusculas;

        // strtoupper
        $cadena = "hello world";
        $mayusculas = strtoupper($cadena); // Convierte a "HELLO WORLD"
        echo $mayusculas;

        // ereg
        // Ejemplo obsoleto
        $cadena = "abc123";
        if (ereg("([0-9]+)", $cadena, $matches)) {
            echo "Número encontrado: " . $matches[1];
        } else {
         echo "No se encontró ningún número.";
        }
        // eregi
        // Ejemplo obsoleto
        $cadena = "abc123";
        if (eregi("([0-9]+)", $cadena, $matches)) {
         echo "Número encontrado: " . $matches[1];
        } else {
            echo "No se encontró ningún número.";
        }
    ?>


</body>
</html>