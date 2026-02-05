<?php
	//connection
    include("db.php");
	$action = 'fetch';
 
	if(isset($_GET['action'])){
		$action = $_GET['action'];
	}
 
	if($action == 'fetch'){
		$output = '';
		$query = $conn->prepare("SELECT * FROM clientes order by id desc");
		$query->execute();
		$data = $query->fetchAll();
		$no=1;
		foreach($data as $row){
			$output .= "
				<tr>
					<td>". $no."</td>
					<td>".$row['nombres']."</td>
					<td>".$row['apellidos']."</td>
					<td>".$row['pais']."</td>
					<td><button class='btn btn-sm btn-danger borrar_cliente' data-id='".$row['id']."'>Borrar</button></td>
				</tr>
			";
			$no=$no+1;
		}
 
		echo json_encode($output);
	}
 
	if($action == 'delete'){
		$id = $_POST['id'];
		$output = array();
        $query = $conn->prepare("DELETE FROM `clientes` WHERE id=:id");
        $query->bindParam(":id", $id);
        $query->execute();
		if($query->execute()){
			$output['status'] = 'success';
			$output['message'] = 'Cliente eliminado exitosamente';
		}
		else{
			$output['status'] = 'error';
			$output['message'] = 'Algo salió mal en la eliminación del cliente';
		}
 
		echo json_encode($output);
 
	}
 