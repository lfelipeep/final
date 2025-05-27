
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Tutorial - Finance Kids</title>
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
      max-width: 800px;
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
      max-width: 200px;
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
    <h2>Bienvenido nuevo usuario</h2>
    <p>Mira este breve tutorial para empezar:</p>
    <iframe width="100%" height="400" src="https://www.youtube.com/embed/9kzE8isXlQY" title="Less talk....  more action. / Lo-fi for study, work ( with Rain sounds)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
     <form action="eleccion_de_juegos.html" method="post" style="margin-top:2rem;">
        <button type="submit" class="btn btn-custom">Elegir Juegos</button>
    </form>
      <form action="logout.php" method="post" style="margin-top:2rem;">
        <button type="submit" class="btn btn-custom">Cerrar sesión</button>
    </form>
  </div>
</body>
</html>
