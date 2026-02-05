<?php
$hostname = 'localhost';
$usuario = 'root';
$password = 'root';
$database = 'demo';
$prefix   = 'wp_';

/// No configurar a partir de aquí
$db = new mysqli($hostname, $usuario, $password, $database);

if ($db->connect_error) {
    die("la conexión ha fallado: " . $db->connect_error);
}

// Consulta SQL para obtener las tablas por prefijo
$sql = 'SHOW TABLES FROM '.$database." LIKE '".$prefix."%'";
$result = mysqli_query($db, $sql);

if( ! $result or mysqli_num_rows($result) == 0)
{
	die('No se ha obtenido ningún resultado para la consulta: '.$sql);
}
$tables = "";
while ($row = mysqli_fetch_row($result)) {
	$tables .=  $row[0].", ";
}

//Eliminar la coma final
$tables = substr($tables, 0, strlen($tables) - 2);

if( isset($_GET['confirm']) and $_GET['confirm'] == 1)
{
	$sql = 'DROP TABLE '.$tables;
	
	if( mysqli_query($db, $sql) )
	{
		echo 'La operación se ha realizado con éxito';
	}
	else
	{
		echo 'Las tablas no han podido ser borradas';
	}
}
// Mostrar formulario de confirmación
else
{	
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Borrar tablas por busqueda de prefijo</title>
</head>

<body>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                Lista de tablas que serán borradas:
            </div>
            <div class="card-body">
                <?php
	echo $tables;
	?>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header">
                Acciones:
            </div>
            <div class="card-body">
                <form method="get" action="<?php echo basename(__FILE__); ?>" name="confirm">
                    <table style="text-align: left; width: 100%; margin-left: auto; margin-right: auto;" border="0"
                        cellpadding="2" cellspacing="2">
                        <tbody>
                            <tr>
                                <td style="vertical-align: top; text-align: center;">¿Desea realmente eliminar las
                                    tablas?<br>
                                    <button value="1" name="confirm" class="btn btn-danger">Eliminar</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>

    </div>
</body>

</html>
<?php
}
?>