<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Variables de ejemplo
$edad = 20;
$nombre = "Juan";

// Instrucción if
echo "Instrucción if<br>";
if ($edad >= 18) {
    echo "Eres mayor de edad.<br>";
}

echo "<br>";

// Instrucción if-else
echo "Instrucción if-else<br>";
if ($edad < 18) {
    echo "Eres menor de edad.<br>";
} else {
    echo "Eres mayor de edad.<br>";
}

echo "<br>";

// Instrucción elseif
echo "Instrucción elseif<br>";
if ($edad < 13) {
    echo "Eres un niño.<br>";
} elseif ($edad >= 13 && $edad < 18) {
    echo "Eres un adolescente.<br>";
} else {
    echo "Eres un adulto.<br>";
}

echo "<br>";

// Otro ejemplo combinando nombre y edad
echo "Combinando nombre y edad<br>";
if ($nombre == "Juan" && $edad >= 18) {
    echo "Hola Juan, eres mayor de edad.<br>";
} elseif ($nombre == "Juan" && $edad < 18) {
    echo "Hola Juan, eres menor de edad.<br>";
} else {
    echo "No te llamas Juan.<br>";
}
?>

</body>
</html>