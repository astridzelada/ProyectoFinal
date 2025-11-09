<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Pagos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .navbar {
            box-shadow: 0 2px 4px rgba(0,0,0,.1);
        }
        
        .navbar-brand {
            font-weight: bold;
        }
        
        .container-main {
            margin-top: 20px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        
        .page-title {
            color: #2c3e50;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e9ecef;
        }
        
        .btn-primary {
            background-color: #3498db;
            border-color: #3498db;
        }
        
        .btn-primary:hover {
            background-color: #2980b9;
            border-color: #2980b9;
        }
        
        .table th {
            background-color: #f1f8ff;
            color: #2c3e50;
        }
        
        .modal-header {
            background-color: #3498db;
            color: white;
        }
        
        .modal-header .btn-close {
            filter: invert(1);
        }
        
        .form-label {
            font-weight: 500;
            color: #2c3e50;
        }
        
        .table-responsive {
            border-radius: 8px;
            overflow: hidden;
        }
    </style>
</head>

<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Sistema de Gestión</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('equipos') ?>">Equipo</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('usuarios') ?>">Usuarios</a>
                    </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('eventos') ?>"><i class=""></i> Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('inicio') ?>"><i class=""></i> Inicio</a>
                    </li>
                  
                </ul>
            </div>
        </div>
    </nav>

    <div class="container container-main">
        <h1 class="page-title">Gestión de Pagos</h1>
        
        <!-- Botón para agregar pago -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <p class="mb-0">Administra los pagos del sistema</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-plus-circle"></i> Agregar Pago
            </button>
        </div>

        <!-- Modal para agregar pago -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Pago</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?=base_url('agregar_pago');  ?>" method="post">
                            <div class="mb-3">
                                <label for="txt_codigo" class="form-label">Código Pago</label>
                                <input type="number" name="txt_codigo" id="txt_codigo" class="form-control" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="txt_usuario" class="form-label">Código Usuario</label>
                                <input type="number" name="txt_usuario" id="txt_usuario" class="form-control" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="txt_concepto" class="form-label">Concepto</label>
                                <input type="text" name="txt_concepto" id="txt_concepto" class="form-control" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="txt_monto" class="form-label">Monto</label>
                                <input type="number" name="txt_monto" id="txt_monto" class="form-control" step="0.01" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="txt_fecha" class="form-label">Fecha de Pago</label>
                                <input type="date" name="txt_fecha" id="txt_fecha" class="form-control" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="txt_metodo" class="form-label">Método de Pago</label>
                                <select name="txt_metodo" id="txt_metodo" class="form-select" required>
                                    <option value="">Seleccione un método</option>
                                    <option value="Efectivo">Efectivo</option>
                                    <option value="Tarjeta">Tarjeta</option>
                                    <option value="Transferencia">Transferencia</option>
                                    <option value="Cheque">Cheque</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label for="txt_estado" class="form-label">Estado</label>
                                <select name="txt_estado" id="txt_estado" class="form-select" required>
                                    <option value="">Seleccione un estado</option>
                                    <option value="Pendiente">Pendiente</option>
                                    <option value="Completado">Pagado</option>
                                </select>
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary mt-2">Guardar Pago</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabla de pagos -->
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID Pago</th>
                        <th>ID Usuario</th>
                        <th>Concepto</th>
                        <th>Monto</th>
                        <th>Fecha de Pago</th>
                        <th>Método de Pago</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($datos as $pagos) { 
                    ?>
                    <tr>
                        <td><?=$pagos['id_pago'];?></td>
                        <td><?=$pagos['id_usuario'];?></td>
                        <td><?=$pagos['concepto'];?></td>
                        <td>$<?=number_format($pagos['monto'], 2);?></td>
                        <td><?=date('d/m/Y', strtotime($pagos['fecha_pago']));?></td>
                        <td><?=$pagos['metodo_pago'];?></td>
                        <td>
                            <span class="badge 
                                <?php 
                                if($pagos['estado'] == 'Completado') echo 'bg-success';
                                elseif($pagos['estado'] == 'Pendiente') echo 'bg-warning';
                                else echo 'bg-danger';
                                ?>">
                                <?=$pagos['estado'];?>
                            </span>
                        </td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="<?=base_url('buscar_pago/'.$pagos['id_pago']);?>" class="btn btn-warning btn-sm">Editar</a>
                                <a href="<?=base_url('eliminar_pago/'.$pagos['id_pago']);?>" class="btn btn-danger btn-sm">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                    <?php 
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>