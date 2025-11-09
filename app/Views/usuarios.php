<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Gestión de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2c3e50;
            --accent-color: #e74c3c;
            --light-color: #ecf0f1;
            --success-color: #2ecc71;
            --warning-color: #f39c12;
        }
        
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
        }
        
        .navbar-custom {
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .page-header {
            background-color: white;
            padding: 20px 0;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            margin-bottom: 25px;
        }
        
        .card-custom {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 20px;
        }
        
        .card-custom:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }
        
        .btn-primary-custom {
            background: linear-gradient(135deg, var(--primary-color), #2980b9);
            border: none;
            border-radius: 6px;
            padding: 10px 20px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-primary-custom:hover {
            background: linear-gradient(135deg, #2980b9, var(--primary-color));
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(52, 152, 219, 0.3);
        }
        
        .table-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            margin-bottom: 30px;
        }
        
        .table thead {
            background: linear-gradient(135deg, var(--secondary-color), #34495e);
            color: white;
        }
        
        .table th {
            border: none;
            padding: 15px 12px;
            font-weight: 600;
        }
        
        .table td {
            padding: 12px;
            vertical-align: middle;
            border-bottom: 1px solid #e9ecef;
        }
        
        .table tbody tr {
            transition: background-color 0.2s ease;
        }
        
        .table tbody tr:hover {
            background-color: rgba(52, 152, 219, 0.05);
        }
        
        .btn-action {
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 0.85rem;
            margin: 2px;
        }
        
        .modal-header {
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
            color: white;
            border-radius: 0;
        }
        
        .modal-title {
            font-weight: 600;
        }
        
        .form-label {
            font-weight: 600;
            color: var(--secondary-color);
            margin-top: 10px;
        }
        
        .form-control {
            border-radius: 6px;
            border: 1px solid #ced4da;
            padding: 10px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
        }
        
        .stats-card {
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            color: white;
            margin-bottom: 20px;
        }
        
        .stats-card i {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }
        
        .stats-card h3 {
            font-size: 2rem;
            margin-bottom: 5px;
            font-weight: 700;
        }
        
        .stats-card p {
            font-size: 1rem;
            opacity: 0.9;
        }
        
        .footer {
            background-color: var(--secondary-color);
            color: white;
            padding: 20px 0;
            margin-top: 40px;
        }
        
        .search-box {
            max-width: 400px;
            margin-bottom: 20px;
        }
        
        @media (max-width: 768px) {
            .table-responsive {
                font-size: 0.85rem;
            }
            
            .btn-action {
                font-size: 0.75rem;
                padding: 4px 8px;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-users me-2"></i>
                Sistema de Usuarios
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url('equipos') ?>"><i class="fas fa-home me-1"></i> Equipos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('pagos') ?>"><i class="fas fa-cog me-1"></i> Pagos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('usuarios') ?>"><i class="fas fa-sign-out-alt me-1"></i> Usuarios</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('inicio') ?>"><i class=""></i> Inicio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-4">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="h3 mb-0"><i class="fas fa-user-friends me-2 text-primary"></i>Gestión de Usuarios</h1>
                    <p class="text-muted mb-0">Administra los usuarios del sistema</p>
                </div>
                <div class="col-md-6 text-end">
                    <button type="button" class="btn btn-primary-custom" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fas fa-plus-circle me-2"></i>Agregar Usuario
                    </button>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="stats-card" style="background: linear-gradient(135deg, #3498db, #2980b9);">
                    <i class="fas fa-users"></i>
                    <h3><?= count($datos) ?></h3>
                    <p>Usuarios Totales</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card" style="background: linear-gradient(135deg, #2ecc71, #27ae60);">
                    <i class="fas fa-user-check"></i>
                    <h3>24</h3>
                    <p>Usuarios Activos</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card" style="background: linear-gradient(135deg, #e74c3c, #c0392b);">
                    <i class="fas fa-user-times"></i>
                    <h3>5</h3>
                    <p>Usuarios Inactivos</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card" style="background: linear-gradient(135deg, #f39c12, #e67e22);">
                    <i class="fas fa-user-shield"></i>
                    <h3>8</h3>
                    <p>Administradores</p>
                </div>
            </div>
        </div>

        <!-- Users Table -->
        <div class="table-container">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Rol</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datos as $usuarios) { ?>
                        <tr>
                            <td><span class="badge bg-secondary"><?=$usuarios['id_usuario'];?></span></td>
                            <td><?=$usuarios['nombre'];?></td>
                            <td><?=$usuarios['apellido'];?></td>
                            <td><?=$usuarios['email'];?></td>
                            <td><?=$usuarios['telefono'];?></td>
                            <td><span class="badge bg-info"><?=$usuarios['rol'];?></span></td>
                            <td>
                                <?php if($usuarios['estado'] == 'Activo'): ?>
                                    <span class="badge bg-success"><?=$usuarios['estado'];?></span>
                                <?php else: ?>
                                    <span class="badge bg-danger"><?=$usuarios['estado'];?></span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="<?=base_url('buscar_usuario/'.$usuarios['id_usuario']);?>" class="btn btn-warning btn-action">
                                        <i class="fas fa-edit"></i> Editar
                                    </a>
                                    <a href="<?=base_url('eliminar_usuario/'.$usuarios['id_usuario']);?>" class="btn btn-danger btn-action">
                                        <i class="fas fa-trash-alt"></i> Eliminar
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        <i class="fas fa-user-plus me-2"></i>Nuevo Usuario
                    </h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?=base_url('agregar_usuario');?>" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="txt_codigo" class="form-label">Código Usuario</label>
                                <input type="number" name="txt_codigo" id="txt_codigo" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="txt_dpi" class="form-label">DPI</label>
                                <input type="number" name="txt_dpi" id="txt_dpi" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <label for="txt_nombre" class="form-label">Nombre Usuario</label>
                                <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="txt_apellido" class="form-label">Apellido Usuario</label>
                                <input type="text" name="txt_apellido" id="txt_apellido" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <label for="txt_fechanac" class="form-label">Fecha de Nacimiento</label>
                                <input type="date" name="txt_fechanac" id="txt_fechanac" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="txt_telefono" class="form-label">Teléfono</label>
                                <input type="number" name="txt_telefono" id="txt_telefono" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <label for="txt_correo" class="form-label">Correo Electrónico</label>
                                <input type="email" name="txt_correo" id="txt_correo" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="txt_direccion" class="form-label">Dirección</label>
                                <input type="text" name="txt_direccion" id="txt_direccion" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4">
                                <label for="txt_rol" class="form-label">Rol</label>
                                <select name="txt_rol" id="txt_rol" class="form-select" required>
                                    <option value="">Seleccionar rol</option>
                                    <option value="Administrador">Administrador</option>
                                    <option value="Usuario">Jugador</option>
                                    <option value="Invitado">Entrenador</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="txt_categoria" class="form-label">Categoría</label>
                                <select name="txt_categoria" id="txt_categoria" class="form-select" required>
                                    <option value="">Seleccionar categoría</option>
                                    <option value="A">Sub-15</option>
                                    <option value="B">Sub-16</option>
                                    <option value="C">Sub-17</option>
                                    <option value="D">Sub-18</option>
                                    <option value="E">Sub-20</option>
                                    <option value="F">Sub-Senior</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="txt_posicion" class="form-label">Posición</label>
                                <input type="text" name="txt_posicion" id="txt_posicion" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <label for="txt_licencia" class="form-label">Licencia</label>
                                <input type="text" name="txt_licencia" id="txt_licencia" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="txt_especialidad" class="form-label">Especialidad</label>
                                <input type="text" name="txt_especialidad" id="txt_especialidad" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <label for="txt_estado" class="form-label">Estado</label>
                                <select name="txt_estado" id="txt_estado" class="form-select" required>
                                    <option value="">Seleccionar estado</option>
                                    <option value="Activo">Activo</option>
                                    <option value="Inactivo">Inactivo</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary-custom w-100 py-2">
                                <i class="fas fa-save me-2"></i>Guardar Usuario
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container text-center">
            <p class="mb-0">Sistema de Gestión de Usuarios &copy; 2023 - Todos los derechos reservados</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>