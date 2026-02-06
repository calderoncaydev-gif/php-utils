<?php
session_start();

$host = "localhost";    /* Host  */
$user = "root";         /* Usuario */
$password = "";         /* Password */
$dbname = "grafico_chart";   /* Database nombre */

// Creamos la conexion mysql
$con = mysqli_connect($host, $user, $password,$dbname);

// Comprobamos la cnexion
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?> 