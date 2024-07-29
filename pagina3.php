<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Definición de constantes
define("NOMBRE_SITIO", "Mi Sitio Web");
define("VERSION", "1.0.0");
define("PI", 3.14159265359);

// Uso de constantes
echo "Bienvenido a " . NOMBRE_SITIO . "<br>";
echo "Versión: " . VERSION . "<br>";
echo "El valor de PI es: " . PI . "<br>";

// Constantes con arrays (desde PHP 7.0)
define("FRUTAS", [
    "manzana",
    "naranja",
    "banana"
]);

// Uso de constantes de arrays
echo "Una de mis frutas favoritas es: " . FRUTAS[2] . "<br>";

// Constantes mágicas
echo "Este archivo se encuentra en: " . __FILE__ . "<br>";
echo "Esta línea es la número: " . __LINE__ . "<br>";
?>

</body>
</html>