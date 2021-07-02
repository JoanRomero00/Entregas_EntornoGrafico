<?php
session_start();
?>
<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php
    if (isset($_SESSION['usuario1'])) {
        echo "Bienvenido " . $_SESSION['usuario1'];
    } else {
        echo "No tiene permitido visitar esta página.";
    }

    ?>
</body>

</html>