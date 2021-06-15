<head>
<title>Modificacion</title>
</head>
<boby>
<?php
include ("conexion.php");
//Captura datos desde el Form anterior
$vID = $_POST['ID'];
//Arma la instrucción SQL y luego la ejecuta
$vSql = "SELECT * FROM capitales WHERE id='$vID' ";
$vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
$fila = mysqli_fetch_array($vResultado);
if(mysqli_num_rows($vResultado) == 0) {
 echo ("Usuario Inexistente...!!! <br>");
 echo ("<A href='FormModi.html'>Continuar</A>");
}
else{
?>
<FORM action="Modi.php" method="POST" name="FormModi">
<table width="356">
<tr>
    <tr>
        <td>ID: </td> 
        <td> <input type="TEXT" name="ID" size="20" maxlength="20"></td>
    </tr>
    <tr>
        <td width="103"> Ciudad: </td>
        <td width="243"> <input type="text" name="Ciudad" value="
        <?php echo($fila['ciudad']); ?>">
        </td>
    </tr>
    <tr>
        <td width="103"> Pais: </td>
        <td width="243"> <input type="TEXT" name="Pais" size="20" maxlength="20"
        value="<?php echo($fila['pais']); ?>">
        </td>
    </tr>
    <tr>
        <td width="103"> Habitantes: </td>
        <td width="243"> <input type="TEXT" name="Habitantes" size="20" maxlength="20"
        value="<?php echo($fila['habitantes']); ?>">
        </td>
    </tr>
    <tr>
        <td width="103"> Superficie: </td>
        <td width="243"> <input type="TEXT" name="Superficie" size="20" maxlength="20"
        value="<?php echo($fila['superficie']); ?>">
        </td>
    </tr>
<tr>
 
 <tr>
 <td colspan="2" align="center"> <input type="SUBMIT" name="Submit"
value="Modificar">
 </td>
 </tr>
</table>
</FORM>
<?php
}
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
// Cerrar la conexion
mysqli_close($link);
?>