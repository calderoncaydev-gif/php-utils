<!DOCTYPE html>
<html>
<head>
<title>Carga de archivos AJAX con barra de progreso usando JavaScript</title>
<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
</head>

<body>
<div class="container mt-4">
  <div class="card">
    <div class="card-header"> Carga de archivos JavaScript </div>
    <div class="card-body">
      <p>Seleccione imagen:</p>
      <div class="custom-file mb-3">
        <input type="file" class="custom-file-input" id="fileUpload" name="filename">
        <label class="custom-file-label" for="customFile">Seleccione imagen</label>
      </div>
      <br>
      <br>
      <button class="btn btn-primary" onclick="uploadFile()">Cargar imagen</button>
      <div class="progress">
        <div class="progress-bar" id="progressBar"></div>
      </div>
      <br>
      <div id="uploadStatus"></div>
    </div>
  </div>
</div>
<script>
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script> 
<script>
        function uploadFile() {
            var fileInput = document.getElementById('fileUpload');
            var file = fileInput.files[0];

            if (file) {
                var formData = new FormData();
                formData.append('file', file);

                var xhr = new XMLHttpRequest();

                xhr.upload.addEventListener('progress', function(event) {
                    if (event.lengthComputable) {
                        var percent = Math.round((event.loaded / event.total) * 100);
                        var progressBar = document.getElementById('progressBar');
                        progressBar.style.width = percent + '%';
                        progressBar.innerHTML = percent + '%';
                    }
                });

                xhr.addEventListener('load', function(event) {
                    var uploadStatus = document.getElementById('uploadStatus');
                    uploadStatus.innerHTML = event.target.responseText;
                });

                xhr.open('POST', 'upload.php', true);
                xhr.send(formData);
            }
        }
    </script>
</body>
</html>