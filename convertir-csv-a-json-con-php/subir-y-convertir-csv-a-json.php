<?php
if (isset($_POST["convertir"])) {
    if ($_FILES['csv_file_input']['name']) {
		$ext = pathinfo($_FILES['csv_file_input']['name'], PATHINFO_EXTENSION);
        if ($ext == 'csv') {
            $jsonOutput = array();
            $csvFileContent = file_get_contents($_FILES['csv_file_input']['tmp_name']);
            $result = array_map("str_getcsv", explode("\n", $csvFileContent));
            $header = $result[0];
            $recordCount = count($result);
            for ($i = 1; $i < $recordCount; $i++) {
                // Asocia los datos con el índice de cadena en la matriz de encabezado
                $data = array_combine($header, $result[$i]);
                $jsonOutput[$i] = $data;
            }
            header('Content-disposition: attachment; filename=salida.json');
            header('Content-type: application/json');
            echo json_encode($jsonOutput);
            exit();
        } else {
            $error = 'Extension de archivo invalido ';
        }
    } else {
        $error = 'CSV Invalido y/o vacio';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Convertir CSV a JSON</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container"> <a class="navbar-brand" href="#">BaulPHP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarsExample07">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"> <a class="nav-link" href="#">Portada <span class="sr-only">(current)</span></a> </li>
      </ul>
    </div>
  </div>
</nav>
<hr>
<div class="container">
  <div class="card">
    <div class="card-header bg-primary text-white"> Cargar y convertir CSV a JSON </div>
    <div class="card-body">
      <form name="frmUpload" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <div class="col-md-6">
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" name="csv_file_input" accept=".csv">
                <label class="custom-file-label" for="inputGroupFile04">Cargar archivo CSV</label>
              </div>
              <div class="input-group-append"> </div>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-6">
            <button class="btn btn-primary" name="convertir">Convertir a CSV y Descargar</button>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-6">
            <?php
        if (!empty($error)) 
        { 
        ?>
            <div class="alert alert-danger" role="alert"> <?php echo $error; ?> </div>
            <?php 
        } 
        ?>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script> 
<script>
      bsCustomFileInput.init()

      var btn = document.getElementById('btnResetForm')
      var form = document.querySelector('form')
      btn.addEventListener('click', function() {
        form.reset()
      })
    </script>
</body>
</html>