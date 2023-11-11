<?php
    include 'correo.php';
    
    $correo = $_POST['correo'];

    $query = "INSERT INTO boletines(CORREO) VALUES('$correo')";

    $ejecutar = mysqli_query($conexion, $query);
    if ($ejecutar) {
        echo '
            <script>
                alert("¡Usuario Almacenado!"); window.location = "./index.php";
            </script>
        ';
    }
    else {
        echo '
            <script>
                alert("¡Usuario no Almacenado! Intentalo de Nuevo"); window.location = "./index.php";
            </script>
        ';
    }

    mysqli_close($conexion);
?>