<?php
echo 'Enviando correo';
$to = "aquiuncorreo@aprenderaprogramar.com";
$subject = "Correo en prueba";
$txt = "Hola es un placer saludar desde el correo en pruebas!";
$headers = "From: aquiotrocorreo@ejemplo.com" . "\r\n" .
"CC: yaquiotrocorreocomocc@aprenderaprogramar.com";
mail($to,$subject,$txt,$headers);
?>
