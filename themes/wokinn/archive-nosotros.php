<?php get_header(); ?>

	<h2 class="block text-center">
		<span class="center">Nosotros</span>
	</h2>

	<section class="clearfix">
		<div class="columna xmall-12 medium-4">
			<h2>Misión</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque vel necessitatibus odit, adipisci aliquid dolorem, repellat nostrum doloremque, earum nulla possimus inventore. Dolor numquam perferendis dolore nulla consequatur adipisci reiciendis.</p>
		</div>
		<div class="columna xmall-12 medium-4">
			<h2>Visión</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque vel necessitatibus odit, adipisci aliquid dolorem, repellat nostrum doloremque, earum nulla possimus inventore. Dolor numquam perferendis dolore nulla consequatur adipisci reiciendis.</p>
		</div>
		<div class="columna xmall-12 medium-4">
			<h2>Valores</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque vel necessitatibus odit, adipisci aliquid dolorem, repellat nostrum doloremque, earum nulla possimus inventore. Dolor numquam perferendis dolore nulla consequatur adipisci reiciendis.</p>
		</div>
	</section>

	<h3 class="block ">
		<span class="center">Nuestra Cocina</span>
	</h3>

	<section class="nuestra-cocina width grid clearfix">
		<?php
			$cocinaCounter = 1;
			$cocinaArgs = array(
				'post_type' 		=> 'nosotros',
				'category_name'		=> 'cocina',
				'posts_per_page'	=> -1
			);
			$cocinaQuery = new WP_Query($cocinaArgs);

			if( $cocinaQuery->have_posts() ) : while( $cocinaQuery->have_posts() ) : $cocinaQuery->the_post();
		?>
			<article class="clearfix columna xmall-12 medium-6">
				<?php the_post_thumbnail( "large" ); ?>
				<h3><?php the_title(); ?></h3>
				<p><?php the_content(); ?></p>
			</article>
		<?php
			if($cocinaCounter %2 == 0) {
				echo '<div class="clear"></div>';
			}
			$cocinaCounter++; endwhile; endif;  wp_reset_query();
		?>
	</section>

	<div class="clear"></div>

	<h3 class="block ">
		<span class="center">Familia Extendida</span>
	</h3>

	<section class="familia-extendida grid clearfix columna xmall-12">
	<?php
		$familiaArgs = array(
			'post_type' 		=> 'nosotros',
			'category_name'			=> 'familia-extendida',
			'posts_per_page'	=> -1
		);
		$familiaQuery = new WP_Query($familiaArgs);

		if( $familiaQuery->have_posts() ) : while( $familiaQuery->have_posts() ) : $familiaQuery->the_post();
	?>
		<a href="#" class="columna xmall-6 medium-3 large-2 margin-bottom">
			<?php the_post_thumbnail( "large" ); ?>
			<p><?php the_title(); ?></p>
		</a>

	<?php
		endwhile; endif;  wp_reset_query();
	?>
	</section>

<?php get_footer(); ?>