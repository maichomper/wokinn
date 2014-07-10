<?php get_header(); ?>

	<h2 class="block text-center">
		<span class="center">Nosotros</span>
	</h2>

	<h3 class="block ">
		<span class="center">Nuestra Cocina</span>
	</h3>

	<?php
		$cocinaArgs = array(
			'post_type' 		=> 'nosotros',
			'category_name'			=> 'cocina',
			'posts_per_page'	=> -1
		);
		$cocinaQuery = new WP_Query($cocinaArgs);

		if( $cocinaQuery->have_posts() ) : while( $cocinaQuery->have_posts() ) : $cocinaQuery->the_post();
	?>
		<section class="clearfix columna xmall-12 medium-6">
			<?php the_post_thumbnail( "medium" ); ?>
			<h3><?php the_title(); ?></h3>
			<p><?php the_content(); ?></p>
		</section>
	<?php
		endwhile; endif;  wp_reset_query();
	?>

	<div class="clear"></div>

	<h3 class="block ">
		<span class="center">Galería</span>
	</h3>

	<section class="galeria clearfix columna xmall-12">

	<?php
		$galeria = get_page_by_title( 'galeria' );
		$galeriaID = $galeria->ID;

		$attachmentsArgs = array(
            'post_type' => 'attachment',
            'posts_per_page' => -1,
            'post_parent' => $galeriaID
        );
        $attachments = get_posts($attachmentsArgs);

        if ( $attachments ) {
            foreach ( $attachments as $attachment ) {
            	$fullUrl = wp_get_attachment_image_src($attachment->ID, 'full');
            	$thumbUrl = wp_get_attachment_image_src($attachment->ID, 'thumbnail');
            	$alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true); ?>
            	<a class="fancybox columna xmall-6 medium-3 margin-bottom" rel="group" href="<?php echo $fullUrl[0]; ?>"><img src="<?php echo $thumbUrl[0]; ?>" alt="<?php echo $alt; ?>" /></a>

			<?php }
        }
	?>
	</section>

	<div class="clear"></div>

	<h3 class="block ">
		<span class="center">Familia Extendida</span>
	</h3>

	<section class="familia-extendida clearfix columna xmall-12">
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

<?php get_sidebar(); ?>
<?php get_footer(); ?>