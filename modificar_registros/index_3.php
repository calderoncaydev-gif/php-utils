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
     'titulo'=>'Prueba titulo 2.2 - Modificacion', 
     'contenido' => 'Contenido 2.2 - Modificacion', 
     'id' => 2
];
// Consulta SQL de actualización
$sql = "UPDATE posts SET titulo=:titulo, contenido=:contenido WHERE id=:id";
// Ejecutamos la consulta SQL
$query = $db->prepare($sql);

// Declaramos opciones configurables
$query->bindParam(':id', $data['id'], PDO::PARAM_INT);
$query->bindParam(':titulo', $data['titulo']);
$query->bindParam(':contenido', $data['contenido']);
//Impresion de resultados
if($query->execute()) {
     echo "Noticia modificado correctamente!";
}

