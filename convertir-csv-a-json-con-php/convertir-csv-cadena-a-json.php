<?php
$csvString = "Id,Nombre,Tipo,Rol
1,Leon,Salvaje,Jefe
2,Tigre,Salvaje,CEO
3,Jaguar,Salvaje,Desarrollador Senior
4, Pantera, Salvaje, Desarrollador Junior
5, Gato, Domestico, Practicante";

$lineContent = array_map("str_getcsv", explode("\n", $csvString));

$headers = $lineContent[0];
$jsonArray = array();
$rowCount = count($lineContent);
for ($i=1;$i<$rowCount;$i++) {
    foreach ($lineContent[$i] as $key => $column) {
        $jsonArray[$i][$headers[$key]] = $column;
    }
}

header('Content-type: application/json; charset=UTF-8');
$animales = 'animales'.time().'.json';
$fp = fopen($animales, 'w');
fwrite($fp, json_encode($jsonArray, JSON_PRETTY_PRINT));
fclose($fp);

$data = json_encode($jsonArray, JSON_PRETTY_PRINT);
header("Content-disposition: attachment; filename=".$animales."");
header('Expires: 0'); //No caching allowed
header('Cache-Control: must-revalidate');
header('Content-Length: ' . strlen($data));
file_put_contents('php://output', $data);
// Revise la carpeta del script para visualizar el json creado
?>