<?php get_header(); ?>
<!-- Insert content here -->

		<section class="slider full no-xmall no-small medium">
			<div class="cycle-slideshow no-xmall medium" data-cycle-fx="scrollHorz" data-cycle-swipe="true">
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

		<div class="width clearfix center block columna xmall-12 sub-menu">
			<a data-seccion="seccion-menu" href="#" class="block text-center columna xmall-6 medium-3 ">Menú</a>
			<a data-seccion="seccion-woks" href="#" class="block text-center columna xmall-6 medium-3 ">Woks</a>
			<a data-seccion="seccion-combos" href="#" class="block text-center columna xmall-6 medium-3 ">Combos</a>
			<a data-seccion="seccion-bebidas" href="#" class="block text-center columna xmall-6 medium-3 ">Bebidas</a>

		</div>

		<div id="seccion-menu" class="clear"></div>

		<h2 class="block text-center">
			<span class="center greenborder">Menú</span>
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
				<article  class="categoria columna xmall-12 medium-6 large-4 clearfix">
					<?php the_post_thumbnail( "medium" ); ?>
					<h3><?php the_title(); ?></h3>
					<?php
					ob_start();
					the_content();
					$content = ob_get_clean();
					if ( $content != '' ){ ?>
						<span class="block"><?php the_content(); ?></span>
					<?php } ?>
					<ul id="ul-menu">
						<?php

							for ($i = 1; $i <= 25; $i++) {
								$nombrePlatillo = rwmb_meta( 'menu_nombre'.$i );
								$precioPlatillo = rwmb_meta( 'menu_precio'.$i );
								$descripcionPlatillo = rwmb_meta( 'menu_descripcion'.$i );
								$fotoArgs = array(
									'type' 	=> 'image',
									'size' 	=> 'full'
								);
								$fotosPlatillo = rwmb_meta( 'menu_foto'.$i, $fotoArgs ); ?>

								<?php if ( $nombrePlatillo != NULL ){ ?>
									<li class="clearfix <?php if ( !empty($fotosPlatillo) ) { echo 'hasTooltip'; }?>">
										<p class="columna xmall-8 nombre"><?php echo $nombrePlatillo; ?></p>
										<?php if ( $precioPlatillo != NULL ){ ?> <p class="columna xmall-4 text-right"><?php echo '$'.$precioPlatillo; ?></p><?php } ?>
										<div class="clear"></div>
										<?php if ( $descripcionPlatillo != NULL ){ ?> <span><?php echo $descripcionPlatillo; ?></span><?php } ?>
									</li>
									<?php if ( !empty($fotosPlatillo) ) {?>
									<div class="hide">
										<?php foreach ( $fotosPlatillo as $fotoPlatillo ){
										    echo "<img src='{$fotoPlatillo['url']}' />";
										} ?>
									</div>
								<?php } }
							}
						?>

					</ul>
				</article>
			<?php
				endwhile; endif;  wp_reset_query();
			?>

		</section>

		<div id="seccion-woks" class="clear"></div>

		<h2 class="block text-center">
			<span class="center greenborder">Woks</span>
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
				<article  class="categoria columna xmall-12 medium-4 clearfix">
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
								<?php if ( !empty($fotosPlatillo) ) {?>
									<div class="hide">
										<?php foreach ( $fotosPlatillo as $fotoPlatillo ){
										    echo "<img src='{$fotoPlatillo['url']}' />";
										} ?>
									</div>
								<?php } }
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
			<span id="seccion-combos" class="center greenborder">Combos</span>
		</h2>

		<section  class="menu grid width clearfix">
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
				<article  class="categoria columna xmall-12 medium-6 large-3 clearfix">
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
								<?php if ( !empty($fotosPlatillo) ) {?>
									<div class="hide">
										<?php foreach ( $fotosPlatillo as $fotoPlatillo ){
										    echo "<img src='{$fotoPlatillo['url']}' />";
										} ?>
									</div>
								<?php } }
							}
						?>

					</ul>
				</article>
			<?php
				endwhile; endif;  wp_reset_query();
			?>

		</section>
		<p class="text-center">Por $5 pesos cambia tu agua chica por grande o refresco Coca Cola, por $15 pesos cámbiala por una cerveza nacional.</p>
		<div class="clear"></div>

		<h2 class="block text-center">
			<span id="seccion-bebidas" class="center greenborder">Bebidas</span>
		</h2>

		<section  class="menu grid width clearfix">
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
				<article  class="categoria columna xmall-12 medium-6 large-4 clearfix">
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
								<?php if ( !empty($fotosPlatillo) ) {?>
									<div class="hide">
										<?php foreach ( $fotosPlatillo as $fotoPlatillo ){
										    echo "<img src='{$fotoPlatillo['url']}' />";
										} ?>
									</div>
								<?php } }
							}
						?>

					</ul>
				</article>
			<?php
				endwhile; endif;  wp_reset_query();
			?>

		</section>
		<p class="text-center">Todos los platillos incluyen IVA y están contemplados en Moneda Nacional.</p>

<?php get_footer(); ?>