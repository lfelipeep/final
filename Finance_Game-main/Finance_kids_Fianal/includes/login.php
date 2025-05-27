
<!DOCTYPE html>
<html>
<head>
  <title>Iniciar sesión - Finance Kids</title>
</head>
<body>
  <h2>Iniciar sesión</h2>
  <form action="../includes/procesar_login.php" method="post">
    <label>Nombre de usuario: <input type="text" name="nombre" required></label><br>
    <label>Contraseña: <input type="password" name="contrasena" required></label><br>
    <input type="submit" value="Entrar">
    <button type="button" onclick="window.location.href='index.php'">Volver</button>
  </form>
  <?php
    if (isset($_GET['mensaje'])) {
        echo $_GET['mensaje'];
    }
  ?>
</body>
</html>