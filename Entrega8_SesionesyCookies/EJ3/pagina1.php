<html>

<head>
  <title>Formulario de entrada del dato</title>
</head>

<body>

  <form method="post" action="pagina2.php">
    Ingrese su nombre:
    <input type="text" name="nombre" value="<?php if (isset($_COOKIE['usuario'])) echo $_COOKIE['usuario'] ?>">
    <br>
    <input type="submit" value="confirmar">
  </form>

</body>

</html>