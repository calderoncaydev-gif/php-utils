<?php
$host = "localhost"; /* Host */
$usuario = "root"; /* Usuario MySQL */
$password = "root"; /* Password MySQL*/
$dbname = "dbpersonal"; /* Database */

$db = new PDO('mysql:host='.$host.';dbname='.$dbname.'', $usuario, $password);
?>