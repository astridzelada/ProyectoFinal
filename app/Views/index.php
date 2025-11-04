<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página Principal</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Font (similar a Intro) -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
    }

    nav.navbar {
      background-color: #001f3f; /* azul marino */
    }

    nav a.nav-link {
      color: white !important;
      font-weight: 600;
    }

    nav a.nav-link:hover {
      color: #ff4136 !important; /* rojo */
    }

    .carousel-item img {
      height: 400px;
      object-fit: cover;
      filter: brightness(0.85);
    }

    section {
      padding: 60px 0;
    }

    h2 {
      color: #001f3f;
      font-weight: 700;
      margin-bottom: 20px;
      text-transform: uppercase;
    }

    .card {
      border: none;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .card-title {
      color: #001f3f;
      font-weight: 600;
    }

    footer {
      background-color: #000;
      color: white;
      text-align: center;
      padding: 20px 0;
      margin-top: 40px;
    }
  </style>
</head>

<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand fw-bold text-danger" href="#">MiSitio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#usuarios">Usuarios</a></li>
          <li class="nav-item"><a class="nav-link" href="#eventos">Eventos</a></li>
          <li class="nav-item"><a class="nav-link" href="#pagos">Pagos</a></li>
          <li class="nav-item"><a class="nav-link" href="#equipos">Equipos</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- CARRUSEL -->
  <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://picsum.photos/1200/400?random=1" class="d-block w-100" alt="imagen 1">
      </div>
      <div class="carousel-item">
        <img src="https://picsum.photos/1200/400?random=2" class="d-block w-100" alt="imagen 2">
      </div>
      <div class="carousel-item">
        <img src="https://picsum.photos/1200/400?random=3" class="d-block w-100" alt="imagen 3">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

  <!-- SECCIÓN USUARIOS -->
  <section id="usuarios" class="bg-light">
    <div class="container text-center">
      <h2>Usuarios</h2>
      <p>Gestión de los usuarios registrados en la plataforma.</p>
      <div class="row g-4 mt-4">
        <div class="col-md-4">
          <div class="card p-3">
            <h5 class="card-title">Registrar Usuario</h5>
            <p class="card-text">Agrega nuevos usuarios fácilmente.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-3">
            <h5 class="card-title">Editar Usuario</h5>
            <p class="card-text">Modifica la información de los usuarios existentes.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-3">
            <h5 class="card-title">Eliminar Usuario</h5>
            <p class="card-text">Elimina usuarios que ya no utilicen el sistema.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECCIÓN EVENTOS -->
  <section id="eventos">
    <div class="container text-center">
      <h2>Eventos</h2>
      <p>Administra y visualiza los próximos eventos organizados.</p>
      <div class="row g-4 mt-4">
        <div class="col-md-6">
          <div class="card p-3">
            <h5 class="card-title">Nuevo Evento</h5>
            <p class="card-text">Crea eventos con toda la información necesaria.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card p-3">
            <h5 class="card-title">Lista de Eventos</h5>
            <p class="card-text">Consulta el historial y estado de cada evento.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECCIÓN PAGOS -->
  <section id="pagos" class="bg-light">
    <div class="container text-center">
      <h2>Pagos</h2>
      <p>Consulta y gestiona los pagos realizados por los usuarios.</p>
      <div class="row g-4 mt-4">
        <div class="col-md-4">
          <div class="card p-3">
            <h5 class="card-title">Historial de Pagos</h5>
            <p class="card-text">Revisa los pagos completados y pendientes.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-3">
            <h5 class="card-title">Registrar Pago</h5>
            <p class="card-text">Agrega un nuevo pago manualmente.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-3">
            <h5 class="card-title">Reportes</h5>
            <p class="card-text">Genera reportes de ingresos y egresos.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECCIÓN EQUIPOS -->
  <section id="equipos">
    <div class="container text-center">
      <h2>Equipos</h2>
      <p>Organiza y administra los equipos activos.</p>
      <div class="row g-4 mt-4">
        <div class="col-md-3">
          <div class="card p-3">
            <h5 class="card-title">Agregar Equipo</h5>
            <p class="card-text">Crea un nuevo equipo fácilmente.</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card p-3">
            <h5 class="card-title">Miembros</h5>
            <p class="card-text">Visualiza y gestiona los integrantes.</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card p-3">
            <h5 class="card-title">Rendimiento</h5>
            <p class="card-text">Analiza el desempeño de los equipos.</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card p-3">
            <h5 class="card-title">Configuración</h5>
            <p class="card-text">Ajusta los parámetros del equipo.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <p>&copy; 2025 MiSitio. Todos los derechos reservados.</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
