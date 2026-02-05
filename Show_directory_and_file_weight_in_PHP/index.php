<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!--=====================================
  PLUGINS DE CSS
  ======================================-->
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">


    <style>
    .fa-folder {
        color: #eeae4a;
    }


    ul.a {
        list-style-type: none;
        list-style: none;
        padding-left: 0;
        list-style-type: none;
    }

    ul li {
        font-size: 18px;
    }

    .label {
        display: inline;
        padding: .2em .6em .2em;
        font-size: 70%;
        font-weight: 700;
        line-height: 1;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .25em;

    }

    .content {
        min-height: auto;
    }
    </style>





</head>
<!--=====================================
CUERPO DOCUMENTO
======================================-->
<?php
function folderSize($dir){
    $count_size = 0;
    $count = 0;
    $dir_array = scandir($dir);
      foreach($dir_array as $key=>$filename){
        if($filename!=".." && $filename!="."){
           if(is_dir($dir."/".$filename)){
              $new_foldersize = foldersize($dir."/".$filename);
              $count_size = $count_size+ $new_foldersize;
            }else if(is_file($dir."/".$filename)){
              $count_size = $count_size + filesize($dir."/".$filename);
              $count++;
            }
       }
     }
    return $count_size;
    }
    function sizeFormat($bytes){ 
        $kb = 1024;
        $mb = $kb * 1024;
        $gb = $mb * 1024;
        $tb = $gb * 1024;
        
        if (($bytes >= 0) && ($bytes < $kb)) {
        return $bytes . ' B';
        
        } elseif (($bytes >= $kb) && ($bytes < $mb)) {
        return ceil($bytes / $kb) . ' KB';
        
        } elseif (($bytes >= $mb) && ($bytes < $gb)) {
        return ceil($bytes / $mb) . ' MB';
        
        } elseif (($bytes >= $gb) && ($bytes < $tb)) {
        return ceil($bytes / $gb) . ' GB';
        
        } elseif ($bytes >= $tb) {
        return ceil($bytes / $tb) . ' TB';
        } else {
        return $bytes . ' B';
        }
        } 
?>

<body class="skin-blue sidebar-mini login-page open sidebar-collapse">

    <div class="wrapper" style="margin-top: 20px;">

        <div class="content-wrapper">

            <section class="content">
                <div class="box">
                    <div class="box-header with-border">

                    </div>
                    <div class="box-body">
                        <div class="container-fluid">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title"> <b>Lista de carpetas</b></h3>
                                </div>
                                <div class="panel-body">

                                    <div class="row align-items-md-stretch">

                                        <div class="col-md-6">
                                            <ul class="a">
                                                <?php

$directorio = "./miDirectorio/";
$ficheros = scandir($directorio);

foreach ($ficheros as $key => $fichero) {
if ($fichero != "." && $fichero != "..") {

$rutaCompleta = $directorio . '/' . $fichero;

if (is_file($rutaCompleta)) {
?>

                                                <?php
} else {
?>
                                                <li>
                                                    <i class="fa fa-folder"></i>
                                                    <?php echo $fichero; ?> | (<?php 
   

    // Set the current working directory
$directory = $directorio."/".$fichero ."/";

// Initialize filecount variable
$filecount = 0;

$files2 = glob( $directory ."*" );

if( $files2 ) {
$filecount = count($files2);
}

echo $filecount . " Archivos";
    ?>) |

                                                    <?php
     echo sizeFormat(folderSize($directory));
    ?>
                                                </li>
                                                <?php
}
}
}


?>
                                            </ul>

                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </section>


        </div>
        <footer class="main-footer" style="margin-left: 10px;">
            <strong>Copyright &copy; <?=date("Y");?> <a href="#" target="_blank">BauPHP</a>.</strong>
            Todos los derechos reservados.
        </footer>
    </div>

</body>

</html>