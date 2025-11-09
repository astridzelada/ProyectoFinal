<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modificar Equipo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4"></div>
            <h1>Editar Equipo</h1>
            <form action="<?=base_url('modificar_equipo')?>" method="post">

                <label for="txt_codigo" class="form-label">Codigo Equipo</label>
                <input type="number" name="txt_codigo" id="txt_codigo" class="form-control"
                    value="<?=$datos['id_equipo'];?>" readonly>

                <label for="txt_nombre" class="form-label">Nombre Equipo</label>
                <input type="text" name="txt_nombre" id="txt_nombre" class="form-control"
                    value="<?=$datos['nombre_equipo'];?>">

                <label for="txt_categoria" class="form-label">Categoria</label>
                <input type="text" name="txt_categoria" id="txt_categoria" class="form-control"
                    value="<?=$datos['categoria'];?>">

                <label for="txt_entrenador" class="form-label">Id Entrenador</label>
                <input type="number" name="txt_entrenador" id="txt_entrenador" class="form-control"
                    value="<?=$datos['id_entrenador'];?>">

                <label for="txt_creacion" class="form-label">Fecha Creacion</label>
                <input type="date" name="txt_creacion" id="txt_creacion" class="form-control"
                value="<?=$datos['fecha_creacion'];?>">

                <button type="submit" class="form-control btn btn-primary mt-2">
                    Guardar Cambios
                </button>  
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>