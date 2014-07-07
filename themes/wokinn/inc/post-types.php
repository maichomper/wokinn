<?php


// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////


	add_action('init', function(){

		// Eventos
		$labelsEventos = array(
			'name'          => 'Eventos',
			'singular_name' => 'Evento',
			'add_new'       => 'Nuevo Evento',
			'add_new_item'  => 'Nuevo Evento',
			'edit_item'     => 'Editar Evento',
			'new_item'      => 'Evento',
			'all_items'     => 'Todos',
			'view_item'     => 'Ver Evento',
			'search_items'  => 'Buscar Evento',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Eventos'
		);

		$argsEventos = array(
			'labels'             => $labelsEventos,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'eventos' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'eventos', $argsEventos );

		// Sé Verde
		$labelsSeVerde = array(
			'name'          => 'Sé Verde',
			'singular_name' => 'Sé Verde',
			'add_new'       => 'Nuevo Sé Verde',
			'add_new_item'  => 'Nuevo Sé Verde',
			'edit_item'     => 'Editar Sé Verde',
			'new_item'      => 'Sé Verde',
			'all_items'     => 'Todos',
			'view_item'     => 'Ver Sé Verde',
			'search_items'  => 'Buscar Sé Verde',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Sé Verde'
		);

		$argsSeVerde = array(
			'labels'             => $labelsSeVerde,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'se-verde' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'se-verde', $argsSeVerde );

		// Nosotros
		$labelsNosotros = array(
			'name'          => 'Nosotros',
			'singular_name' => 'Nosotros',
			'add_new'       => 'Nuevo Nosotros',
			'add_new_item'  => 'Nuevo Nosotros',
			'edit_item'     => 'Editar Nosotros',
			'new_item'      => 'Nosotros',
			'all_items'     => 'Todos',
			'view_item'     => 'Ver Nosotros',
			'search_items'  => 'Buscar Nosotros',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Nosotros'
		);

		$argsNosotros = array(
			'labels'             => $labelsNosotros,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'nosotros' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'nosotros', $argsNosotros );

		

	});