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
					'category_name' 	=> 'comida',
					'posts_per_page'	=> -1,
					'order'				=> 'ASC'
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

								<?php if ( $nombrePlatillo != NULL ){ ?>
									<li class="clearfix hasTooltip">
										<p class="columna xmall-8 nombre"><?php echo $nombrePlatillo; ?></p>
										<?php if ( $precioPlatillo != NULL ){ ?> <p class="columna xmall-4 text-right"><?php echo '$'.$precioPlatillo; ?></p><?php } ?>
										<div class="clear"></div>
										<?php if ( $descripcionPlatillo != NULL ){ ?> <span><?php echo $descripcionPlatillo; ?></span><?php } ?>
									</li>
									<div class="hide">
										<img src="<?php echo THEMEPATH; ?>images/estufa.jpg" alt="">
									</div>
								<?php }
							}
						?>

					</ul>
				</article>
			<?php
				endwhile; endif;  wp_reset_query();
			?>

		</section>

		<div class="clear"></div>

		<h2 class="block text-center">
			<span class="center">Woks</span>
		</h2>

		<section class="menu grid width clearfix">
			<?php
				$menuArgs = array(
					'post_type' 		=> 'menu',
					'category_name' 	=> 'woks',
					'posts_per_page'	=> -1,
					'order'				=> 'ASC'
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

								<?php if ( $nombrePlatillo != NULL ){ ?>
									<li class="clearfix">
										<p class="columna xmall-8"><?php echo $nombrePlatillo; ?></p>
										<?php if ( $precioPlatillo != NULL ){ ?> <p class="columna xmall-4 text-right"><?php echo '$'.$precioPlatillo; ?></p><?php } ?>
										<div class="clear"></div>
										<?php if ( $descripcionPlatillo != NULL ){ ?> <span><?php echo $descripcionPlatillo; ?></span><?php } ?>
									</li>
								<?php }
							}
						?>

					</ul>
				</article>
			<?php
				endwhile; endif;  wp_reset_query();
			?>

		</section>

		<div class="clear"></div>

		<h2 class="block text-center">
			<span class="center">Combos</span>
		</h2>

		<section class="menu grid width clearfix">
			<?php
				$menuArgs = array(
					'post_type' 		=> 'menu',
					'category_name' 	=> 'combos',
					'posts_per_page'	=> -1,
					'order'				=> 'ASC'
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

								<?php if ( $nombrePlatillo != NULL ){ ?>
									<li class="clearfix">
										<p class="columna xmall-8"><?php echo $nombrePlatillo; ?></p>
										<?php if ( $precioPlatillo != NULL ){ ?> <p class="columna xmall-4 text-right"><?php echo '$'.$precioPlatillo; ?></p><?php } ?>
										<div class="clear"></div>
										<?php if ( $descripcionPlatillo != NULL ){ ?> <span><?php echo $descripcionPlatillo; ?></span><?php } ?>
									</li>
								<?php }
							}
						?>

					</ul>
				</article>
			<?php
				endwhile; endif;  wp_reset_query();
			?>

		</section>

		<div class="clear"></div>

		<h2 class="block text-center">
			<span class="center">Bebidas</span>
		</h2>

		<section class="menu grid width clearfix">
			<?php
				$menuArgs = array(
					'post_type' 		=> 'menu',
					'category_name' 	=> 'bebidas',
					'posts_per_page'	=> -1,
					'order'				=> 'ASC'
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

								<?php if ( $nombrePlatillo != NULL ){ ?>
									<li class="clearfix hasTooltip">
										<p class="columna xmall-8"><?php echo $nombrePlatillo; ?></p>
										<?php if ( $precioPlatillo != NULL ){ ?> <p class="columna xmall-4 text-right"><?php echo '$'.$precioPlatillo; ?></p><?php } ?>
										<div class="clear"></div>
										<?php if ( $descripcionPlatillo != NULL ){ ?> <span><?php echo $descripcionPlatillo; ?></span><?php } ?>
									</li>
									<div class="hide">
										<p><b><?php echo $nombrePlatillo; ?></b> for your tooltip <i>here</i>!</p>
									</div>
								<?php }
							}
						?>

					</ul>
				</article>
			<?php
				endwhile; endif;  wp_reset_query();
			?>

		</section>

<?php get_footer(); ?>