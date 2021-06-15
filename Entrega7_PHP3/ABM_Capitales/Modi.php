<head>
<title>Modificacion</title>
</head>
<body>
<?php
include ("conexion.php");
//Captura datos desde el Form anterior
$vCiudad = $_POST['Ciudad'];
$vPais = $_POST['Pais'];
$vHab = $_POST['Habitantes'];
$vSup = $_POST['Superficie'];
//Arma la instrucción SQL y luego la ejecuta
$vID = $_POST['ID'];
$vSql = "UPDATE capitales set ciudad='$vCiudad', pais='$vPais', habitantes='$vHab', superficie='$vSup' where id='$vID'";
mysqli_query($link,$vSql) or die (mysqli_error($link));
echo("La Capital fue Modificada<br>");
echo("<A href= 'Menu.html'>Volver al Menu del ABM</A>");
// Cerrar la conexion
mysqli_close($link);
?>
</body>
</html>