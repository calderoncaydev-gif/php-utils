<!DOCTYPE html>
<html>
<head>
<title>Web Push Notificaciones en PHP</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" type="text/css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</head>
<body>
    <div class="dive-container">
        <h1>Notificación web push usando PHP en un navegador</h1>
        <p>Este ejemplo muestra una notificación push web de PHP en
            navegador automáticamente cada 10 segundos. La notificación
            también se cierra automáticamente justo después de 5 segundos.</p>
    </div>
    <script>
    setInterval(function(){pushNotify();}, 10000);

        function pushNotify() {
        	if (!("Notification" in window)) {
                alert("El navegador web no admite notificaciones de escritorio");
            }
            if (Notification.permission !== "granted")
                Notification.requestPermission();
            else {
                $.ajax({
                url : "push-notificacion.php",
                type: "POST",
                success: function(data, textStatus, jqXHR) {
                	if ($.trim(data)){
                        var data = jQuery.parseJSON(data);
                        console.log(data);
                        notification = createNotification( data.title,  data.icon,  data.body, data.url);

                        setTimeout(function() {
                        	notification.close();
                        }, 5000);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {}
                });
            }
        };

        function createNotification(title, icon, body, url) {
            var notification = new Notification(title, {
                icon: icon,
                body: body,
            });
            notification.onclick = function() {
                window.open(url);
            };
            return notification;
        }

    </script>
</body>
</html>