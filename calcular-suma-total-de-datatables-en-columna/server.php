<?php
 
// DB nombre de tabla a usar
$table = 'tbl_attendance';
 
// Llave primaria en Tabla
$primaryKey = 'id';
 
// Matriz de columnas de la base de datos que deben leerse y enviarse a DataTables.
// El parámetro `db` representa el nombre de la columna en la base de datos, mientras que `dt`
// el parámetro representa el identificador de la columna DataTables. En este caso sencillo
// índices
$columns = array(
	array( 'db' => 'subject', 'dt' => 0 ),
	array( 'db' => 'monday', 'dt' => 1 ),
	array( 'db' => 'tuesday',  'dt' => 2 ),
	array( 'db' => 'wednesday', 'dt' => 3 ),
	array( 'db' => 'thursday', 'dt'=> 4),
	array( 'db' => 'friday', 'dt' => 5 )   
);
 
// SQL server datos de conexion
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'suma',
    'host' => 'localhost'
);
 
 
/* * * * * * * * * * * * * * * * * * * * 
  * Si solo desea usar la configuración básica para DataTables con PHP
  * del lado del servidor, no hay necesidad de editar debajo de esta línea.
  */
 
require( 'vendor/datatables/ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);