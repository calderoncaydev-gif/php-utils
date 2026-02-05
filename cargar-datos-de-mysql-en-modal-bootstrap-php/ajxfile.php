<?php
include_once("db.php");

$perid = 0;
if(isset($_POST['perid'])){
    $perid = htmlentities($_POST['perid']);
}

$query = $db->prepare("SELECT * FROM `tbl_personal` WHERE id = :id");
$query->bindParam(":id", $perid);
$query->execute();
$data = $query->fetchAll();

$mydata = "<table class='table table-hover' width='100%'>";
foreach($data as $row){
    $id = $row['id'];
    $per_nombre = $row['per_nombre'];
    $salario = $row['salario'];
    $genero = $row['genero'];
    $ciudad = $row['ciudad'];
    $email = $row['email'];
    $fecha = $row['fecha_creacion'];
    
    $mydata .= "<tr>";
    $mydata .= "<th scope='row'>Nombres : </th><td>".$per_nombre."</td>";
    $mydata .= "</tr>";

    $mydata .= "<tr>";
    $mydata .= "<th scope='row'>Salario : </th><td>".$salario."</td>";
    $mydata .= "</tr>";

    $mydata .= "<tr>";
    $mydata .= "<th scope='row'>Genero : </th><td>".$genero."</td>";
    $mydata .= "</tr>";

    $mydata .= "<tr>";
    $mydata .= "<th scope='row'>Ciudad : </th><td>".$ciudad."</td>";
    $mydata .= "</tr>";
    
    $mydata .= "<tr>";
    $mydata .= "<th scope='row'>Email : </th><td>".$email."</td>";
    $mydata .= "</tr>";  
  
    $mydata .= "<tr>";
    $mydata .= "<th scope='row'>Fecha : </th><td>".$fecha."</td>";
    $mydata .= "</tr>";

}
$mydata .= "</table>";

echo $mydata;
exit;