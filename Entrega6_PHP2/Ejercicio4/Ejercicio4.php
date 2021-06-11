<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 4</title>
</head>
<body>
<?php
if (!isset($_SESSION["contador"])){
 $_SESSION["contador"] = 1;
}else{
 $_SESSION["contador"]++;
} ?>
    <h1>HOME</h1>
    <h4>CUENTA PAGINAS</h4>
    
    <a href= "pagina1.php">Pagina 1</a>
    <a href= "pagina2.php">Pagina 2</a>
    
    <a href= "cant_visitas.php">Cantidad de paginas vistadas</a>
    <a href="reiniciar.php">Reiniciar contador</a>
</body>
</html>