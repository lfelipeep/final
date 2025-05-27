
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar sesión - Finance Kids</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to bottom right, #A8D5BA, #F9F9F9);
      font-family: 'Segoe UI', sans-serif;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      animation: fadeIn 1s ease-in-out;
    }
    .container {
      background-color: #ffffffcc;
      padding: 2.5rem;
      border-radius: 2rem;
      box-shadow: 0 0 20px rgba(59, 148, 94, 0.2);
      text-align: center;
      max-width: 400px;
    }
    h2 {
      color: #3B945E;
      font-weight: bold;
      margin-bottom: 1.5rem;
    }
    .btn-custom {
      background-color: #6BBF59;
      color: white;
      margin-top: 1rem;
      padding: 10px 24px;
      border-radius: 30px;
      transition: transform 0.3s, background-color 0.3s;
      text-decoration: none;
      display: inline-block;
      width: 100%;
    }
    .btn-custom:hover {
      background-color: #3B945E;
      transform: scale(1.05);
      color: white;
      text-decoration: none;
    }
    label {
      font-weight: 500;
      color: #3B945E;
      margin-top: 10px;
      display: block;
      text-align: left;
    }
    input {
      width: 100%;
      margin-bottom: 15px;
      padding: 8px;
      border-radius: 8px;
      border: 1px solid #b2dfdb;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-10px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Iniciar sesión</h2>
    <form action="../includes/procesar_login.php" method="post">
      <label>Nombre de usuario:</label>
      <input type="text" name="nombre" required>
      <label>Contraseña:</label>
      <input type="password" name="contrasena" required>
      <input type="submit" value="Entrar" class="btn btn-custom">
    </form>
    <a href="index.php" class="btn btn-custom" style="background:#3B945E;">Volver</a>
    <?php
      if (isset($_GET['mensaje'])) {
          echo '<div class="alert alert-info mt-3" role="alert">'.$_GET['mensaje'].'</div>';
      }
    ?>
  </div>
</body>
</html>