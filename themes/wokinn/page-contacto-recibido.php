<?php

	$nombre = $email = $mensaje = '';

	$nombre 	= ( isset($_POST['nombre']) ) ? $_POST['nombre'] : '';
	$email 		= ( isset($_POST['email']) ) ? $_POST['email'] : '';
	$mensaje 	= ( isset($_POST['mensaje']) ) ? $_POST['mensaje'] : '';

	$mail_to = 'info@wokkinn.com.mx';
	$subject = 'Contacto Wok Inn '.$nombre;

	$body_message = 'Nombre: '.$nombre."\n";
	$body_message .= 'Email: '.$email."\n";
	$body_message .= 'Mensaje: '.$mensaje;

	$headers = 'From: '.$email."\r\n";
	$headers .= 'Reply-To: '.$email."\r\n";

	$mail_status = mail($mail_to, $subject, $body_message, $headers);

	get_header();
?>

	<section class="contacto width clearfix">
		<h2 class="block text-center">
			<span class="center">Gracias</span>
		</h2>

		<p class="text-center">Hemos recibido tu información, nos pondrémos en contacto contigo lo antes posible.</p>
	</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>