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
        <a href="<?= base_url('inicio'); ?>" class="btn btn-primary">Inicio</a>
      </div>
    </div>
  </nav>

  <!-- Contenedor principal -->
  <div class="container my-5">

    <!-- Título -->
    <div class="text-center mb-5">
      <h2 class="fw-bold text-white">Tabla de Eventos</h2>
      <p class="text-light">Registro y gestión de los eventos deportivos</p>
    </div>

    <!-- Tabla de eventos -->
    <div class="table-responsive mb-5">
      <table class="table table-striped table-hover align-middle text-center">
        <thead>
          <tr>
            <th>ID Evento</th>
            <th>Tipo Evento</th>
            <th>Equipo Local</th>
            <th>Equipo Visitante</th>
            <th>Cancha</th>
            <th>Fecha</th>
            <th>Hora Inicio</th>
            <th>Hora Fin</th>
            <th>Descripción</th>
            <th>Resultado Local</th>
            <th>Resultado Visitante</th>
          </tr>
        </thead>
        <tbody>
          
          <?php foreach($datos as $evento): ?>
            <tr>
              <td><?= $evento['id_evento'] ?></td>
              <td><?= $evento['tipo_evento'] ?></td>
              <td><?= $evento['id_equipo_local'] ?></td>
              <td><?= $evento['id_equipo_visitante'] ?></td>
              <td><?= $evento['id_cancha'] ?></td>
              <td><?= $evento['fecha'] ?></td>
              <td><?= $evento['hora_inicio'] ?></td>
              <td><?= $evento['hora_fin'] ?></td>
              <td><?= $evento['descripcion'] ?></td>
              <td><?= $evento['resultado_local'] ?></td>
              <td><?= $evento['resultado_visitante'] ?></td>
               <td>
                    <a href="<?=base_url('eliminar_evento/').$evento['id_evento'];?>"
                        class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                    <a href="<?=base_url('buscar_evento/').$evento['id_evento'];?>"
                        class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                </td>
            </tr>
          <?php endforeach; ?>
          
        </tbody>
      </table>
    </div>

    <!-- Live Demo - Formulario -->
    <div class="card p-4 shadow">
      <h4 class="text-center mb-4">Ingreso de Nuevo Evento</h4>
      <form id="formEvento" action="<?= base_url('agregar_evento');?>" method= "post" >
        <div class="row g-3">
          <div class="col-md-4">
            <label class="form-label">ID Evento</label>
            <input type="text" name="txt_idEvento" id="txt_idEvento" class="form-control" placeholder="Ej: Partido, Entrenamiento">
          </div>
          <div class="col-md-4">
            <label class="form-label">Tipo de Evento</label>
            <input type="text" name="txt_tipoEvento" id="txt_tipoEvento" class="form-control" placeholder="Ej: Partido, Entrenamiento">
          </div>
          <div class="col-md-4">
            <label class="form-label">Equipo Local</label>
            <input type="text" name="txt_equipoLocal" id="txt_equipoLocal" class="form-control" placeholder="ID Equipo Local">
          </div>
          <div class="col-md-4">
            <label class="form-label">Equipo Visitante</label>
            <input type="text" name="txt_equipoVisitante" id="txt_equipoVisitante" class="form-control" placeholder="ID Equipo Visitante">
          </div>

          <div class="col-md-4">
            <label class="form-label">Cancha</label>
            <input type="text" name="txt_cancha" id="txt_cancha" class="form-control" placeholder="ID Cancha">
          </div>
          <div class="col-md-4">
            <label class="form-label">Fecha</label>
            <input type="date" name="txt_fecha" id="txt_fecha" class="form-control">
          </div>
          <div class="col-md-4">
            <label class="form-label">Hora de Inicio</label>
            <input type="time"name="txt_horaInicio" id="txt_horaInicio" class="form-control">
          </div>

          <div class="col-md-4">
            <label class="form-label">Hora de Fin</label>
            <input type="time" name="txt_horaFin" id="txt_horaFin" class="form-control">
          </div>
          <div class="col-md-8">
            <label class="form-label">Descripción</label>
            <input type="text" name="txt_descripcion" id="txt_descripcion" class="form-control" placeholder="Detalles del evento">
          </div>

          <div class="col-md-6">
            <label class="form-label">Resultado Local</label>
            <input type="number" name="txt_resultadoLocal" id="txt_resultadoLocal" class="form-control" placeholder="0">
          </div>
          <div class="col-md-6">
            <label class="form-label">Resultado Visitante</label>
            <input type="number" name="txt_resultadoVisitante" class="form-control" placeholder="0">
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
