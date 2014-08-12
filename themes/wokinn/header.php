<!doctype html>
	<head>
		<meta charset="utf-8">
		<title><?php print_title(); ?></title>
		<link rel="shortcut icon" href="<?php echo THEMEPATH; ?>images/favicon.ico">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="cleartype" content="on">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<?php wp_head(); ?>
	</head>

	<body>
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->

		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=1436867519858954&version=v2.0";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		
		<div class="container">
			<header>
				<div class="width clearfix">

					<h1 class="block columna xmall-5 medium-2 center no-center-medium">
						<a href="/wok-inn">
							<img src="<?php echo THEMEPATH; ?>images/logo.png" alt="" />
						</a>
					</h1>

					<div class="columna xmall-1 right no-large" id="btn-movil">
						<a href="#"><i class="fa fa-bars"></i></a>
					</div>

					<div class="columna xmall-12 medium-10 clearfix bloque-datos">
						
						<div class="pedidos columna xmall-12 medium-11 large-11 center block">
							<p class="columna xmall-12 medium-4 large-4">Pedidos:<br>
							5207-2840 / 2619</p>
							<p class="columna xmall-12 medium-6 large-6">Álvaro Obregón 187-A<wbr> Col. Roma Norte Del. Cuauhtémoc 06700 México D.F.</p>

							<div class="span no-xmall medium medium-2 large-1 redes right">
								<a href="https://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
								<div class="clear"></div>
								<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
							</div>
						</div>
						

						

						<div class="clear"></div>

						<nav class="clearfix full navegacion no-xmall no-medium large">
							<a class="block left text-center <?php if ( is_home() ){ echo 'active'; } ?>" href="<?php echo home_url(); ?>">Menú</a>
							<a class="block left text-center <?php if ( 'nosotros' == get_post_type() ){ echo 'active'; } ?>" href="<?php echo site_url('nosotros'); ?>">Nosotros</a>
							<a class="block left text-center <?php if ( 'eventos' == get_post_type() ){ echo 'active'; } ?>" href="<?php echo site_url('eventos'); ?>">Eventos</a>
							<a class="block left text-center <?php if ( 'se-verde' == get_post_type() ){ echo 'active'; } ?>" href="<?php echo site_url('se-verde'); ?>">Sé Verde</a>
							<a class="block left text-center <?php if ( is_page('contacto') ){ echo 'class="active"'; } ?>" href="<?php echo site_url('contacto'); ?>">Contacto</a>
						</nav>

					</div><!-- xmall-10 -->

				</div>
			</header>

			<div class="main width">
