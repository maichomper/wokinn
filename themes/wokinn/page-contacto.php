<?php get_header(); ?>

	<section class="contacto width clearfix">
		<h2 class="block text-center">
			<span class="center">Contacto</span>
		</h2>

		<div class="columna xmall-12 medium-4 text-center block">
			<h4>Teléfonos</h4>
			<a class="block" href="tel:5207-2840">5207-2840</a>
			<a class="block" href="tel:5207-2840">5207-2619</a>
		</div>
		<div class="columna xmall-12 medium-4 text-center block">
			<h4>Correo electrónico</h4>
			<a href="mailto:info@wokinn.com.mx">info@wokinn.com.mx</a>
		</div>
		<div class="columna xmall-12 medium-4 text-center block">
			<h4>Dirección</h4>
			<address>
				<p>Álvaro Obregón 187-A Col. Roma Norte, Del. Cuauhtémoc 06700 México, DF.</p>
			</address>
		</div>
		<form class="columna xmall-12 medium-6 clearfix forma-contacto">
			<h4 class="text-center">Nos interesa tu opinión</h4>
			<label for="nombre">Nombre</label>
			<input class="required" name="nombre" type="text">
			<div class="clear"></div>
			<label for="email">Email</label>
			<input class="required email" name="email" type="text">
			<div class="clear"></div>
			<label for="mensaje">Mensaje</label>
			<textarea class="required" name="mensaje"></textarea>
			<input class="columna xmall-12 medium-6 block center" type="submit" value="enviar">
		</form>
		<div class="columna xmall-12 medium-6" id="map">
			
		</div>
	</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>