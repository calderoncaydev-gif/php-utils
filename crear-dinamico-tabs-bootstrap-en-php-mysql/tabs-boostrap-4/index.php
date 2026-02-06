<?php 
include('header.php');
?>
<title>BaulPHP.com : Crear Dinamico Bootstrap Tabs con PHP & MySQL</title>
<link type="text/css" rel="stylesheet" href="style.css" />
<?php include('container.php');?>
<div class="container">	
	<h2>BootStrap 4: Crear Dinamico Bootstrap Tabs con PHP & MySQL</h2>	
	<br><br>
	<?php include_once("tabs.php"); ?>
	<ul id="tabs" class="nav nav-tabs">
	<?php echo $category_html; ?>
	</ul>	
	<div id="tabsContent" class="tab-content">
	<?php echo $product_html; ?>
	</div>	
	<br>
	<div style="margin:50px 0px 0px 0px;">
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="http://www.baulphp.com/crear-tabs-dinamicas-de-bootstrap-con-php-y-mysql/">Retornar al Tutorial</a>		
	</div>	
</div>
<?php include('footer.php');?>
