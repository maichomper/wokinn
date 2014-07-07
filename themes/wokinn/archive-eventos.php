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
		<section class="estufa-wok clearfix columna xmall-12 medium-4">
			<?php the_post_thumbnail( "medium" ); ?>
			<h3><?php the_title(); ?></h3>
			<p><?php the_content(); ?></p>	
		</section>
	<?php		
		endwhile; endif;  wp_reset_query();
	?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>