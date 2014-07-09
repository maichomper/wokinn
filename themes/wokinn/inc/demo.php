<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://www.deluxeblogtips.com/meta-box/
 */


add_filter( 'rwmb_meta_boxes', 'menu_register_meta_boxes' );

/**
 * Register meta boxes
 *
 * @return void
 */
function menu_register_meta_boxes( $meta_boxes )
{
	/**
	 * Prefix of meta keys (optional)
	 * Use underscore (_) at the beginning to make keys hidden
	 * Alt.: You also can make prefix empty to disable it
	 */
	// Better has an underscore as last sign
	$prefix = 'menu_';

	$meta_boxes[] = array(
		'id' => 'platillo1',
		'title' => __( 'Platillo 1', 'rwmb' ),
		'pages' => array( 'menu' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			array(
				'name'  => __( 'Nombre', 'rwmb' ),
				'id'    => "{$prefix}nombre1",
				'type'  => 'text',
			),
			array(
				'name'  => __( 'Precio', 'rwmb' ),
				'id'    => "{$prefix}precio1",
				'type'  => 'text',
			),
			array(
				'name' => __( 'Descripción', 'rwmb' ),
				'id'   => "{$prefix}descripcion1",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 3,
			),
			array(
				'name' => __( 'Foto del platillo', 'rwmb' ),
				'id'   => "{$prefix}foto1",
				'type' => 'image',
			),
		),
		'validation' => array(
			'rules' => array(
				"{$prefix}password" => array(
					'required'  => true,
					'minlength' => 7,
				),
			),
			// optional override of default jquery.validate messages
			'messages' => array(
				"{$prefix}password" => array(
					'required'  => __( 'Password is required', 'rwmb' ),
					'minlength' => __( 'Password must be at least 7 characters', 'rwmb' ),
				),
			)
		)
	);

	$meta_boxes[] = array(
		'id' => 'platillo2',
		'title' => __( 'Platillo 2', 'rwmb' ),
		'pages' => array( 'menu' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			array(
				'name'  => __( 'Nombre', 'rwmb' ),
				'id'    => "{$prefix}nombre2",
				'type'  => 'text',
			),
			array(
				'name'  => __( 'Precio', 'rwmb' ),
				'id'    => "{$prefix}precio2",
				'type'  => 'text',
			),
			array(
				'name' => __( 'Descripción', 'rwmb' ),
				'id'   => "{$prefix}descripcion2",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 3,
			),
			array(
				'name' => __( 'Foto del platillo', 'rwmb' ),
				'id'   => "{$prefix}foto2",
				'type' => 'image',
			),
		),
		'validation' => array(
			'rules' => array(
				"{$prefix}password" => array(
					'required'  => true,
					'minlength' => 7,
				),
			),
			// optional override of default jquery.validate messages
			'messages' => array(
				"{$prefix}password" => array(
					'required'  => __( 'Password is required', 'rwmb' ),
					'minlength' => __( 'Password must be at least 7 characters', 'rwmb' ),
				),
			)
		)
	);

	$meta_boxes[] = array(
		'id' => 'platillo3',
		'title' => __( 'Platillo 3', 'rwmb' ),
		'pages' => array( 'menu' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			array(
				'name'  => __( 'Nombre', 'rwmb' ),
				'id'    => "{$prefix}nombre3",
				'type'  => 'text',
			),
			array(
				'name'  => __( 'Precio', 'rwmb' ),
				'id'    => "{$prefix}precio3",
				'type'  => 'text',
			),
			array(
				'name' => __( 'Descripción', 'rwmb' ),
				'id'   => "{$prefix}descripcion3",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 3,
			),
			array(
				'name' => __( 'Foto del platillo', 'rwmb' ),
				'id'   => "{$prefix}foto3",
				'type' => 'image',
			),
		),
		'validation' => array(
			'rules' => array(
				"{$prefix}password" => array(
					'required'  => true,
					'minlength' => 7,
				),
			),
			// optional override of default jquery.validate messages
			'messages' => array(
				"{$prefix}password" => array(
					'required'  => __( 'Password is required', 'rwmb' ),
					'minlength' => __( 'Password must be at least 7 characters', 'rwmb' ),
				),
			)
		)
	);

	$meta_boxes[] = array(
		'id' => 'platillo4',
		'title' => __( 'Platillo 4', 'rwmb' ),
		'pages' => array( 'menu' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			array(
				'name'  => __( 'Nombre', 'rwmb' ),
				'id'    => "{$prefix}nombre4",
				'type'  => 'text',
			),
			array(
				'name'  => __( 'Precio', 'rwmb' ),
				'id'    => "{$prefix}precio4",
				'type'  => 'text',
			),
			array(
				'name' => __( 'Descripción', 'rwmb' ),
				'id'   => "{$prefix}descripcion4",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 3,
			),
			array(
				'name' => __( 'Foto del platillo', 'rwmb' ),
				'id'   => "{$prefix}foto4",
				'type' => 'image',
			),
		),
		'validation' => array(
			'rules' => array(
				"{$prefix}password" => array(
					'required'  => true,
					'minlength' => 7,
				),
			),
			// optional override of default jquery.validate messages
			'messages' => array(
				"{$prefix}password" => array(
					'required'  => __( 'Password is required', 'rwmb' ),
					'minlength' => __( 'Password must be at least 7 characters', 'rwmb' ),
				),
			)
		)
	);

	$meta_boxes[] = array(
		'id' => 'platillo5',
		'title' => __( 'Platillo 5', 'rwmb' ),
		'pages' => array( 'menu' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			array(
				'name'  => __( 'Nombre', 'rwmb' ),
				'id'    => "{$prefix}nombre5",
				'type'  => 'text',
			),
			array(
				'name'  => __( 'Precio', 'rwmb' ),
				'id'    => "{$prefix}precio5",
				'type'  => 'text',
			),
			array(
				'name' => __( 'Descripción', 'rwmb' ),
				'id'   => "{$prefix}descripcion5",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 3,
			),
			array(
				'name' => __( 'Foto del platillo', 'rwmb' ),
				'id'   => "{$prefix}foto5",
				'type' => 'image',
			),
		),
		'validation' => array(
			'rules' => array(
				"{$prefix}password" => array(
					'required'  => true,
					'minlength' => 7,
				),
			),
			// optional override of default jquery.validate messages
			'messages' => array(
				"{$prefix}password" => array(
					'required'  => __( 'Password is required', 'rwmb' ),
					'minlength' => __( 'Password must be at least 7 characters', 'rwmb' ),
				),
			)
		)
	);

	$meta_boxes[] = array(
		'id' => 'platillo6',
		'title' => __( 'Platillo 6', 'rwmb' ),
		'pages' => array( 'menu' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			array(
				'name'  => __( 'Nombre', 'rwmb' ),
				'id'    => "{$prefix}nombre6",
				'type'  => 'text',
			),
			array(
				'name'  => __( 'Precio', 'rwmb' ),
				'id'    => "{$prefix}precio6",
				'type'  => 'text',
			),
			array(
				'name' => __( 'Descripción', 'rwmb' ),
				'id'   => "{$prefix}descripcion6",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 3,
			),
			array(
				'name' => __( 'Foto del platillo', 'rwmb' ),
				'id'   => "{$prefix}foto6",
				'type' => 'image',
			),
		),
		'validation' => array(
			'rules' => array(
				"{$prefix}password" => array(
					'required'  => true,
					'minlength' => 7,
				),
			),
			// optional override of default jquery.validate messages
			'messages' => array(
				"{$prefix}password" => array(
					'required'  => __( 'Password is required', 'rwmb' ),
					'minlength' => __( 'Password must be at least 7 characters', 'rwmb' ),
				),
			)
		)
	);

	$meta_boxes[] = array(
		'id' => 'platillo7',
		'title' => __( 'Platillo 7', 'rwmb' ),
		'pages' => array( 'menu' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			array(
				'name'  => __( 'Nombre', 'rwmb' ),
				'id'    => "{$prefix}nombre7",
				'type'  => 'text',
			),
			array(
				'name'  => __( 'Precio', 'rwmb' ),
				'id'    => "{$prefix}precio7",
				'type'  => 'text',
			),
			array(
				'name' => __( 'Descripción', 'rwmb' ),
				'id'   => "{$prefix}descripcion7",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 3,
			),
			array(
				'name' => __( 'Foto del platillo', 'rwmb' ),
				'id'   => "{$prefix}foto7",
				'type' => 'image',
			),
		),
		'validation' => array(
			'rules' => array(
				"{$prefix}password" => array(
					'required'  => true,
					'minlength' => 7,
				),
			),
			// optional override of default jquery.validate messages
			'messages' => array(
				"{$prefix}password" => array(
					'required'  => __( 'Password is required', 'rwmb' ),
					'minlength' => __( 'Password must be at least 7 characters', 'rwmb' ),
				),
			)
		)
	);

	$meta_boxes[] = array(
		'id' => 'platillo8',
		'title' => __( 'Platillo 8', 'rwmb' ),
		'pages' => array( 'menu' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			array(
				'name'  => __( 'Nombre', 'rwmb' ),
				'id'    => "{$prefix}nombre8",
				'type'  => 'text',
			),
			array(
				'name'  => __( 'Precio', 'rwmb' ),
				'id'    => "{$prefix}precio8",
				'type'  => 'text',
			),
			array(
				'name' => __( 'Descripción', 'rwmb' ),
				'id'   => "{$prefix}descripcion8",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 3,
			),
			array(
				'name' => __( 'Foto del platillo', 'rwmb' ),
				'id'   => "{$prefix}foto8",
				'type' => 'image',
			),
		),
		'validation' => array(
			'rules' => array(
				"{$prefix}password" => array(
					'required'  => true,
					'minlength' => 7,
				),
			),
			// optional override of default jquery.validate messages
			'messages' => array(
				"{$prefix}password" => array(
					'required'  => __( 'Password is required', 'rwmb' ),
					'minlength' => __( 'Password must be at least 7 characters', 'rwmb' ),
				),
			)
		)
	);

	$meta_boxes[] = array(
		'id' => 'platillo9',
		'title' => __( 'Platillo 9', 'rwmb' ),
		'pages' => array( 'menu' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			array(
				'name'  => __( 'Nombre', 'rwmb' ),
				'id'    => "{$prefix}nombre9",
				'type'  => 'text',
			),
			array(
				'name'  => __( 'Precio', 'rwmb' ),
				'id'    => "{$prefix}precio9",
				'type'  => 'text',
			),
			array(
				'name' => __( 'Descripción', 'rwmb' ),
				'id'   => "{$prefix}descripcion9",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 3,
			),
			array(
				'name' => __( 'Foto del platillo', 'rwmb' ),
				'id'   => "{$prefix}foto9",
				'type' => 'image',
			),
		),
		'validation' => array(
			'rules' => array(
				"{$prefix}password" => array(
					'required'  => true,
					'minlength' => 7,
				),
			),
			// optional override of default jquery.validate messages
			'messages' => array(
				"{$prefix}password" => array(
					'required'  => __( 'Password is required', 'rwmb' ),
					'minlength' => __( 'Password must be at least 7 characters', 'rwmb' ),
				),
			)
		)
	);

	$meta_boxes[] = array(
		'id' => 'platillo10',
		'title' => __( 'Platillo 10', 'rwmb' ),
		'pages' => array( 'menu' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			array(
				'name'  => __( 'Nombre', 'rwmb' ),
				'id'    => "{$prefix}nombre10",
				'type'  => 'text',
			),
			array(
				'name'  => __( 'Precio', 'rwmb' ),
				'id'    => "{$prefix}precio10",
				'type'  => 'text',
			),
			array(
				'name' => __( 'Descripción', 'rwmb' ),
				'id'   => "{$prefix}descripcion10",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 3,
			),
			array(
				'name' => __( 'Foto del platillo', 'rwmb' ),
				'id'   => "{$prefix}foto10",
				'type' => 'image',
			),
		),
		'validation' => array(
			'rules' => array(
				"{$prefix}password" => array(
					'required'  => true,
					'minlength' => 7,
				),
			),
			// optional override of default jquery.validate messages
			'messages' => array(
				"{$prefix}password" => array(
					'required'  => __( 'Password is required', 'rwmb' ),
					'minlength' => __( 'Password must be at least 7 characters', 'rwmb' ),
				),
			)
		)
	);

	$meta_boxes[] = array(
		'id' => 'platillo11',
		'title' => __( 'Platillo 11', 'rwmb' ),
		'pages' => array( 'menu' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			array(
				'name'  => __( 'Nombre', 'rwmb' ),
				'id'    => "{$prefix}nombre11",
				'type'  => 'text',
			),
			array(
				'name'  => __( 'Precio', 'rwmb' ),
				'id'    => "{$prefix}precio11",
				'type'  => 'text',
			),
			array(
				'name' => __( 'Descripción', 'rwmb' ),
				'id'   => "{$prefix}descripcion11",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 3,
			),
			array(
				'name' => __( 'Foto del platillo', 'rwmb' ),
				'id'   => "{$prefix}foto11",
				'type' => 'image',
			),
		),
		'validation' => array(
			'rules' => array(
				"{$prefix}password" => array(
					'required'  => true,
					'minlength' => 7,
				),
			),
			// optional override of default jquery.validate messages
			'messages' => array(
				"{$prefix}password" => array(
					'required'  => __( 'Password is required', 'rwmb' ),
					'minlength' => __( 'Password must be at least 7 characters', 'rwmb' ),
				),
			)
		)
	);

	$meta_boxes[] = array(
		'id' => 'platillo12',
		'title' => __( 'Platillo 12', 'rwmb' ),
		'pages' => array( 'menu' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			array(
				'name'  => __( 'Nombre', 'rwmb' ),
				'id'    => "{$prefix}nombre12",
				'type'  => 'text',
			),
			array(
				'name'  => __( 'Precio', 'rwmb' ),
				'id'    => "{$prefix}precio12",
				'type'  => 'text',
			),
			array(
				'name' => __( 'Descripción', 'rwmb' ),
				'id'   => "{$prefix}descripcion12",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 3,
			),
			array(
				'name' => __( 'Foto del platillo', 'rwmb' ),
				'id'   => "{$prefix}foto12",
				'type' => 'image',
			),
		),
		'validation' => array(
			'rules' => array(
				"{$prefix}password" => array(
					'required'  => true,
					'minlength' => 7,
				),
			),
			// optional override of default jquery.validate messages
			'messages' => array(
				"{$prefix}password" => array(
					'required'  => __( 'Password is required', 'rwmb' ),
					'minlength' => __( 'Password must be at least 7 characters', 'rwmb' ),
				),
			)
		)
	);

	$meta_boxes[] = array(
		'id' => 'platillo13',
		'title' => __( 'Platillo 13', 'rwmb' ),
		'pages' => array( 'menu' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			array(
				'name'  => __( 'Nombre', 'rwmb' ),
				'id'    => "{$prefix}nombre13",
				'type'  => 'text',
			),
			array(
				'name'  => __( 'Precio', 'rwmb' ),
				'id'    => "{$prefix}precio13",
				'type'  => 'text',
			),
			array(
				'name' => __( 'Descripción', 'rwmb' ),
				'id'   => "{$prefix}descripcion13",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 3,
			),
			array(
				'name' => __( 'Foto del platillo', 'rwmb' ),
				'id'   => "{$prefix}foto13",
				'type' => 'image',
			),
		),
		'validation' => array(
			'rules' => array(
				"{$prefix}password" => array(
					'required'  => true,
					'minlength' => 7,
				),
			),
			// optional override of default jquery.validate messages
			'messages' => array(
				"{$prefix}password" => array(
					'required'  => __( 'Password is required', 'rwmb' ),
					'minlength' => __( 'Password must be at least 7 characters', 'rwmb' ),
				),
			)
		)
	);

	$meta_boxes[] = array(
		'id' => 'platillo14',
		'title' => __( 'Platillo 14', 'rwmb' ),
		'pages' => array( 'menu' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			array(
				'name'  => __( 'Nombre', 'rwmb' ),
				'id'    => "{$prefix}nombre14",
				'type'  => 'text',
			),
			array(
				'name'  => __( 'Precio', 'rwmb' ),
				'id'    => "{$prefix}precio14",
				'type'  => 'text',
			),
			array(
				'name' => __( 'Descripción', 'rwmb' ),
				'id'   => "{$prefix}descripcion14",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 3,
			),
			array(
				'name' => __( 'Foto del platillo', 'rwmb' ),
				'id'   => "{$prefix}foto14",
				'type' => 'image',
			),
		),
		'validation' => array(
			'rules' => array(
				"{$prefix}password" => array(
					'required'  => true,
					'minlength' => 7,
				),
			),
			// optional override of default jquery.validate messages
			'messages' => array(
				"{$prefix}password" => array(
					'required'  => __( 'Password is required', 'rwmb' ),
					'minlength' => __( 'Password must be at least 7 characters', 'rwmb' ),
				),
			)
		)
	);

	$meta_boxes[] = array(
		'id' => 'platillo15',
		'title' => __( 'Platillo 15', 'rwmb' ),
		'pages' => array( 'menu' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			array(
				'name'  => __( 'Nombre', 'rwmb' ),
				'id'    => "{$prefix}nombre15",
				'type'  => 'text',
			),
			array(
				'name'  => __( 'Precio', 'rwmb' ),
				'id'    => "{$prefix}precio15",
				'type'  => 'text',
			),
			array(
				'name' => __( 'Descripción', 'rwmb' ),
				'id'   => "{$prefix}descripcion15",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 3,
			),
			array(
				'name' => __( 'Foto del platillo', 'rwmb' ),
				'id'   => "{$prefix}foto15",
				'type' => 'image',
			),
		),
		'validation' => array(
			'rules' => array(
				"{$prefix}password" => array(
					'required'  => true,
					'minlength' => 7,
				),
			),
			// optional override of default jquery.validate messages
			'messages' => array(
				"{$prefix}password" => array(
					'required'  => __( 'Password is required', 'rwmb' ),
					'minlength' => __( 'Password must be at least 7 characters', 'rwmb' ),
				),
			)
		)
	);

	$meta_boxes[] = array(
		'id' => 'platillo16',
		'title' => __( 'Platillo 16', 'rwmb' ),
		'pages' => array( 'menu' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			array(
				'name'  => __( 'Nombre', 'rwmb' ),
				'id'    => "{$prefix}nombre16",
				'type'  => 'text',
			),
			array(
				'name'  => __( 'Precio', 'rwmb' ),
				'id'    => "{$prefix}precio16",
				'type'  => 'text',
			),
			array(
				'name' => __( 'Descripción', 'rwmb' ),
				'id'   => "{$prefix}descripcion16",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 3,
			),
			array(
				'name' => __( 'Foto del platillo', 'rwmb' ),
				'id'   => "{$prefix}foto16",
				'type' => 'image',
			),
		),
		'validation' => array(
			'rules' => array(
				"{$prefix}password" => array(
					'required'  => true,
					'minlength' => 7,
				),
			),
			// optional override of default jquery.validate messages
			'messages' => array(
				"{$prefix}password" => array(
					'required'  => __( 'Password is required', 'rwmb' ),
					'minlength' => __( 'Password must be at least 7 characters', 'rwmb' ),
				),
			)
		)
	);

	$meta_boxes[] = array(
		'id' => 'platillo17',
		'title' => __( 'Platillo 17', 'rwmb' ),
		'pages' => array( 'menu' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			array(
				'name'  => __( 'Nombre', 'rwmb' ),
				'id'    => "{$prefix}nombre17",
				'type'  => 'text',
			),
			array(
				'name'  => __( 'Precio', 'rwmb' ),
				'id'    => "{$prefix}precio17",
				'type'  => 'text',
			),
			array(
				'name' => __( 'Descripción', 'rwmb' ),
				'id'   => "{$prefix}descripcion17",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 3,
			),
			array(
				'name' => __( 'Foto del platillo', 'rwmb' ),
				'id'   => "{$prefix}foto17",
				'type' => 'image',
			),
		),
		'validation' => array(
			'rules' => array(
				"{$prefix}password" => array(
					'required'  => true,
					'minlength' => 7,
				),
			),
			// optional override of default jquery.validate messages
			'messages' => array(
				"{$prefix}password" => array(
					'required'  => __( 'Password is required', 'rwmb' ),
					'minlength' => __( 'Password must be at least 7 characters', 'rwmb' ),
				),
			)
		)
	);

	$meta_boxes[] = array(
		'id' => 'platillo18',
		'title' => __( 'Platillo 18', 'rwmb' ),
		'pages' => array( 'menu' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			array(
				'name'  => __( 'Nombre', 'rwmb' ),
				'id'    => "{$prefix}nombre18",
				'type'  => 'text',
			),
			array(
				'name'  => __( 'Precio', 'rwmb' ),
				'id'    => "{$prefix}precio18",
				'type'  => 'text',
			),
			array(
				'name' => __( 'Descripción', 'rwmb' ),
				'id'   => "{$prefix}descripcion18",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 3,
			),
			array(
				'name' => __( 'Foto del platillo', 'rwmb' ),
				'id'   => "{$prefix}foto18",
				'type' => 'image',
			),
		),
		'validation' => array(
			'rules' => array(
				"{$prefix}password" => array(
					'required'  => true,
					'minlength' => 7,
				),
			),
			// optional override of default jquery.validate messages
			'messages' => array(
				"{$prefix}password" => array(
					'required'  => __( 'Password is required', 'rwmb' ),
					'minlength' => __( 'Password must be at least 7 characters', 'rwmb' ),
				),
			)
		)
	);

	$meta_boxes[] = array(
		'id' => 'platillo19',
		'title' => __( 'Platillo 19', 'rwmb' ),
		'pages' => array( 'menu' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			array(
				'name'  => __( 'Nombre', 'rwmb' ),
				'id'    => "{$prefix}nombre19",
				'type'  => 'text',
			),
			array(
				'name'  => __( 'Precio', 'rwmb' ),
				'id'    => "{$prefix}precio19",
				'type'  => 'text',
			),
			array(
				'name' => __( 'Descripción', 'rwmb' ),
				'id'   => "{$prefix}descripcion19",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 3,
			),
			array(
				'name' => __( 'Foto del platillo', 'rwmb' ),
				'id'   => "{$prefix}foto19",
				'type' => 'image',
			),
		),
		'validation' => array(
			'rules' => array(
				"{$prefix}password" => array(
					'required'  => true,
					'minlength' => 7,
				),
			),
			// optional override of default jquery.validate messages
			'messages' => array(
				"{$prefix}password" => array(
					'required'  => __( 'Password is required', 'rwmb' ),
					'minlength' => __( 'Password must be at least 7 characters', 'rwmb' ),
				),
			)
		)
	);

	$meta_boxes[] = array(
		'id' => 'platillo20',
		'title' => __( 'Platillo 20', 'rwmb' ),
		'pages' => array( 'menu' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			array(
				'name'  => __( 'Nombre', 'rwmb' ),
				'id'    => "{$prefix}nombre20",
				'type'  => 'text',
			),
			array(
				'name'  => __( 'Precio', 'rwmb' ),
				'id'    => "{$prefix}precio20",
				'type'  => 'text',
			),
			array(
				'name' => __( 'Descripción', 'rwmb' ),
				'id'   => "{$prefix}descripcion20",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 3,
			),
			array(
				'name' => __( 'Foto del platillo', 'rwmb' ),
				'id'   => "{$prefix}foto20",
				'type' => 'image',
			),
		),
		'validation' => array(
			'rules' => array(
				"{$prefix}password" => array(
					'required'  => true,
					'minlength' => 7,
				),
			),
			// optional override of default jquery.validate messages
			'messages' => array(
				"{$prefix}password" => array(
					'required'  => __( 'Password is required', 'rwmb' ),
					'minlength' => __( 'Password must be at least 7 characters', 'rwmb' ),
				),
			)
		)
	);

	$meta_boxes[] = array(
		'id' => 'platillo21',
		'title' => __( 'Platillo 21', 'rwmb' ),
		'pages' => array( 'menu' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			array(
				'name'  => __( 'Nombre', 'rwmb' ),
				'id'    => "{$prefix}nombre21",
				'type'  => 'text',
			),
			array(
				'name'  => __( 'Precio', 'rwmb' ),
				'id'    => "{$prefix}precio21",
				'type'  => 'text',
			),
			array(
				'name' => __( 'Descripción', 'rwmb' ),
				'id'   => "{$prefix}descripcion21",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 3,
			),
			array(
				'name' => __( 'Foto del platillo', 'rwmb' ),
				'id'   => "{$prefix}foto21",
				'type' => 'image',
			),
		),
		'validation' => array(
			'rules' => array(
				"{$prefix}password" => array(
					'required'  => true,
					'minlength' => 7,
				),
			),
			// optional override of default jquery.validate messages
			'messages' => array(
				"{$prefix}password" => array(
					'required'  => __( 'Password is required', 'rwmb' ),
					'minlength' => __( 'Password must be at least 7 characters', 'rwmb' ),
				),
			)
		)
	);

	$meta_boxes[] = array(
		'id' => 'platillo22',
		'title' => __( 'Platillo 22', 'rwmb' ),
		'pages' => array( 'menu' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			array(
				'name'  => __( 'Nombre', 'rwmb' ),
				'id'    => "{$prefix}nombre22",
				'type'  => 'text',
			),
			array(
				'name'  => __( 'Precio', 'rwmb' ),
				'id'    => "{$prefix}precio22",
				'type'  => 'text',
			),
			array(
				'name' => __( 'Descripción', 'rwmb' ),
				'id'   => "{$prefix}descripcion22",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 3,
			),
			array(
				'name' => __( 'Foto del platillo', 'rwmb' ),
				'id'   => "{$prefix}foto22",
				'type' => 'image',
			),
		),
		'validation' => array(
			'rules' => array(
				"{$prefix}password" => array(
					'required'  => true,
					'minlength' => 7,
				),
			),
			// optional override of default jquery.validate messages
			'messages' => array(
				"{$prefix}password" => array(
					'required'  => __( 'Password is required', 'rwmb' ),
					'minlength' => __( 'Password must be at least 7 characters', 'rwmb' ),
				),
			)
		)
	);

	$meta_boxes[] = array(
		'id' => 'platillo23',
		'title' => __( 'Platillo 23', 'rwmb' ),
		'pages' => array( 'menu' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			array(
				'name'  => __( 'Nombre', 'rwmb' ),
				'id'    => "{$prefix}nombre23",
				'type'  => 'text',
			),
			array(
				'name'  => __( 'Precio', 'rwmb' ),
				'id'    => "{$prefix}precio23",
				'type'  => 'text',
			),
			array(
				'name' => __( 'Descripción', 'rwmb' ),
				'id'   => "{$prefix}descripcion23",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 3,
			),
			array(
				'name' => __( 'Foto del platillo', 'rwmb' ),
				'id'   => "{$prefix}foto23",
				'type' => 'image',
			),
		),
		'validation' => array(
			'rules' => array(
				"{$prefix}password" => array(
					'required'  => true,
					'minlength' => 7,
				),
			),
			// optional override of default jquery.validate messages
			'messages' => array(
				"{$prefix}password" => array(
					'required'  => __( 'Password is required', 'rwmb' ),
					'minlength' => __( 'Password must be at least 7 characters', 'rwmb' ),
				),
			)
		)
	);

	$meta_boxes[] = array(
		'id' => 'platillo24',
		'title' => __( 'Platillo 24', 'rwmb' ),
		'pages' => array( 'menu' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			array(
				'name'  => __( 'Nombre', 'rwmb' ),
				'id'    => "{$prefix}nombre24",
				'type'  => 'text',
			),
			array(
				'name'  => __( 'Precio', 'rwmb' ),
				'id'    => "{$prefix}precio24",
				'type'  => 'text',
			),
			array(
				'name' => __( 'Descripción', 'rwmb' ),
				'id'   => "{$prefix}descripcion24",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 3,
			),
			array(
				'name' => __( 'Foto del platillo', 'rwmb' ),
				'id'   => "{$prefix}foto24",
				'type' => 'image',
			),
		),
		'validation' => array(
			'rules' => array(
				"{$prefix}password" => array(
					'required'  => true,
					'minlength' => 7,
				),
			),
			// optional override of default jquery.validate messages
			'messages' => array(
				"{$prefix}password" => array(
					'required'  => __( 'Password is required', 'rwmb' ),
					'minlength' => __( 'Password must be at least 7 characters', 'rwmb' ),
				),
			)
		)
	);

	$meta_boxes[] = array(
		'id' => 'platillo25',
		'title' => __( 'Platillo 25', 'rwmb' ),
		'pages' => array( 'menu' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			array(
				'name'  => __( 'Nombre', 'rwmb' ),
				'id'    => "{$prefix}nombre25",
				'type'  => 'text',
			),
			array(
				'name'  => __( 'Precio', 'rwmb' ),
				'id'    => "{$prefix}precio25",
				'type'  => 'text',
			),
			array(
				'name' => __( 'Descripción', 'rwmb' ),
				'id'   => "{$prefix}descripcion25",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 3,
			),
			array(
				'name' => __( 'Foto del platillo', 'rwmb' ),
				'id'   => "{$prefix}foto25",
				'type' => 'image',
			),
		),
		'validation' => array(
			'rules' => array(
				"{$prefix}password" => array(
					'required'  => true,
					'minlength' => 7,
				),
			),
			// optional override of default jquery.validate messages
			'messages' => array(
				"{$prefix}password" => array(
					'required'  => __( 'Password is required', 'rwmb' ),
					'minlength' => __( 'Password must be at least 7 characters', 'rwmb' ),
				),
			)
		)
	);

	return $meta_boxes;
}