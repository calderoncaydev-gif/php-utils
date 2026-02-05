<?php


$conn = new mysqli("localhost", "root", "root", "db_ejemplos");
if ($conn->connect_errno) {
   die("error de conexión: " . $conn->connect_error);
}


if(isset($_POST["submit"])) {
mysqli_query($conn,"Update users SET user_name='" . $_POST["user_name"] . "', languages_known='" . implode(",", $_POST["languages_known"]) . "'");
}
$result = mysqli_query($conn,"SELECT * FROM users");
$usuarios= mysqli_fetch_array($result);
?>
<!doctype html>
<html>
<head>
<title>Multiselect en PHP</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<!--Select2 Integracion-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
</head>
<body>
<div class="container">
  <div class="card mt-3">
    <div class="card-header text-white" style="background-color: #00AA9E;"> Multiselect con PHP </div>
    <div class="card-body">
      <form action="" method="POST">
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
          <div class="col-sm-10">
            <input type="text" name="user_name" class="form-control" value="<?php echo $usuarios["user_name"]; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Mis Idiomas:</label>
          <div class="col-sm-10">
            <select class="form-control" name="languages_known[]" multiple="multiple">
              <?php
$usuario_lang = explode(",",$usuarios["languages_known"]);
$lang_result = mysqli_query($conn,"SELECT * FROM languages");
$i=0;
while($lang_stack = mysqli_fetch_array($lang_result)) {
if(in_array($lang_stack["lang_name"],$usuario_lang)){ $marcados = "selected";
}else {$marcados="";
}
?>
              <option value="<?=$lang_stack["lang_name"];?>" <?php echo $marcados; ?>>
              <?=$lang_stack["lang_name"];?>
              </option>
              <?php
$i++;
}
?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" name="submit" class="btn btn-primary">Editar registro</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="card mt-3">
    <div class="card-header text-white" style="background-color: #00AA9E;"> Multiselect con PHP y SELECT2 </div>
    <div class="card-body">
      <form action="" method="POST">
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
          <div class="col-sm-10">
            <input type="text" name="user_name" class="form-control" value="<?php echo $usuarios["user_name"]; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Mis Idiomas:</label>
          <div class="col-sm-10">
            <select class="form-control basico" name="languages_known[]" multiple="multiple">
              <?php
$usuario_lang = explode(",",$usuarios["languages_known"]);
$lang_result = mysqli_query($conn,"SELECT * FROM languages");
$i=0;
while($lang_stack = mysqli_fetch_array($lang_result)) {
if(in_array($lang_stack["lang_name"],$usuario_lang)){ $marcados = "selected";
}else {$marcados="";
}
?>
              <option value="<?=$lang_stack["lang_name"];?>" <?php echo $marcados; ?>>
              <?=$lang_stack["lang_name"];?>
              </option>
              <?php
$i++;
}
?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" name="submit" class="btn btn-primary">Editar registro</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <script>
        $(document).ready(function() {
            $('.basico').select2({
                width: '100%'
            });
        });
        </script> 
</div>
</body>
</html>