<!DOCTYPE html>
<html>
<head>
  <title>Registro - Finance Kids</title>
</head>
<body>
  <h2>Registro</h2>
  <form action="../includes/procesar_registro.php" method="post">
    <label>Nombre de usuario: <input type="text" name="nombre" required></label><br>
    <label>Contraseña: <input type="password" name="contrasena" required></label><br>
    <label>Nivel:
      <select name="nivel">
        <option value="facil">Fácil</option>
        <option value="medio">Medio</option>
        <option value="dificil">Difícil</option>
      </select>
    </label><br>
    <input type="submit" value="Registrarse">
  </form>
  <button type="button" onclick="window.location.href='index.php'">Volver</button>
  <?php
    if (isset($_GET['mensaje'])) {
        echo $_GET['mensaje'];
    }
  ?>
</body>
</html>
<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST['nombre']);
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
    $nivel = $_POST['nivel'];

    // Verifica si el usuario ya existe
    $sql_check = "SELECT * FROM usuarios WHERE nombre='$nombre'";
    $result = mysqli_query($conn, $sql_check);

    if (mysqli_num_rows($result) > 0) {
        $mensaje = "<div style='color:red;'>El usuario ya está registrado. <a href='../static/login.php'>Inicia sesión aquí</a>.</div>";
    } else {
        $sql = "INSERT INTO usuarios (nombre, contrasena, nivel) VALUES ('$nombre', '$contrasena', '$nivel')";
        if (mysqli_query($conn, $sql)) {
            $mensaje = "<div style='color:green;'>Usuario registrado correctamente. <a href='../static/login.php'>Inicia sesión aquí</a>.</div>";
        } else {
            $mensaje = "<div style='color:red;'>Error al registrar usuario: " . mysqli_error($conn) . "</div>";
        }
    }
    header("Location: ../static/resgistro.php?mensaje=" . urlencode($mensaje));
    exit();
}
?>