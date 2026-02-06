<?php 
include_once("db.php");

$sql = "
    SELECT pais_nombre FROM sql_paises 
    ORDER BY pais_nombre ASC
";

$resultados = $dbh->query($sql);

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="library/bootstrap-5/bootstrap.min.css" rel="stylesheet" />
<script src="library/bootstrap-5/bootstrap.bundle.min.js"></script>
<script src="library/dselect.js"></script>
<title>Bootstrap 5 Select Dropdown usando JavaScript con PHP</title>
<style>
.dropdown-menu {
	width: 100%;padding: 0rem 0;
}
</style>
</head>
<body>
<div class="container mt-4">
  <div class="card">
    <div class="card-header"> Bootstrap 5 Select Dropdown usando JavaScript con PHP </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-3">&nbsp;</div>
        <div class="col-md-6">
          <select name="seleccion_box" class="form-select" id="seleccion_box">
            <option value="">Seleccione Pais</option>
            <?php 
                        foreach($resultados as $row)
                        {
                            echo '<option value="'.$row["pais_nombre"].'">'.$row["pais_nombre"].'</option>';
                        }
                        ?>
          </select>
        </div>
        <div class="col-md-3">&nbsp;</div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<script>

    var select_box_element = document.querySelector('#seleccion_box');

    dselect(select_box_element, {
        search: true
    });

</script>