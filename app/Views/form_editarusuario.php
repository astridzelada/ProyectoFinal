<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modificar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4"></div>
            <h1>Editar Usuario</h1>
            <form action="<?=base_url('modificar_usuario')?>" method="post">

                <label for="txt_codigo" class="form-label">Codigo Usuario</label>
                <input type="number" name="txt_codigo" id="txt_codigo" class="form-control"
                    value="<?=$datos['id_usuario'];?>" readonly>

                <label for="txt_nombre" class="form-label">Nombre</label>
                <input type="text" name="txt_nombre" id="txt_nombre" class="form-control"
                    value="<?=$datos['nombre'];?>">

                <label for="txt_apellido" class="form-label">Apellido</label>
                <input type="text" name="txt_apellido" id="txt_apellido" class="form-control"
                    value="<?=$datos['apellido'];?>">

                <label for="txt_fechanac" class="form-label">Fecha Nacimiento</label>
                <input type="date" name="txt_fechanac" id="txt_fechanac" class="form-control"
                    value="<?=$datos['fecha_nacimiento'];?>">

                <label for="txt_dpi" class="form-label">DPI</label>
                <input type="number" name="txt_dpi" id="txt_dpi" class="form-control"
                value="<?=$datos['DPI'];?>">

                <label for="txt_telefono" class="form-label">Telefono</label>
                <input type="number" name="txt_telefono" id="txt_telefono" class="form-control"
                value="<?=$datos['telefono'];?>">

                <label for="txt_correo" class="form-label">Correo Electronico</label>
                <input type="text" name="txt_correo" id="txt_correo" class="form-control"
                value="<?=$datos['email'];?>">

                <label for="txt_direccion" class="form-label">Direccion</label>
                <input type="text" name="txt_direccion" id="txt_direccion" class="form-control"
                value="<?=$datos['direccion'];?>">

                <label for="txt_rol" class="form-label">Rol</label>
                <input type="text" name="txt_rol" id="txt_rol" class="form-control"
                value="<?=$datos['rol'];?>">

                <label for="txt_categoria" class="form-label">Categoria</label>
                <input type="text" name="txt_categoria" id="txt_categoria" class="form-control"
                value="<?=$datos['categoria'];?>">

                <label for="txt_posicion" class="form-label">Posicion</label>
                <input type="text" name="txt_posicion" id="txt_posicion" class="form-control"
                value="<?=$datos['posicion'];?>">

                <label for="txt_licencia" class="form-label">Licencia</label>
                <input type="text" name="txt_licencia" id="txt_licencia" class="form-control"
                value="<?=$datos['licencia'];?>">

                <label for="txt_especialidad" class="form-label">Especialidad</label>
                <input type="text" name="txt_especialidad" id="txt_especialidad" class="form-control"
                value="<?=$datos['especialidad'];?>">

                <label for="txt_estado" class="form-label">Estado</label>
                <input type="text" name="txt_estado" id="txt_estado" class="form-control"
                value="<?=$datos['estado'];?>">

                <button type="submit" class="form-control btn btn-primary mt-2">
                    Guardar Cambios
                </button>  
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>