<?php


// CUSTOM METABOXES //////////////////////////////////////////////////////////////////

	add_action('add_meta_boxes', function(){

		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;

		// add_meta_box( id, title, name_meta_callback, post_type, context, priority );

		//Contacto
		$contacto = get_page_by_title( 'contacto' );
		$contactoId = $contacto->ID;

		if ( $post_id == $contactoId ){
			add_meta_box( 'contacto', 'Contacto', 'metabox_contacto', 'page', 'normal', 'default' );
		}

	});


// CUSTOM METABOXES CALLBACK FUNCTIONS ///////////////////////////////////////////////



	function name_meta_callback($post){
		// $name = get_post_meta($post->ID, '_name_meta', true);
		// wp_nonce_field(__FILE__, '_name_meta_nonce');
		// echo "<input type='text' class='widefat' id='name' name='_name_meta' value='$name'/>";
	}

	function metabox_contacto($post){
		$direccion = get_post_meta($post->ID, '_direccion_meta', true);
		$telefono1 = get_post_meta($post->ID, '_telefono1_meta', true);
		$telefono2 = get_post_meta($post->ID, '_telefono2_meta', true);
		$email = get_post_meta($post->ID, '_email_meta', true);

		wp_nonce_field(__FILE__, '_direccion_meta_nonce');
		wp_nonce_field(__FILE__, '_telefono1_meta_nonce');
		wp_nonce_field(__FILE__, '_telefono2_meta_nonce');
		wp_nonce_field(__FILE__, '_email_meta_nonce');

echo <<<END

	<label>Dirección:</label>
	<textarea rows="2" class="widefat" id="direccion" name="_direccion_meta">$direccion</textarea>

	<label>Teléfono 1:</label>
	<input type="text" class="widefat" id="telefono1" name="_telefono1_meta" value="$telefono1" />

	<label>Teléfono 2:</label>
	<input type="text" class="widefat" id="telefono2" name="_telefono2_meta" value="$telefono2" />

	<label>Email:</label>
	<input type="text" class="widefat" id="email" name="_email_meta" value="$email" />
END;
}



// SAVE METABOXES DATA ///////////////////////////////////////////////////////////////



	add_action('save_post', function($post_id){


		if ( ! current_user_can('edit_page', $post_id))
			return $post_id;


		if ( defined('DOING_AUTOSAVE') and DOING_AUTOSAVE )
			return $post_id;


		if ( wp_is_post_revision($post_id) OR wp_is_post_autosave($post_id) )
			return $post_id;


		if ( isset($_POST['_name_meta']) and check_admin_referer(__FILE__, '_name_meta_nonce') ){
			update_post_meta($post_id, '_name_meta', $_POST['_name_meta']);
		}


		//Contacto
		if ( isset($_POST['_direccion_meta']) and check_admin_referer(__FILE__, '_direccion_meta_nonce') ){
			update_post_meta($post_id, '_direccion_meta', $_POST['_direccion_meta']);
		}

		if ( isset($_POST['_telefono1_meta']) and check_admin_referer(__FILE__, '_telefono1_meta_nonce') ){
			update_post_meta($post_id, '_telefono1_meta', $_POST['_telefono1_meta']);
		}

		if ( isset($_POST['_telefono2_meta']) and check_admin_referer(__FILE__, '_telefono2_meta_nonce') ){
			update_post_meta($post_id, '_telefono2_meta', $_POST['_telefono2_meta']);
		}

		if ( isset($_POST['_email_meta']) and check_admin_referer(__FILE__, '_email_meta_nonce') ){
			update_post_meta($post_id, '_email_meta', $_POST['_email_meta']);
		}


	});



// OTHER METABOXES ELEMENTS //////////////////////////////////////////////////////////