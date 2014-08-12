<?php

	$nombre = $direccion = $email = $telefono = $numero = $platillos = '';

	$nombre 	= ( isset($_POST['nombre']) ) ? $_POST['nombre'] : '';
	$direccion 	= ( isset($_POST['direccion']) ) ? $_POST['direccion'] : '';
	$email 		= ( isset($_POST['email']) ) ? $_POST['email'] : '';
	$telefono 	= ( isset($_POST['telefono']) ) ? $_POST['telefono'] : '';
	$numero 	= ( isset($_POST['numero']) ) ? $_POST['numero'] : '';
	$platillos 	= ( isset($_POST['platillos']) ) ? $_POST['platillos'] : '';
	
	$mail_to = 'eventos@wokinn.com.mx';
	$subject = 'Evento Wok Inn '.$nombre;

	$body_message = 'Nombre: '.$nombre."\n";
	$body_message .= 'direccion: '.$direccion."\n";
	$body_message .= 'email: '.$email."\n";
	$body_message .= 'telefono: '.$telefono."\n";
	$body_message .= 'numero: '.$numero."\n";
	$body_message .= 'platillos: '.$platillos."\n";

	$headers = 'From: '.$email."\r\n";
	$headers .= 'Reply-To: '.$email."\r\n";

	$mail_status = mail($mail_to, $subject, $body_message, $headers);

	get_header();
?>

	<section class="contacto width clearfix">
		<h2 class="block text-center">
			<span class="center">Gracias</span>
		</h2>

		<p class="text-center">Hemos recibido tu información, nos pondrémos en contacto contigo lo antes posible para darle seguimiento a tu evento.</p>
	</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>