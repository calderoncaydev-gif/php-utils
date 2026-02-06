<?php require_once "pagination-controller.php"; ?>
<?php $page = (isset($_GET["page"])) ? $_GET["page"] : 1; ?>
<?php Pagination::config($page, 10, "paises", null , 10); ?>
<?php $data = Pagination::data(); ?>
<?php $active = ""; ?>
<?php if ($data["error"]): header("location: ./paginacion.php"); endif;?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<title>Paginación PDO con PHP</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <h3 class="title-table">Estados del mundo</h3>
  <table class="table">
    <thead>
      <tr class="table-primary">
        <th>ID</th>
        <th>Iso</th>
        <th>Nombre Pais</th>
        <th>Fecha</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach (Pagination::show_rows("id") as $row): ?>
      <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["iso"]; ?></td>
        <td><?php echo $row["nombre"]; ?></td>
        <td><?php echo $row["fecha"]; ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <nav aria-label="Page navigation example">
    <ul class="pagination">
	  <?php if ($data["actual-section"] != 1): ?> 		  			
      <li class="page-item"><a class="page-link" href="paginacion.php?page=1">Inicio</a></li>
      <li class="page-item"><a class="page-link" href="paginacion.php?page=<?php echo $data['previous']; ?>">&laquo;</a></li>
	  <?php endif; ?>
      <?php for ($i = $data["section-start"]; $i <= $data["section-end"]; $i++): ?>
      <?php if ($i > $data["total-pages"]): break; endif; ?>
      <?php $active = ($i == $data["this-page"]) ? "active" : ""; ?>
      <li class="page-item <?php echo $active; ?>"> <a class="page-link" href="paginacion.php?page=<?php echo $i; ?>"> <?php echo $i; ?> </a> </li>
      <?php endfor; ?>
      <?php if ($data["actual-section"] != $data["total-sections"]): ?>
      <li class="page-item"><a class="page-link" href="paginacion.php?page=<?php echo $data['next']; ?>">&raquo;</a></li>
      <li class="page-item"><a class="page-link" href="paginacion.php?page=<?php echo $data['total-pages']; ?>">Final</a></li>
      <?php endif; ?>
    </ul>
  </nav>
</div>
</body>
</html>
