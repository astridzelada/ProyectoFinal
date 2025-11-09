<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Equipos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2c3e50;
            --accent-color: #e74c3c;
            --light-color: #ecf0f1;
            --dark-color: #2c3e50;
            --success-color: #2ecc71;
        }
        
        /* Estilos para la barra de navegación */
        .navbar {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            padding: 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 20px;
        }

        .nav-links {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-links li {
            margin: 0;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            padding: 20px 30px;
            display: block;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: 500;
            transition: all 0.3s ease;
            border-bottom: 3px solid transparent;
        }

        .nav-links a:hover {
            background-color: rgba(255,255,255,0.1);
            border-bottom: 3px solid #ffeb3b;
        }

        .nav-links a.active {
            background-color: rgba(255,255,255,0.2);
            border-bottom: 3px solid #ffeb3b;
        }

        /* Responsive para la barra de navegación */
        @media (max-width: 768px) {
            .nav-links {
                flex-direction: column;
                width: 100%;
            }
            
            .nav-links a {
                padding: 15px 20px;
                text-align: center;
                border-bottom: 1px solid rgba(255,255,255,0.1);
            }
        }
        
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--dark-color);
        }
        
        .header-container {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 2rem 0;
            margin-bottom: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .page-title {
            font-weight: 700;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            font-weight: 600;
            padding: 0.5rem 1.5rem;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        
        .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }
        
        .card-img-top {
            height: 180px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .card:hover .card-img-top {
            transform: scale(1.05);
        }
        
        .card-title {
            color: var(--secondary-color);
            font-weight: 700;
            border-bottom: 2px solid var(--primary-color);
            padding-bottom: 0.5rem;
        }
        
        .card-text strong {
            color: var(--primary-color);
        }
        
        .modal-header {
            background-color: var(--secondary-color);
            color: white;
        }
        
        .modal-title {
            font-weight: 600;
        }
        
        .form-label {
            font-weight: 600;
            color: var(--secondary-color);
            margin-top: 1rem;
        }
        
        .form-control {
            border-radius: 5px;
            border: 1px solid #ddd;
            padding: 0.75rem;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
        }
        
        .container {
            max-width: 1200px;
        }
        
        .empty-state {
            text-align: center;
            padding: 3rem;
            color: #6c757d;
        }
        
        .empty-state i {
            font-size: 4rem;
            margin-bottom: 1rem;
            color: #dee2e6;
        }
        
        @media (max-width: 768px) {
            .header-container {
                padding: 1.5rem 0;
            }
            
            .page-title {
                font-size: 1.8rem;
            }
            
            .card {
                width: 100% !important;
            }
        }
    </style>
</head>

<body>
    <!-- Barra de Navegación -->
    <nav class="navbar">
        <div class="nav-container">
            <ul class="nav-links">
                
                <li><a href="<?= base_url('pagos') ?>">Pagos</a></li>
                <li><a href="<?= base_url('usuarios') ?>">Usuarios</a></li>
                <li><a href="<?= base_url('inicio') ?>"> Inicio</a></li>
                 <li><a href="<?= base_url('eventos') ?>"> Eventos</a></li>
            </ul>
        </div>
    </nav>

    <div class="header-container">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="page-title">Equipos</h1>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fas fa-plus-circle me-2"></i>Agregar Equipo
                </button>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Equipo</h1>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?=base_url('agregar_equipo');  ?>" method="post">
                            <label for="txt_codigo" class="form-label">Equipo id</label>
                            <input type="number" name="txt_codigo" id="txt_codigo" class="form-control" required>
                            
                            <label for="txt_nombre" class="form-label">Nombre del Equipo</label>
                            <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" required>
                            
                            <label for="txt_categoria" class="form-label">Categoría</label>
                            <input type="text" name="txt_categoria" id="txt_categoria" class="form-control" required>
                            
                            <label for="txt_entrenador" class="form-label">Entrenador id</label>
                            <input type="number" name="txt_entrenador" id="txt_entrenador" class="form-control" required>
                            
                            <label for="txt_fecha" class="form-label">Fecha de Creación</label>
                            <input type="date" name="txt_fecha" id="txt_fecha" class="form-control" required>
                            
                            <button type="submit" class="form-control btn btn-primary mt-3">Guardar Equipo</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cards de equipos -->
        <div class="d-flex flex-wrap gap-4 justify-content-center">
            <?php if (!empty($datos)): ?>
                <?php foreach ($datos as $equipo): ?>
                <div class="card" style="width: 18rem;">
                    <img src='https://thumbs.dreamstime.com/b/logo-de-la-liga-f%C3%BAtbol-logotipo-plantilla-europeo-con-corona-bal%C3%B3n-deportivo-y-fondo-escudo-emblema-vectorial-202469991.jpg' class="card-img-top" alt="<?=$equipo['nombre_equipo'];?>">
                    <div class="card-body">
                        <h5 class="card-title"><?=$equipo['nombre_equipo'];?></h5>
                        <p class="card-text">
                            <strong>ID:</strong> <?=$equipo['id_equipo'];?><br>
                            <strong>Categoría:</strong> <?=$equipo['categoria'];?><br>
                            <strong>Entrenador ID:</strong> <?=$equipo['id_entrenador'];?><br>
                            <strong>Fecha:</strong> <?=$equipo['fecha_creacion'];?>
                        </p>
                        <div class="d-flex justify-content-between mt-3">
                            <a href="<?=base_url('buscar_equipo/').$equipo['id_equipo'];?>" class="btn btn-info">Editar</a>
                            <a href="<?=base_url('eliminar_equipo/').$equipo['id_equipo'];?>" class="btn btn-danger">Eliminar</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="empty-state">
                    <i class="fas fa-futbol"></i>
                    <h3>No hay equipos registrados</h3>
                    <p>Comienza agregando tu primer equipo con el botón "Agregar Equipo"</p>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Agregar Font Awesome para iconos -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>