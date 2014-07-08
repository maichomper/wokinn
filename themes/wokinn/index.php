<?php get_header(); ?>
<!-- Insert content here -->

		<section class="slider full">
			<div class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-swipe="true">
    			<img src="<?php echo THEMEPATH; ?>images/slider.jpg" /> 
    			<img src="<?php echo THEMEPATH; ?>images/slider.jpg" /> 
    			<img src="<?php echo THEMEPATH; ?>images/slider.jpg" /> 
    			<img src="<?php echo THEMEPATH; ?>images/slider.jpg" /> 
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
						<li class="clearfix">
							<p class="columna xmall-8">Gyozas pollo</p>
							<p class="columna xmall-4 text-right">$45.00</p>
						</li>
						<li class="clearfix">
							<p class="columna xmall-8">Gyozas carne</p>
							<p class="columna xmall-4 text-right">$45.00</p>
						</li>
						<li class="clearfix">
							<p class="columna xmall-8">Gyozas verduras</p>
							<p class="columna xmall-4 text-right">$45.00</p>
							<span>¡Pídelos para tu sopa!</span>
						</li>
						<li class="clearfix">
							<p class="columna xmall-8">Rangoons de queso crema</p>
							<p class="columna xmall-4 text-right">$45.00</p>
						</li>
					</ul>
				</article>
			<?php		
				endwhile; endif;  wp_reset_query();
			?>

			<article class="categoria columna xmall-12 medium-4 clearfix">
				<img src="<?php echo THEMEPATH; ?>images/dumplings.jpg" />
				<h3>Gyozas / Rangoons / Dumplings</h3>
				<span class="block">Empanadas orientales fritas o al vapor</span>
				<ul>
					<li class="clearfix">
						<p class="columna xmall-8">Gyozas pollo</p>
						<p class="columna xmall-4 text-right">$45.00</p>
					</li>
					<li class="clearfix">
						<p class="columna xmall-8">Gyozas carne</p>
						<p class="columna xmall-4 text-right">$45.00</p>
					</li>
					<li class="clearfix">
						<p class="columna xmall-8">Gyozas verduras</p>
						<p class="columna xmall-4 text-right">$45.00</p>
						<span>¡Pídelos para tu sopa!</span>
					</li>
					<li class="clearfix">
						<p class="columna xmall-8">Rangoons de queso crema</p>
						<p class="columna xmall-4 text-right">$45.00</p>
					</li>
				</ul>
			</article>

			<article class="categoria columna xmall-12 medium-4 clearfix">
				<img src="<?php echo THEMEPATH; ?>images/kiuss.jpg" />
				<h3>Kiuss / Onigiris</h3>
				<span class="block">Acompañados de salsas dulce y chipotle</span>
				<ul>
					<li>
						<p class="columna xmall-8">Kiuss queso crema</p>
						<p class="columna xmall-4 text-right">$45.00</p>
						<span>Esferas de arroz empaniadas</span>
					</li>
					<li>
						<p class="columna xmall-8">Kiuss manchego aceituna</p>
						<p class="columna xmall-4 text-right">$45.00</p>
						<span></span>
					</li>
				</ul>
				<span></span>
			</article>

			<article class="categoria columna xmall-12 medium-4 clearfix">
				<img src="<?php echo THEMEPATH; ?>images/dumplings.jpg" />
				<h3>Gyozas / Rangoons / Dumplings</h3>
				<span class="block">Empanadas orientales fritas o al vapor</span>
				<ul>
					<li class="clearfix">
						<p class="columna xmall-8">Gyozas pollo</p>
						<p class="columna xmall-4 text-right">$45.00</p>
					</li>
					<li class="clearfix">
						<p class="columna xmall-8">Gyozas carne</p>
						<p class="columna xmall-4 text-right">$45.00</p>
					</li>
					<li class="clearfix">
						<p class="columna xmall-8">Gyozas verduras</p>
						<p class="columna xmall-4 text-right">$45.00</p>
						<span>¡Pídelos para tu sopa!</span>
					</li>
					<li class="clearfix">
						<p class="columna xmall-8">Rangoons de queso crema</p>
						<p class="columna xmall-4 text-right">$45.00</p>
					</li>
				</ul>
			</article>
			
			<article class="categoria columna xmall-12 medium-4 clearfix">
				<img src="<?php echo THEMEPATH; ?>images/kiuss.jpg" />
				<h3>Kiuss / Onigiris</h3>
				<span class="block">Acompañados de salsas dulce y chipotle</span>
				<ul>
					<li>
						<p class="columna xmall-8">Kiuss queso crema</p>
						<p class="columna xmall-4 text-right">$45.00</p>
						<span>Esferas de arroz empaniadas</span>
					</li>
					<li>
						<p class="columna xmall-8">Kiuss manchego aceituna</p>
						<p class="columna xmall-4 text-right">$45.00</p>
						<span></span>
					</li>
				</ul>
				<span></span>
			</article>
			<article class="categoria columna xmall-12 medium-4 clearfix">
				<img src="<?php echo THEMEPATH; ?>images/dumplings.jpg" />
				<h3>Gyozas / Rangoons / Dumplings</h3>
				<span class="block">Empanadas orientales fritas o al vapor</span>
				<ul>
					<li class="clearfix">
						<p class="columna xmall-8">Gyozas pollo</p>
						<p class="columna xmall-4 text-right">$45.00</p>
					</li>
					<li class="clearfix">
						<p class="columna xmall-8">Gyozas carne</p>
						<p class="columna xmall-4 text-right">$45.00</p>
					</li>
					<li class="clearfix">
						<p class="columna xmall-8">Gyozas verduras</p>
						<p class="columna xmall-4 text-right">$45.00</p>
						<span>¡Pídelos para tu sopa!</span>
					</li>
					<li class="clearfix">
						<p class="columna xmall-8">Rangoons de queso crema</p>
						<p class="columna xmall-4 text-right">$45.00</p>
					</li>
				</ul>
			</article>
			<article class="categoria columna xmall-12 medium-4 clearfix">
				<img src="<?php echo THEMEPATH; ?>images/kiuss.jpg" />
				<h3>Kiuss / Onigiris</h3>
				<span class="block">Acompañados de salsas dulce y chipotle</span>
				<ul>
					<li>
						<p class="columna xmall-8">Kiuss queso crema</p>
						<p class="columna xmall-4 text-right">$45.00</p>
						<span>Esferas de arroz empaniadas</span>
					</li>
					<li>
						<p class="columna xmall-8">Kiuss manchego aceituna</p>
						<p class="columna xmall-4 text-right">$45.00</p>
						<span></span>
					</li>
				</ul>
				<span></span>
			</article>
		</section>


	</div><!-- main -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>