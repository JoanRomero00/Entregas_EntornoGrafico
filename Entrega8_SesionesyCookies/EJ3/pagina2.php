<?php
setcookie("usuario", $_REQUEST['nombre'], time() + 60 * 60 * 24 * 365, "/");
?>
<html>

<head>
  <title>Problema</title>
</head>

<body>

  Se creó la cookie.
  <br>
  <a href="pagina1.php">Ir a la otra página</a>

</body>

</html>