
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenido a Finance Kids</title>
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
      padding: 3rem;
      border-radius: 2rem;
      box-shadow: 0 0 20px rgba(59, 148, 94, 0.2);
      text-align: center;
    }

    h1 {
      color: #3B945E;
      font-weight: bold;
    }

    .btn-custom {
      background-color: #6BBF59;
      color: white;
      margin: 10px;
      padding: 12px 24px;
      border-radius: 30px;
      transition: transform 0.3s, background-color 0.3s;
      text-decoration: none;
      display: inline-block;
    }

    .btn-custom:hover {
      background-color: #3B945E;
      transform: scale(1.05);
      color: white;
      text-decoration: none;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-10px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Bienvenido a Finance Kids</h1>
    <p>¡Aprende sobre finanzas de una manera divertida!</p>
    <?php
      if (isset($_GET['mensaje'])) {
          echo '<div class="alert alert-info" role="alert">'.$_GET['mensaje'].'</div>';
      }
    ?>
    <a href="resgistro.php" class="btn btn-custom">Registrarse</a>
    <a href="login.php" class="btn btn-custom">Iniciar sesión</a>
  </div>
</body>
</html>


