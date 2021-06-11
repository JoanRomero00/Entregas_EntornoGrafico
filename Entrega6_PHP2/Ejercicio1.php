<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 1</title>
</head>
<body>
<?php
$destinatario = "ej1@gmail.com ";
$asunto = "EJERCICIO 1";
$cuerpo = "Esto es una prueba de envío de
correo a través del servidor";
mail($destinatario,$asunto,$cuerpo)
?>
</body>
</html>