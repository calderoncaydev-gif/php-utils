<?php
include_once "./vendor/autoload.php";
use Dompdf\Dompdf;
$dompdf = new Dompdf(['enable_remote' =>true]);
ob_start();
// Incluimos fichero de contenido con estilos externos
include "./tabla_con_estilos.php";
$html = ob_get_clean();
$dompdf->loadHtml($html);
$dompdf->render();
header("Content-type: application/pdf");
header("Content-Disposition: inline; filename=documento1.pdf");
echo $dompdf->output();
?>