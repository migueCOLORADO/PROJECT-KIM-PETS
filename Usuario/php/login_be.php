<?php
    session_start();
    include 'conexion_be.php'; 

    $doc = $_POST['documento'];
    $password = $_POST['clave'];

    $validar_login = mysqli_query($conexion, "SELECT*FROM usuarios WHERE DOCUMENTO = '$doc' and CLAVE = '$password'");
    if (mysqli_num_rows($validar_login) > 0) {
            $session['usuario'] = $doc;
            header("location: Bienvenida.php"); 
            exit;
        }
    else {
        echo '
            <script>
                alert("¡Usuario y/o Contraseña Incorrecta!"); window.location = "../Usuario.php";
            </script>
        '; 
        exit;
    }
?>