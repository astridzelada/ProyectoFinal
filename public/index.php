<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FURIA GOL</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Fuente Komoda -->
  <link href="https://fonts.cdnfonts.com/css/komoda" rel="stylesheet">

  <!-- Iconos Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
 

  <style>
    body {
      font-family: 'Komoda', sans-serif;
      background-color: #0a0a0a;
      color: white;
    }

    /* Barra superior de login */
    .top-bar {
      background-color: #001f3f;
      color: white;
      padding: 8px 0;
    }

    .top-bar .login-btn {
      color: white;
      text-decoration: none;
      font-weight: 600;
      letter-spacing: 1px;
    }

    .top-bar .login-btn:hover {
      color: #6c8ea9ff;
    }

    /* Barra principal */
    .navbar {
      background-color: #111;
    }

    .navbar-brand img {
      height: 50px;
    }

    .navbar-nav .nav-link {
      color: white !important;
      font-weight: 600;
      font-size: 1.1rem;
      letter-spacing: 1px;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .navbar-nav .nav-link i {
      font-size: 1.3rem;
    }

    .navbar-nav .nav-link:hover {
      color: #6c8ea9ff !important;
    }

    /* Carrusel */
    .carousel-item img {
      height: 450px;
      object-fit: cover;
      filter: brightness(0.7);
    }

    /* Texto principal */
    .main-text {
      text-align: center;
      font-size: 3.5rem;
      color: #f7f3f3ff;
      font-weight: 700;
      text-transform: uppercase;
      margin: 50px 0 30px;
      letter-spacing: 2px;
    }

    /* Cards */
    .card {
      background-color: #001f3f;
      color: white;
      border: none;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(255,255,255,0.1);
      overflow: hidden;
    }

    .card img {
      width: 100%;
      height: 250px;
      object-fit: cover;
    }

    .card-title {
      color: #726868ff;
      font-weight: 700;
      letter-spacing: 1px;
    }

    /* Logos inferiores */
    .sponsors {
      margin-top: 50px;
      display: flex;
      justify-content: center;
      gap: 80px;
      opacity: 0.4;
    }

    .sponsors img {
      height: 50px;
      filter: grayscale(100%);
    }

    footer {
      background-color: #000;
      color: white;
      text-align: center;
      padding: 20px 0;
      margin-top: 40px;
      letter-spacing: 1px;
    }
  </style>
</head>

<body>

  <!-- BARRA SUPERIOR LOGIN -->
  <div class="top-bar text-end pe-4">
    <i class="bi bi-person-circle me-2"></i>
    <a href="#" class="login-btn">Iniciar Sesión</a>
  </div>

  <!-- BARRA PRINCIPAL -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="https://static.vecteezy.com/system/resources/thumbnails/049/026/288/small/the-logo-for-the-soccer-team-is-shown-png.png" alt=" Logo">
      </a>

      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav text-end">
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-people-fill"></i> Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class=""></i> Equipos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-cash-stack"></i> Pagos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-megaphone-fill"></i> Eventos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- CARRUSEL -->
  <div id="carouselFutbol" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://lahora.gt/wp-content/uploads/sites/5/2025/07/Olger-Escobar-MLS.jpg" class="d-block w-100" alt="Jugador 1">
      </div>
      <div class="carousel-item">
        <img src="https://www.prensalibre.com/wp-content/uploads/2023/06/Nathaniel-Mendez-Laing-y-Darwin-Lom-e1687226939575.jpg?quality=52" class="d-block w-100" alt="Jugador 2">
      </div>
      <div class="carousel-item">
        <img src="https://crnnoticias.com/wp-content/uploads/2025/03/GHjJMepWkAE9uo2.webp" class="d-block w-100" alt="Jugador 3">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselFutbol" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselFutbol" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

  <!-- TEXTO PRINCIPAL -->
  <h1 class="main-text">Convocatorias Abiertas</h1>

  <!-- CARDS FUTUROS PARTIDOS -->
  <div class="container mb-5">
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card">
          <img src="https://scontent.fgua3-5.fna.fbcdn.net/v/t39.30808-6/513191205_1027987459319064_3505155038944361280_n.jpg?stp=dst-jpg_s640x640_tt6&_nc_cat=104&ccb=1-7&_nc_sid=833d8c&_nc_ohc=zY6sTu4s-sAQ7kNvwGdVJZG&_nc_oc=AdlpjBfe8xu1F-kpdrTrDU9fIBubeiw2YL3k61tX6egexLc60YxeERNnm2OTjo8ZeiooWE-y9vuyzDvj53H1SemG&_nc_zt=23&_nc_ht=scontent.fgua3-5.fna&_nc_gid=4ThfaeM_QEBwZL14L9MmIQ&oh=00_AfiyPOlOuLuUdAFsbE44gaSoGNLCWqXP6HjsJINlJxt80A&oe=69101C8E" class="card-img-top" alt="Partido 1">
          <div class="card-body text-center">
            <h5 class="card-title">equipo 6 vs equipo5 </h5>
            <p class="card-text">Domingo 10 de noviembre </p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="https://scontent.fgua3-4.fna.fbcdn.net/v/t39.30808-6/485681019_972863408351512_5981646603310719014_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=833d8c&_nc_ohc=TVs549g9kS0Q7kNvwEqrLRb&_nc_oc=AdlIB9kTY-d48Zo0u0sKrEeN4sk2oszIUm6wbXYNnwmoQ0Njjo9wZmXBKnprzGlu_O00kRBsxCxOw7v1rr_M5PNp&_nc_zt=23&_nc_ht=scontent.fgua3-4.fna&_nc_gid=aRB8_y2uiTrCCUaaSY7OQA&oh=00_Afh5c3VKgMoVw_D0S1LNBBRtHY6-DgtG3q9R4rVg84kr6g&oe=69103F63" class="card-img-top" alt="Partido 2">
          <div class="card-body text-center">
            <h5 class="card-title">equipo 3 vs equipo 4 </h5>
            <p class="card-text">Sábado 16 de noviembre </p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="https://agn.gt/wp-content/uploads/2024/05/Captura-de-pantalla-2024-05-13-124059-750x375.png" class="card-img-top" alt="Partido 3">
          <div class="card-body text-center">
            <h5 class="card-title">equipo 1 vs equipo 2</h5>
            <p class="card-text">Viernes 22 de noviembre </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- LOGOS INFERIORES -->
  <div class="sponsors">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwxWjbiOX8rYuq720FgrIefCPVC-y-gHSUYg&s" alt="Nike">
    <img src="https://upload.wikimedia.org/wikipedia/commons/2/26/Spotify_logo_with_text.svg" alt="Spotify">
    <img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Logo-tigosports.png" alt="Tigo Sports">
  </div>

  <footer>
    <p>&copy; 2025 Astrid Zelada - Cesar Caal</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
