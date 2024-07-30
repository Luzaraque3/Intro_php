<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intrucciones condicionales en php</title>
</head>
<body>
    <h1>Intrucciones condicionales en PHP</h1>
    <?php
        // esto es un strip de php

        // asignamos a la variable el color rojo
        $color = "rojo";

        // Preguntamos si la variable color es igual a rojo. Si son iguales se ejecuta la siguiente parte del codigo
        if($color = "rojo")
        {
            // como se cumple la condicion mostrará este mensaje en pantalla
            print("Efectivamente el color es rojo");
        }
    ?>
</body>
</html>