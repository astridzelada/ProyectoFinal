<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel Administrador - FuriaGol</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #0f172a, #1e293b);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: Arial, sans-serif;
      color: #fff;
    }

    .menu-container {
      background-color: #ffffff;
      color: #0f172a;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 0 25px rgba(0,0,0,0.3);
      width: 90%;
      max-width: 500px;
      text-align: center;
    }

    .menu-container h2 {
      color: #ff6b35;
      margin-bottom: 25px;
      font-weight: bold;
    }

    .btn-menu {
      display: block;
      width: 100%;
      margin: 10px 0;
      padding: 12px;
      background-color: #0f172a;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      transition: all 0.3s ease;
      text-decoration: none;
    }

    .btn-menu:hover {
      background-color: #ff6b35;
      transform: scale(1.03);
    }
  </style>
</head>
<body>

  <div class="menu-container">
    <h2>⚽ Panel Administrador</h2>

    <!-- Botones del menú -->
    <a href="<?= base_url('inicio') ?>" class="btn-menu">Inicio</a>
    <a href="<?= base_url('pagos') ?>" class="btn-menu">Pagos</a>
    <a href="<?= base_url('eventos') ?>" class="btn-menu">Eventos</a>
    <a href="<?= base_url('usuarios') ?>" class="btn-menu">Usuarios</a>
    <a href="<?= base_url('equipos') ?>" class="btn-menu">Equipos</a>
  </div>

</body>
</html>
