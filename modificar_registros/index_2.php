<?php
// Conexion PDO MYSQL
$host     = 'localhost';
$db       = 'update_pdo';
$user     = 'root';
$password = '';

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
     $db = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

} catch (PDOException $e) {
     echo $e->getMessage();
}
// Datos e información de Prueba
$data = [
     'titulo'=>'Prueba titulo 2.1 - Modificacion', 
     'contenido' => 'Contenido 2.1 - Modificacion', 
     'id' => 1
];
// Consulta SQL de actualización
$sql = "UPDATE noticias SET titulo=:titulo, contenido=:contenido WHERE id=:id";
// Ejecutamos la consulta SQL
$statement = $db->prepare($sql);
//Impresion de resultados
if($statement->execute($data)) {
  echo "Noticia modificado correctamente!";
}

?>