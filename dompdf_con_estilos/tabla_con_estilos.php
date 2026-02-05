<?php
$paises = ["Argentina", "Brasil", "Colombia", "Ecuador", "Venezuela"];
?>
<head>
<link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/extras/dompdf_con_estilos/bootstrap/css/bootstrap.min.css">	
</head>
<h3>Paises</h3>
<table class="table table-bordered table-sm" style="width:300px">
    <thead>
        <tr class="table-secondary">
            <th>Nro.</th>
            <th>Nombre Pais</th>
        </tr>
    </thead>
    <tbody>
    <?php $n = 0; foreach ($paises as $pais) { $n++;?>
        <tr>
            <td><?php echo $n; ?></td>
            <td><?php echo $pais; ?></td>
        </tr>
    <?php }?>
    </tbody>
</table>