<?php get_header(); ?>
<!-- Insert content here -->

		<section class="slider full">
			<div class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-swipe="true">
				<?php
				$sliderArgs = array(
					'post_type' 	=> 'slider'
				);
				$sliderQuery = new WP_Query($sliderArgs);

				if( $sliderQuery->have_posts() ) : while( $sliderQuery->have_posts() ) : $sliderQuery->the_post();

					$attachmentsArgs = array(
			            'post_type' => 'attachment',
			            'posts_per_page' => -1,
			            'post_parent' => $post->ID
			        );
			        $attachments = get_posts($attachmentsArgs);

			        if ( $attachments ) {
			            foreach ( $attachments as $attachment ) {
			            	$imgUrl = wp_get_attachment_image_src($attachment->ID, 'full');
			            	echo '<img src="'.$imgUrl[0].'" alt="">';
			            }
			        }
				endwhile; endif;  wp_reset_query();?>

    			<!-- <img src="<?php echo THEMEPATH; ?>images/slider.jpg" />
    			<img src="<?php echo THEMEPATH; ?>images/slider.jpg" />
    			<img src="<?php echo THEMEPATH; ?>images/slider.jpg" />
    			<img src="<?php echo THEMEPATH; ?>images/slider.jpg" />  -->
   			<div class="cycle-controls cycle-prev">
   				<i class="fa fa-chevron-left"></i>
   			</div>
   			<div class="cycle-controls cycle-next">
   				<i class="fa fa-chevron-right"></i>
   			</div>
		</section>

		<h2 class="block text-center">
			<span class="center">Menú</span>
		</h2>

		<section class="menu grid width clearfix">
			<?php
				$menuArgs = array(
					'post_type' 		=> 'menu',
					'posts_per_page'	=> -1
				);
				$menuQuery = new WP_Query($menuArgs);

				if( $menuQuery->have_posts() ) : while( $menuQuery->have_posts() ) : $menuQuery->the_post();
			?>
				<article class="categoria columna xmall-12 medium-4 clearfix">
					<?php the_post_thumbnail( "medium" ); ?>
					<h3><?php the_title(); ?></h3>
					<span class="block"><?php the_content(); ?></span>
					<ul>
						<?php

							for ($i = 1; $i <= 25; $i++) {
								$nombrePlatillo = rwmb_meta( 'menu_nombre'.$i );
								$precioPlatillo = rwmb_meta( 'menu_precio'.$i );
								$descripcionPlatillo = rwmb_meta( 'menu_descripcion'.$i );
								$fotoArgs = array(
									'type' 	=> 'image',
									'size' 	=> 'full'
								);
								$fotoPlatillo = rwmb_meta( 'menu_foto'.$i, $fotoArgs ); ?>

								<li class="clearfix">
									<p class="columna xmall-8"><?php echo $nombrePlatillo; ?></p>
									<p class="columna xmall-4 text-right">$<?php echo $precioPlatillo; ?></p>
									<span><?php echo $descripcionPlatillo; ?></span>
								</li>

								<?php
							}
						?>

					</ul>
				</article>
			<?php
				endwhile; endif;  wp_reset_query();
			?>

		</section>


	</div><!-- main -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>