<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST['nombre']);
    $contrasena = $_POST['contrasena'];

    $sql = "SELECT * FROM usuarios WHERE nombre='$nombre'";
    $result = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($contrasena, $row['contrasena'])) {
            $mensaje = "<div style='color:green;'>Inicio de sesión exitoso. ¡Bienvenido, $nombre!</div>";
            header("Location: ../static/tutorial.php");
            exit();
            // Aquí puedes iniciar sesión o redirigir
        } else {
            $mensaje = "<div style='color:red;'>Contraseña incorrecta. <a href='../static/login.php'>Intenta de nuevo</a>.</div>";
        }
    } else {
        $mensaje = "<div style='color:red;'>El usuario no está registrado. <a href='../static/resgistro.php'>Regístrate aquí</a>.</div>";
    }
    header("Location: ../static/login.php?mensaje=" . urlencode($mensaje));
    exit();
}
?>