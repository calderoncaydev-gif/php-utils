<?php
/// mostrar errores
function conexion(){
	return new mysqli("localhost","root","","multiple_image");
}

function insertar_image($folder, $image){
	$conn = conexion();
	$conn->query("insert into imagenes (carpeta,src,f_creacion) values ('$folder','$image',NOW())");
}

function get_images(){
	$images = array();
	$conn = conexion();
	$query=$conn->query("select * from imagenes order by f_creacion desc");
	while($r=$query->fetch_object()){
		$images[] = $r;
	}
	return $images;
}

function get_img($id){
	$image = null;
	$conn = conexion();
	$query=$conn->query("select * from imagenes where id=$id");
	while($r=$query->fetch_object()){
		$image = $r;
	}
	return $image;
}

function borrar($id){
	$conn = conexion();
	$conn->query("delete from imagenes where id=$id");
}

?>