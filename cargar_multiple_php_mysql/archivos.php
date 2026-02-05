<?php
include "dbcon.php";
$files = get_images();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Subir Multiples Imagenes y/o Archivos</title>
<script src="assets/sweetalert2.all.js"></script>
<script src="assets/jquery.min.js"></script>
<!--Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<main class="flex-shrink-0">
  <div class="container">
    <div class="card mt-3">
      <div class="card-header"> Gestor de Imagenes </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-2">
            <div class="d-grid gap-2"> <a class="btn btn-primary" href="./formulario.php">Agregar archivos</a> </div>
          </div>
          <div class="col-md-2">
            <div class="d-grid gap-2"> <a class="btn btn-primary" href="./imagenes.php">Imagenes</a> </div>
          </div>
          <div class="col-md-2">
            <div class="d-grid gap-2"> <a class="btn btn-primary" href="./archivos.php">Mis archivos</a> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header"> Lista de Archivos </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <?php if(count($files)>0):?>
            <br>
            <table border="1" class="table tablas table-bordered table-striped">
              <thead class="table-dark">
              <th>Carpeta</th>
                <th>Nombre de archivo</th>
                <th>Descarga</th>
                <th>Accion</th>
                  </thead>
              <tbody id="tbody">
                <?php foreach($files as $f):?>
                <tr>
                  <td><?php echo $f->carpeta;?></td>
                  <td><?php echo $f->src;?></td>
                  <td><a class="btn btn-primary" href="./descargas.php?id=<?php echo $f->id; ?>">Descargar</a></td>
                  <td><button class="btn btn-danger btnEliminar" type="button" idf="<?php echo $f->id; ?>">Eliminar</button></td>
                </tr>
                <?php endforeach;?>
              </tbody>
            </table>
            <?php else:?>
            <h4>No hay imagenes!</h4>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<script>
/*=============================================
ELIMINAR USUARIO
=============================================*/
$(".tablas").on("click", ".btnEliminar", function(){

  var idfile = $(this).attr("idf");

  swal({
    title: '¿Está¡ seguro de borrar el archivo?',
    text: "Si no lo está¡ puede cancelar la acción!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Cancelar',
      confirmButtonText: 'Si, borrar archivo!'
  }).then(function(result){

    if(result.value){

      window.location = "borrar.php?id="+idfile;

    }

  })

})



</script>
</body>
</html>
