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
    $link ="https://www.google.com.ar/"; 
    $destinatario = "santolarimatias@gmail.com ";
    $asunto = "Prueba";
    $cuerpo = 'Mira la página que eh encontrado!';
    mail($destinatario,$asunto,$cuerpo,$link)
?>
</body>
</html>

