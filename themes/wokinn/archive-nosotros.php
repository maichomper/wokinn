<?php get_header(); ?>

	<h2 class="block text-center">
		<span class="center">Nosotros</span>
	</h2>

	<h3 class="block ">
		<span class="center">Nuestra Cocina</span>
	</h3>

	<section class="nuestra-cocina grid width clearfix">
		<?php
			$cocinaArgs = array(
				'post_type' 		=> 'nosotros',
				'category_name'			=> 'cocina',
				'posts_per_page'	=> -1
			);
			$cocinaQuery = new WP_Query($cocinaArgs);

			if( $cocinaQuery->have_posts() ) : while( $cocinaQuery->have_posts() ) : $cocinaQuery->the_post();
		?>
			<article class="clearfix columna xmall-12 medium-6">
				<?php the_post_thumbnail( "medium" ); ?>
				<h3><?php the_title(); ?></h3>
				<p><?php the_content(); ?></p>
			</article>
		<?php
			endwhile; endif;  wp_reset_query();
		?>
	</section>

	<div class="clear"></div>

	

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
			<?php the_post_thumbnail( "medium" ); ?>
			<p><?php the_title(); ?></p>
		</a>

	<?php
		endwhile; endif;  wp_reset_query();
	?>
	</section>

<?php get_footer(); ?>