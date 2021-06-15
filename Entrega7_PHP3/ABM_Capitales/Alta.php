<html>
<head>
<title>Alta Ciudad</title>
</head>
<body>
<?php
include("conexion.php");
//Captura datos desde el Form anterior
$vCiudad = $_POST['Ciudad'];
$vPais = $_POST['Pais'];
$vHab = $_POST['Habitantes'];
$vSup = $_POST['Superficie'];
$vMetro = $_POST['Metro'];
//Arma la instrucción SQL y luego la ejecuta
$vSql = "SELECT count(ciudad) as canti FROM capitales WHERE ciudad='$vCiudad'";
$vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
$vExiste = mysqli_fetch_assoc($vResultado);
//$vCantUsuarios = mysqli_result($vResultado, 0);
if ($vExiste['canti'] != 0){
 echo ("El Usuario ya Existe<br>");
 echo ("<A href='Menu.html'>VOLVER AL ABM</A>");
}
else {
$vSql = "INSERT INTO capitales (ciudad, pais, habitantes, superficie, tieneMetro)
values ('$vCiudad','$vPais', '$vHab', '$vSup', '$vMetro')";
 mysqli_query($link, $vSql) or die (mysqli_error($link));
 echo("La ciudad fue registrada");
echo ("<A href='Menu.html'>VOLVER AL MENU</A>");
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
}
// Cerrar la conexion
mysqli_close($link);
?></body></html>