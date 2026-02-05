<?php
$paises = ["Argentina", "Brasil", "Colombia", "Ecuador", "Venezuela"];
?>
<style>
table {
    border-collapse: collapse;
}
 
table,
th,
td {
    border: 1px solid black;
}
 
th,
td {
    padding: 6px;
}
th{ background:#5E5151; color:white}
</style>
<h3>Paises</h3>
<table>
    <thead>
        <tr>
            <th>Nro.</th>
            <th>Nombre Pais</th>
        </tr>
    </thead>
    <tbody>
    <?php $n = 0; foreach ($paises as $pais) {$n++;?>
        <tr>
            <td><?php echo $n; ?></td>
            <td><?php echo $pais; ?></td>
        </tr>
    <?php }?>
    </tbody>
	</table>