<?php get_header(); ?>
	<h2 class="block text-center">
		<span class="center">Eventos</span>
	</h2>

	<?php
		$eventosArgs = array(
			'post_type' 	=> 'eventos',
			'posts_per_page' => -1
		);
		$eventosQuery = new WP_Query($eventosArgs);

		if( $eventosQuery->have_posts() ) : while( $eventosQuery->have_posts() ) : $eventosQuery->the_post();
	?>
		<section class="estufa-wok clearfix columna xmall-12 medium-6">
			<?php the_post_thumbnail( "medium" ); ?>
			<h3><?php the_title(); ?></h3>
			<p><?php the_content(); ?></p>
		</section>
	<?php
		endwhile; endif;  wp_reset_query();
	?>

	<section class="contacto columna xmall-12 medium-6">
		<form action="<?php echo site_url('evento-recibido'); ?>" method="post" class="columna xmall-12 clearfix forma-contacto">
			<h4 class="text-center">Cotiza tu evento</h4>
			<label for="nombre">Nombre</label>
			<input class="required" name="nombre" type="text">
			<div class="clear"></div>
			<label for="direccion">Dirección</label>
			<input class="required" name="direccion" type="text">
			<div class="clear"></div>
			<label for="email">Email</label>
			<input class="required email" name="email" type="email">
			<div class="clear"></div>
			<label for="telefono">Teléfono</label>
			<input class="required" name="telefono" type="number">
			<div class="clear"></div
			<label for="numero">Número de personas</label>
			<input class="required numero" name="numero" type="number">
			<div class="clear"></div>
			<label for="platillos">Platillos que te interesan</label>
			<textarea class="required" name="platillos"></textarea>
			<input class="columna xmall-12 medium-6 block center" type="submit" value="enviar">
		</form>
	</section>


<?php get_footer(); ?>