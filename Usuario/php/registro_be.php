<?php
    include 'conexion_be.php';
    
    $nombrec = $_POST['nombre'];
    $doc = $_POST['documento'];
    $correoe = $_POST['correo'];
    $password = $_POST['clave'];
    $passworden = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO usuarios(NOMBRE, DOCUMENTO, CORREO, CLAVE) VALUES('$nombrec', '$doc', '$correoe', '$passworden')";
    
    $verify_co = mysqli_query($conexion, "SELECT*FROM usuarios WHERE CORREO = '$correoe' ");
    if(mysqli_num_rows($verify_co)> 0) {
        echo '
            <script>
                alert("¡Este Correo ya esta en uso! Intenta con Otro"); window.location = "../Usuario.php";
            </script>
        ';
        exit();
    }

    $verify_us = mysqli_query($conexion, "SELECT*FROM usuarios WHERE NOMBRE = '$nombrec' ");
    if(mysqli_num_rows($verify_us)> 0) {
        echo '
            <script>
                alert("¡Este Usuario ya ha Sido Registrado! Intenta con Otro"); window.location = "../Usuario.php";
            </script>
        ';
        exit();
    }

    $verify_doc = mysqli_query($conexion, "SELECT*FROM usuarios WHERE DOCUMENTO = '$doc' ");
    if(mysqli_num_rows($verify_doc)> 0) {
        echo '
            <script>
                alert("¡Perfil en Uso! Intenta con Otro"); window.location = "../Usuario.php";
            </script>
        ';
        exit();
    }
    
    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar) {
        echo '
            <script>
                alert("¡Usuario Almacenado!"); window.location = "../../../index.php";
            </script>
        ';
    }
    else {
        echo '
            <script>
                alert("¡Usuario no Almacenado! Intentalo de Nuevo"); window.location = "../Usuario.php";
            </script>
        ';
    }

    mysqli_close($conexion);
?>
