<?php
    session_start();

    if(!isset($session['usuario'])) {
        echo '
            <script>
                alert("Porfavor Iniciar Session"); window.location = "../Usuario.php";
            </script>
        ';
        die();
    }

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KIM PETS | BIENVENIDA</title>
        <link rel="shortcut icon" href="../../IMG/Kim_pets.jpg">
    </head>

    <body>
        <h1>¡BIENVENID@S A KIM PETS!</h1>
        <a href="php/Cerrar_se.php"><input type="text" name="Cerrar Session"></a>
    </body>
</html>