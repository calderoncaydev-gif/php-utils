<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Borrado de archivo</title>
<script src="assets/sweetalert2.all.js"></script>
<script src="assets/jquery.min.js"></script>
</head>

<body>
<?php

include "dbcon.php";
include "class.upload.php";

/// mostrar errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$error = false;

$files = array();
foreach ($_FILES['image'] as $k => $l) {
 foreach ($l as $i => $v) {
 if (!array_key_exists($i, $files))
   $files[$i] = array();
   $files[$i][$k] = $v;
 }
}

foreach ($files as $file) {
  $handle = new Upload($file);
  if ($handle->uploaded) {
    $handle->process("uploads/");
    if ($handle->processed) {
    	// usaremos la funcion insertar_image de la libreria dbcon.php
    	insertar_image("uploads/",$handle->file_dst_name);
    } else {
	  $error = true;
      echo 'Error: ' . $handle->error;
    }
  } else {
   	$error = true;
    echo 'Error: ' . $handle->error;
  }
  unset($handle);
}   
// Si todo esta correcto imprimimos este resultado
if(!$error){
	print "<h4>Cargado con exito!</h4>";
	print "<ul><li><a href='./formulario.php'>Agregar mas</a></li>";
	print "<li><a href='./imagenes.php'>Ver imagenes</a></li>";
	print "<li><a href='./archivos.php'>Ver Archivos</a></li></ul>";
	echo '<script>
		  swal({
			  type: "success",
			  title: "¡Archivo subido correctamente!",
			  showConfirmButton: true,
			  confirmButtonText: "Cerrar"
		  }).then(function(result){
			  if(result.value){
				  window.location = "archivos.php";
			  }
		  });
		  </script>';
}

?>
</body>
</html>