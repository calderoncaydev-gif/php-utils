<?php 
include_once("db.php");
?>
<!doctype html>
<html>
<head>
<title>Cargar modal dinamico con Ajax PHP</title>

<!-- CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Script -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body >
<div class="container mt-4">
  <div class="card">
    <div class="card-header"> Cargar modal dinámico con Ajax PHP </div>
    <div class="card-body">
      <table style='border-collapse: collapse;' class='table table-hover'>
        <thead class="table-primary">
          <tr>
            <th>Nombre</th>
            <th>Genero</th>
            <th>Email</th>
            <th>&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          <?php 
    $query = $db->prepare("SELECT * FROM `tbl_personal`");
    $query->execute();
    $data = $query->fetchAll();

	foreach($data as $row){
			$id = $row['id'];
			$nombre = $row['per_nombre'];
			$genero = $row['genero'];
			$email = $row['email'];

			echo "<tr>";
			echo "<td>".$nombre."</td>";
			echo "<td>".$genero."</td>";
			echo "<td>".$email."</td>";
			echo "<td><button class='btn btn-primary perinfo' data-id='".$id."'>Detalles</button></td>";
			echo "</tr>";
		}
		?>
        </tbody>
      </table>
    </div>
  </div>
  <script type='text/javascript'>
            $(document).ready(function(){
                $('.perinfo').click(function(){
                    var perid = $(this).data('id');
                    // AJAX solicitud
                    $.ajax({
                        url: 'ajxfile.php',
                        type: 'post',
                        data: {perid: perid},
                        success: function(response){ 
                            $('.modal-body').html(response); 
                            // Cargamos el Modal dinamico
                            $('#perModal').modal('show'); 
                        }
                    });
                });
            });
            </script> 
  <!-- Modal -->
  <div class="modal fade" id="perModal" >
    <div class="modal-dialog"> 
      
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Detalles de Personal</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body"> </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
