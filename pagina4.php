<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Operadores de comparación
$a = 5;
$b = 10;

echo "Operadores de Comparación<br>";
echo "a = $a, b = $b<br>";
echo "a == b: " . var_export($a == $b, true) . "<br>"; // false
echo "a != b: " . var_export($a != $b, true) . "<br>"; // true
echo "a < b: " . var_export($a < $b, true) . "<br>";   // true
echo "a > b: " . var_export($a > $b, true) . "<br>";   // false
echo "a <= b: " . var_export($a <= $b, true) . "<br>"; // true
echo "a >= b: " . var_export($a >= $b, true) . "<br>"; // false
echo "a === b: " . var_export($a === $b, true) . "<br>"; // false
echo "a !== b: " . var_export($a !== $b, true) . "<br>"; // true

echo "<br>";

// Operadores lógicos
$verdadero = true;
$falso = false;

echo "Operadores Lógicos<br>";
echo "verdadero AND falso: " . var_export($verdadero && $falso, true) . "<br>"; // false
echo "verdadero OR falso: " . var_export($verdadero || $falso, true) . "<br>";  // true
echo "NOT verdadero: " . var_export(!$verdadero, true) . "<br>";                // false
echo "verdadero XOR falso: " . var_export($verdadero xor $falso, true) . "<br>";// true

echo "<br>";

// Unión de cadenas
$cadena1 = "Hola";
$cadena2 = "Mundo";

echo "Unión de Cadenas<br>";
echo "cadena1: " . $cadena1 . "<br>";
echo "cadena2: " . $cadena2 . "<br>";
$union = $cadena1 . " " . $cadena2;
echo "Unión: " . $union . "<br>";
?>

</body>
</html>