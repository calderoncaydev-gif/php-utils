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
      <div class="card-header"> Subir imagenes o archivos </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <form enctype="multipart/form-data" method="post" action="cargar.php">
              <div class="mb-3">
                <label for="formFile" class="form-label">Cargar uno o multiples ficheros</label>
                <input class="form-control" name="image[]" required="" type="file" multiple >
              </div>
              <button class="btn btn-primary" type="submit">Subir archivos</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
</body>
</html>
