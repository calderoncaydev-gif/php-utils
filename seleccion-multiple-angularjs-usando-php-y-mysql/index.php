<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.84.0">
<title>Baulphp.com : Angular Multiselect</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
<link data-require="bootstrap-css@2.3.2" data-semver="2.3.2" rel="stylesheet" href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" />

<script src="js/multiselect.js"></script>
<script src="js/app.js"></script>
<link rel="stylesheet" href="css/style.css" />
<?php include('container.php');?>
<br><br><br><br>
<div class="container">
<div class="card">
<div class="card-header text-white" style="background-color: #00AA9E;">AngularJS Multiselect PHP & MySQL </div>
  
  
  <div class="card-body">
    

<div class="container" ng-app="multiselect_app" ng-controller="multiselect_controller">	
    
	<h4>Ver lista de personal</h4>
    <multiselect class="input-xlarge" multiple="true"
        ng-model="selectedEmp"
        options="c.nombre for c in emp_list"
        change="selected()" ></multiselect>  
		
	<br>
	<br>
	{{selectedEmp}}

	<div style="margin:50px 0px 0px 0px;">
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="https://www.baulphp.com/seleccion-multiple-angularjs-usando-php-y-mysql/">Volver al Tutorial</a>		
	</div>  
		
</div>


  </div>
</div>
</div>


<?php include('footer.php');?>
