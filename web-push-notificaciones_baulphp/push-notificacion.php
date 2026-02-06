<?php
// si hay algo que notificar, devuelva la respuesta con datos para
// notificación push de lo contrario, simplemente salga del código
$webNotificationPayload['title'] = 'Push Notificacion desde PHP';
$webNotificationPayload['body'] = 'Notificación push web de PHP al navegador.';
$webNotificationPayload['icon'] = 'https://www.baulphp.com/badge.jpg';
$webNotificationPayload['url'] = 'https://www.baulphp.com';
echo json_encode($webNotificationPayload);
exit();
?>