<?php get_header(); ?>

	<h2 class="block text-center">
		<span class="center">Sé Verde</span>
	</h2>

	<section class="se-verde clearfix columna xmall-12 grid">
	<?php
		$verdeArgs = array(
			'post_type' 	=> 'se-verde',
			'posts_per_page' => -1
		);
		$verdeQuery = new WP_Query($verdeArgs);

		if( $verdeQuery->have_posts() ) : while( $verdeQuery->have_posts() ) : $verdeQuery->the_post();
	?>
		<article class="columna xmall-12 medium-4">
			<h3><?php the_title(); ?></h3>
			<?php the_post_thumbnail( "medium" ); ?>
			<p><?php the_content(); ?></p>	
		</article>
	<?php		
		endwhile; endif;  wp_reset_query();
	?>
	</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>