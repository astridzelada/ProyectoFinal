<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - FuriaGol</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #0f172a, #1e293b);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .login-card {
      background-color: #fff;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.2);
      width: 100%;
      max-width: 400px;
    }
    .btn-futbol {
      background-color: #ff6b35;
      border: none;
    }
    .btn-futbol:hover {
      background-color: #e85c2a;
    }
  </style>
</head>
<body>

  <div class="login-card">
    <h3 class="text-center mb-4 text-dark">⚽ Iniciar Sesión - FuriaGol</h3>

    
    <form action="<?= base_url('iniciar_sesion') ?>" method="post">
      <div class="mb-3">
        <label for="txt_usuario" class="form-label">Usuario</label>
        <input type="text" class="form-control" id="txt_usuario" name="txt_usuario" required>
      </div>

      <div class="mb-3">
        <label for="txt_contra" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="txt_contra" name="txt_contra" required>
      </div>

      <button type="submit" class="btn btn-futbol w-100 text-white mt-3">Ingresar</button>
    </form>
  </div>

</body>
</html>
