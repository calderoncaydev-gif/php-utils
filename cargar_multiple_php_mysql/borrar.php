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

if(isset($_GET["id"])){
	include "dbcon.php";
	$img = get_img($_GET["id"]);
	if($img!=null){
		borrar($img->id);
		unlink($img->carpeta.$img->src);
		print "<h4>Eliminado Exitosamente!</h4>";
	print "<ul><li><a href='./formulario.php'>Agregar mas</a></li>";
	print "<li><a href='./imagenes.php'>Ver imagenes</a></li>";
	print "<li><a href='./archivos.php'>Ver Archivos</a></li></ul>";
	echo '<script>
		  swal({
			  type: "success",
			  title: "¡El archivo ha sido borrado correctamente!",
			  showConfirmButton: true,
			  confirmButtonText: "Cerrar"
		  }).then(function(result){
			  if(result.value){
				  window.location = "archivos.php";
			  }
		  });
		  </script>';

	}
}
?>
</body>
</html>