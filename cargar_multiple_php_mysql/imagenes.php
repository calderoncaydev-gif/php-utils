<?php
include "dbcon.php";
$images = get_images();
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
      <div class="card-header"> Lista de imagenes o archivos </div>
      <div class="card-body">
        <div class="row">
          <?php if(count($images)>0):?>
          <?php foreach($images as $img):?>
          <div class="col-md-3">
            <div class="card mb-3"  style="max-width: 100%;"> <img src="<?php echo $img->carpeta.$img->src; ?>" class="card-img-top img-thumbnail" alt="<?php echo $img->carpeta.$img->src; ?>">
              <div class="card-footer bg-transparent border-success"> <a class="btn btn-primary" href="./descargas.php?id=<?php echo $img->id; ?>">Descargar</a> <a class="btn btn-danger" href="./borrar.php?id=<?php echo $img->id; ?>">Eliminar</a> </div>
            </div>
          </div>
          <?php endforeach;?>
          <?php else:?>
          <h4>No hay imagenes!</h4>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</main>
</body>
</html>