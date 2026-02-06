<?php
include_once("config.php");
$sql = "SELECT id,personal_nombre as nombre FROM personal LIMIT 30";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$emp_data = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {
	$emp_data[] = $rows;
}
echo json_encode($emp_data);
exit;
?>