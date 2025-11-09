<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Eventos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

  <style>
    body {
      background-color: #0d1b2a; /* azul oscuro */
      color: #fff;
      font-family: 'Segoe UI', sans-serif;
    }
    .navbar {
      background-color: #000; /* negro */
    }
    .navbar a {
      color: #fff !important;
    }
    .table thead {
      background-color: #1b263b; /* tono azul oscuro */
      color: #fff;
    }
    .table tbody tr:hover {
      background-color: #1e3a5f;
    }
    .card {
      background-color: #1b263b;
      color: #fff;
      border: none;
    }
    .btn-primary {
      background-color: #1e40af;
      border: none;
    }
    .btn-primary:hover {
      background-color: #1d4ed8;
    }
  </style>
</head>
<body>

  <!-- Barra superior -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="#">Eventos</a>
      <div class="d-flex">
        <a href="<?= base_url('eventos'); ?>" class="btn btn-primary">Eventos</a>
      </div>
    </div>
  </nav>


    <!-- Live Demo - Formulario -->
    <div class="card p-4 shadow">
      <h4 class="text-center mb-4">Ingreso de Nuevo Evento</h4>
      <form id="formEvento" action="<?= base_url('modificar_evento');?>" method= "post" >
        <div class="row g-3">
          <div class="col-md-4">
            <label class="form-label">ID Evento</label>
            <input type="text" name="txt_idEvento" id="txt_idEvento" class="form-control" placeholder="Ej: Partido, Entrenamiento"
            value="<?=$datos['id_evento'];?>"readonly>
          </div>
          <div class="col-md-4">
            <label class="form-label">Tipo de Evento</label>
            <input type="text" name="txt_tipoEvento" id="txt_tipoEvento" class="form-control" placeholder="Ej: Partido, Entrenamiento"
            value="<?=$datos['tipo_evento'];?>">
          </div>
          <div class="col-md-4">
            <label class="form-label">Equipo Local</label>
            <input type="text" name="txt_equipoLocal" id="txt_equipoLocal" class="form-control" placeholder="ID Equipo Local"
            value="<?=$datos['id_equipo_local'];?>">
          </div>
          <div class="col-md-4">
            <label class="form-label">Equipo Visitante</label>
            <input type="text" name="txt_equipoVisitante" id="txt_equipoVisitante" class="form-control" placeholder="ID Equipo Visitante"
            value="<?=$datos['id_equipo_visitante'];?>">
          </div>

          <div class="col-md-4">
            <label class="form-label">Cancha</label>
            <input type="text" name="txt_cancha" id="txt_cancha" class="form-control" placeholder="ID Cancha"
            value="<?=$datos['id_cancha'];?>">
          </div>
          <div class="col-md-4">
            <label class="form-label">Fecha</label>
            <input type="date" name="txt_fecha" id="txt_fecha" class="form-control"
            value="<?=$datos['fecha'];?>">
          </div>
          <div class="col-md-4">
            <label class="form-label">Hora de Inicio</label>
            <input type="time"name="txt_horaInicio" id="txt_horaInicio" class="form-control"
            value="<?=$datos['hora_inicio'];?>">
          </div>

          <div class="col-md-4">
            <label class="form-label">Hora de Fin</label>
            <input type="time" name="txt_horaFin" id="txt_horaFin" class="form-control"
            value="<?=$datos['hora_fin'];?>">
          </div>
          <div class="col-md-8">
            <label class="form-label">Descripción</label>
            <input type="text" name="txt_descripcion" id="txt_descripcion" class="form-control" placeholder="Detalles del evento"
            value="<?=$datos['descripcion'];?>">
          </div>

          <div class="col-md-6">
            <label class="form-label">Resultado Local</label>
            <input type="number" name="txt_resultadoLocal" id="txt_resultadoLocal" class="form-control" placeholder="0"
            value="<?=$datos['resultado_local'];?>">
          </div>
          <div class="col-md-6">
            <label class="form-label">Resultado Visitante</label>
            <input type="number" name="txt_resultadoVisitante" class="form-control" placeholder="0"
            value="<?=$datos['resultado_visitante'];?>">
          </div>
        </div>

        <div class="text-center mt-4">
          <button type="submit" class="form-control btn btn-primary mt-2">Guardar Evento</button>
        </div>
      </form>
    </div>

  </div>

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
 
</body>
</html>
