<?php
$nombre = isset ($_POST['nombre']) ? $_POST['nombre'] : '';
$email = isset ($_POST['email']) ? $_POST['email'] : '';
$asunto = isset ($_POST['asunto']) ? $_POST['asunto'] : '';
$motivo = isset ($_POST['motivo']) ? $_POST['motivo'] : '';
$telefono = isset ($_POST['telefono']) ? $_POST['telefono'] : '';
$comentarios = isset ($_POST['comentarios']) ? $_POST['comentarios'] : '';

$asunto = "Datos enviados desde la web";

$contenido = '
            <h2>Datos enviados desde el formulario de la web!</h2>
            <p><strong>Nombre y apellido:</strong> '.$nombre.'</p>
            <p><strong>Correo electr&oacute;nico:</strong> '.$email.'</p>
            <p><strong>Telefono:</strong> '.$telefono.'</p>
            <p><strong>Motivo:</strong> '.$motivo.'</p>
            <p><strong>Mensaje:</strong> '.$comentarios.'</p>
                                   ';
                
$asunto = 'Contacto enviado desde la web';
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= "Content-type: text/html;";
header('Location: ../index.php');

$envio = mail('info@cialasheras.com', $asunto, $contenido, $headers);

if ($envio) {
    $miresultado = '<div style="width:70%; height:100px; margin:0 auto; text-align:center; background-color:#7ED77C; border:1px solid #063;"><div style="color:#055203; margin-top: 30px; font-size:20px; font-family:Roboto;">Su mensaje ha sido enviado satisfactoriamente.</div></div>';
}
 else {
    $miresultado = '<h4>No ha sido enviado</h4>';
 }
 
 echo $miresultado;


?>
