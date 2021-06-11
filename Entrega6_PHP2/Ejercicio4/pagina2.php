<html>
<body>
<?php
if (!isset($_SESSION["contador"])){
 $_SESSION["contador"] = 1;
}else{
 $_SESSION["contador"]++;
} ?>
<a href= "Ejercicio4.php">Home</a>
</body>
</html>