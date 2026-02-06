<?php
include('inc/header.php');
?>
<title>Password Generator with Strength Checker with jQuery</title> 
<script src="validate.js"></script>
<?php include('inc/container.php'); ?>
<style>
#strengthWrapper { 
 width:200px;
 height:35px;
 border-radius:3px;
}
</style>
<div class="container">
	<br><br>
<div class="panel panel-primary">
  <div class="panel-heading">Generador de contraseñas con Strength Checker</div>
  <div class="panel-body">
    	<div class="row">			
		<div class="col-md-6">
			<div class="col-md-12">
				<?php
				if (isset($_POST['signup'])) {
					echo "<pre>";
					print_r($_POST);
					echo "</pre>";
				}
				?>
				<form name="form" class="form" action="" method="post">
					<div class="row">
						<div class="form-group col-md-6" style="padding: 0px 2px 0px 15px">							
							<input type="email" name="email" id="email" class="form-control" placeholder="Email..">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6" style="padding: 0px 2px 0px 15px">								
							<input type="text" name="password" id="password" class="form-control" placeholder="Password..">		
						</div>		
						<div class="form-group col-md-4" style="padding: 1px 2px 3px 1px">	
						<input type="button" id="generatePassword" class="btn btn btn-md" value="Generar Password">	
						</div>
					</div>
					<div class="row hidden" id="strengthSection">
						<div class="form-group col-md-6">	
							<div id="strengthWrapper">
								<div class="form-control" id="strength"></div>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="form-group col-md-4">	
							<input type="submit" name="signup" class="btn btn-info btn-md" value="Acceder">								
						</div>	
					</div>					
				</form>
			</div>
		</div>
	</div>
  </div>
</div>
    

</div>
<?php include("inc/footer.php"); ?>