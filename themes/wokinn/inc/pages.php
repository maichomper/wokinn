<?php


// CUSTOM PAGES //////////////////////////////////////////////////////////////////////


	add_action('init', function(){

		// CONTACTO
		if( ! get_page_by_path('contacto') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Contacto',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		// Galería
		if( ! get_page_by_path('galeria') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Galería',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		// Evento recibido
		if( ! get_page_by_path('evento-recibido') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Evento recibido',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		// Contacto recibido
		if( ! get_page_by_path('contacto-recibido') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Contacto recibido',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		// Info nosotros
		if( ! get_page_by_path('info-nosotros') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Info nosotros',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}


	});
