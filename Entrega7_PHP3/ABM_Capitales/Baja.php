<html>
<head>
<title>Baja Ciudad</title>
</head>
<body>
<?php
include ("conexion.php");
$vID = $_POST ['ID'];
$vSql = "SELECT id FROM capitales WHERE id='$vID' ";
$vResultado = mysqli_query($link, $vSql);
if(mysqli_num_rows($vResultado) == 0)
 {
 echo ("Usuario Inexistente...!!! <br>");
 echo ("<A href='FormBaja.html'>Continuar</A>");
}
else{
//Arma la instrucción SQL y luego la ejecuta
$vSql= "DELETE FROM capitales WHERE id = '$vID' ";
mysqli_query($link, $vSql);
 echo("La capital fue Borrado<br>");
 echo("<A href='Menu.html'>Volver al Menu del ABM</A>");
}
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
// Cerrar la conexion
mysqli_close($link);
?>
</body>
</html>