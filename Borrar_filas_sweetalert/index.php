<?php include("db.php");?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Cómo eliminar fila de tabla usando Sweetalert2</title>
<link rel="stylesheet" type="text/css" href="asset/sweet_alert/sweetalert2.min.css">
<!--Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<main class="flex-shrink-0">
  <div class="container">
    <div class="card mt-3">
      <div class="card-header"> Cómo eliminar fila de tabla usando Sweetalert2 </div>
      <div class="card-body">
        <form method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-4">
              <label for="nombres" class="form-label">Nombres</label>
              <input type="text" id="nombres" name="nombres" placeholder="Nombres"  class="form-control" required />
            </div>
            <div class="col-md-4">
              <label for="apellidos" class="form-label">Apellidos</label>
              <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos"  class="form-control" required>
            </div>
            <div class="col-md-4">
              <label for="apellidos" class="form-label">Pais</label>
              <input type="text" id="address" name="pais" placeholder="Ingrese Pais"  class="form-control" required />
            </div>
            <div class="col-md-4">
              <button type="submit" name="submit" value="Submit"  class="btn btn-primary  mr-2 mt-4">Registrar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="card">
      <div class="card-header"> Lista de Clientes </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <table class="table table-bordered table-striped">
              <thead class="table-dark">
              <th>No.</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Pais</th>
                <th>Accion</th>
                  </thead>
              <tbody id="tbody">
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<script src="asset/jquery.min.js"></script> 
<script src="asset/sweet_alert/sweetalert2.min.js"></script>
<?php
	if(isset($_POST['submit']))
	{
		$nombres = $_POST['nombres'];
		$apellidos = $_POST['apellidos'];
		$pais = $_POST['pais'];
        $query = $conn->prepare("INSERT INTO `clientes`(`nombres`, `apellidos`, `pais`)
        VALUES (:nombres,:apellidos,:pais)");
        $query->bindParam(":nombres", $nombres);
        $query->bindParam(":apellidos", $apellidos);
        $query->bindParam(":pais", $pais);
	
		if($query->execute())
			{?>
<script>
					swal.fire({
						'title': 'Gracias',
						'text': 'Guardado exitosamente',
						'icon': 'success',
						'type': 'success'
					})
				</script>
<?php	  
			}
		}
		?>
<script type="text/javascript">
				$(document).ready(function(){
					fetch();

					$(document).on('click', '.borrar_cliente', function(){
						var id = $(this).data('id');

						swal.fire({
							title: 'Estas seguro?',
							text: "No podrás revertir esto.!",
							icon: 'warning',
							showCancelButton: true,
							confirmButtonColor: '#3085d6',
							cancelButtonColor: '#d33',
							confirmButtonText: 'Si, bórralo!',
						}).then((result)=> {
							if (result.value){
								$.ajax({
									url: 'api.php?action=delete',
									type: 'POST',
									data: 'id='+id,
									dataType: 'json'
								})
								.done(function(response){
									swal.fire('Borrado!', response.message, response.status);
									fetch();
								})
								.fail(function(){
									swal.fire('Oops...', 'Algo salio mal !', 'error');
								});
							}

						})

					});
				});

				function fetch(){
					$.ajax({
						method: 'POST',
						url: 'api.php',
						dataType: 'json',
						success: function(response){
							$('#tbody').html(response);
						}
					});
				}
			</script>
</body>
</html>