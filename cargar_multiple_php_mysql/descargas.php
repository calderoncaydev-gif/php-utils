<?php

if(isset($_GET["id"])){
	include "dbcon.php";
	$img = get_img($_GET["id"]);
	if($img!=null){
		//borrar($img->id);
		$fullpath = $img->carpeta.$img->src;
		header("Content-Disposition: attachment; filename=$img->src");
		readfile($fullpath);
	}
}


?>