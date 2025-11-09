<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modificar Pago</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4"></div>
            <h1>Editar Pago</h1>
            <form action="<?=base_url('modificar_pago')?>" method="post">

                <label for="txt_codigo" class="form-label">Codigo Pago</label>
                <input type="number" name="txt_codigo" id="txt_codigo" class="form-control"
                    value="<?=$datos['id_pago'];?>" readonly>

                <label for="txt_usuario" class="form-label">Codigo Usuario</label>
                <input type="number" name="txt_usuario" id="txt_usuario" class="form-control"
                    value="<?=$datos['id_usuario'];?>">

                <label for="txt_concepto" class="form-label">Concepto</label>
                <input type="text" name="txt_concepto" id="txt_concepto" class="form-control"
                    value="<?=$datos['concepto'];?>">

                <label for="txt_monto" class="form-label">Monto</label>
                <input type="number" name="txt_monto" id="txt_monto" class="form-control"
                    value="<?=$datos['monto'];?>">

                <label for="txt_pago" class="form-label">Fecha Pago</label>
                <input type="date" name="txt_pago" id="txt_pago" class="form-control"
                value="<?=$datos['fecha_pago'];?>">

                <label for="txt_metodo" class="form-label">Metodo Pago</label>
                <input type="text" name="txt_metodo" id="txt_metodo" class="form-control"
                value="<?=$datos['metodo_pago'];?>">

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