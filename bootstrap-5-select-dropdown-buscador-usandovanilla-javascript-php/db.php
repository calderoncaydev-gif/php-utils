<?php
// Conexion método PDO::setAttribute
try {
    $dsn = "mysql:host=localhost;dbname=select5";
    $dbh = new PDO($dsn, "root", "");
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    echo $e->getMessage();
}

?>