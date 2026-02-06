<?php 
$csvFileContent= file_get_contents("animales.csv");
// Convierte el contenido del archivo CSV en una matriz lineal
$csvLineArray = explode("\n", $csvFileContent);
// La fila de formularios da como resultado un formato de matriz
$resultado = array_map("str_getcsv", $csvLineArray);
$jsonObject = json_encode($resultado);
print_r($jsonObject);
?>