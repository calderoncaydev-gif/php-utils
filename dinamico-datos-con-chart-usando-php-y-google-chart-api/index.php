<?php 
include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dinamico datos con chart usando php y google chart api</title>
</head>
<body>
	<?php 
	// Consulta sql para contar la cantidad por ciudad
	$sql = "SELECT ciudad,count(id) as totalusers FROM `empleados` GROUP BY ciudad ORDER BY ciudad";
	$records = mysqli_query($con, $sql);
	$data = array();
	while($row = mysqli_fetch_assoc($records)){
		$data[] = $row;
	}

	$jsonData = json_encode($data);
	?>
	<!-- Almacenamos JSON data -->
	<textarea style="display:none" id="chartinfo"><?= $jsonData ?></textarea>

	<!-- Chart generando grafico-->
	<div id="ciudadChart" style="width:100%;  height:500px;"></div>
	
	<!-- Script JS -->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript" src="chart.js"></script>
</body>
</html>