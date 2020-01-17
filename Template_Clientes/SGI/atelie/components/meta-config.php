<?php

#-----------------------------------------------------------------#
# Create Meta
#-----------------------------------------------------------------#

function atelie_create_meta_box( $post, $meta_box ) {

	if ( !is_array( $meta_box ) ) {
		return false;
	}

	if ( isset( $meta_box['description'] ) && $meta_box['description'] != '' ) {
		echo '<p>' . $meta_box['description'] . '</p>';
	}

	wp_nonce_field( basename( __FILE__ ), 'atelie_meta_box_nonce' );
	echo '<table class="form-table atelie-metabox-table">';

	$count = 0;

	foreach ( $meta_box['fields'] as $field ) {

		$meta = get_post_meta( $post->ID, $field['id'], true );

		$inline = null;
		if ( isset( $field['extra'] ) ) {
			$inline = true;
		}

		if ( $inline == null ) {

			echo '<tr><th><label for="' . $field['id'] . '"><strong>' . $field['name'] . '</strong>
			  <span>' . $field['desc'] . '</span></label></th>';
		}


		switch ( $field['type'] ) {
			case 'text':
				echo '<td><input type="text" name="atelie_meta[' . $field['id'] . ']" id="' . $field['id'] . '" value="' . ($meta ? $meta : $field['std']) . '" size="30" /></td>';
				break;

			case 'file':
				echo '<td><input type="hidden" id="' . $field['id'] . '" name="atelie_meta[' . $field['id'] . ']" value="' . ($meta ? $meta : $field['std']) . '" />';
				echo '<img class="redux-opts-screenshot" id="redux-opts-screenshot-' . $field['id'] . '" src="' . ($meta ? $meta : $field['std']) . '" />';
				if ( ($meta ? $meta : $field['std']) == '' ) {
					$remove = ' style="display:none;"';
					$upload = '';
				} else {
					$remove = '';
					$upload = ' style="display:none;"';
				}
				echo ' <a data-update="Select File" data-choose="Choose a File" href="javascript:void(0);"class="redux-opts-upload button-secondary"' . $upload . ' rel-id="' . $field['id'] . '">' . __( 'Upload', ATELIE_THEME_NAME ) . '</a>';
				echo ' <a href="javascript:void(0);" class="redux-opts-upload-remove"' . $remove . ' rel-id="' . $field['id'] . '">' . __( 'Remove Upload', ATELIE_THEME_NAME ) . '</a></td>';
				break;

			case 'galeria' :
				if ( function_exists( 'wp_enqueue_media' ) ) {
					wp_enqueue_media();
				} else {
					wp_enqueue_script( 'media-upload' );
					wp_enqueue_script( 'thickbox' );
					wp_enqueue_style( 'thickbox' );
				}

				wp_enqueue_script(
						'redux-field-gallery-js', ATELIE_FRAMEWORK_DIRECTORY . 'options/fields/upload/gallery.js', array( 'jquery' ), time(), true
				);


				echo '<td>
				<fieldset id="' . $field['class'] . '" class="redux-field-container redux-field redux-container-gallery" data-id="opt-gallery" data-type="gallery">
			    <div class="screenshot">';

				if ( !empty( $meta ) ) {
					$ids = explode( ',', $meta );

					foreach ( $ids as $attachment_id ) {
						$img = wp_get_attachment_image_src( $attachment_id, 'thumbnail' );
						echo '<img class="redux-option-image" id="image_' . $field['id'] . '_' . $attachment_id . '" src="' . $img[0] . '" alt="" target="_blank" rel="external" />';
					}
				}

				echo '</div>';
				echo '<a href="#" onclick="return false;" id="edit-gallery" class="gallery-attachments button button-primary">' . __( 'Add/Editar Imagens', 'redux-framework' ) . '</a> ';
				echo '<a href="#" onclick="return false;" id="clear-gallery" class="gallery-attachments button">' . __( 'Limpar Imagens', 'redux-framework' ) . '</a>';
				echo '<input type="hidden" class="gallery_values " value="' . esc_attr( $meta ) . '" name="atelie_meta[' . $field["id"] . ']" />
	            </fieldset></td>';
				break;

			case 'textarea' :
				echo '<td><textarea name="atelie_meta[' . $field['id'] . ']" id="' . $field['id'] . '" rows="8" cols="5">' . ($meta ? $meta : $field['std']) . '</textarea></td>';
				break;

			case 'editor' :
				$settings = array(
					'textarea_name' => 'atelie_meta[' . $field['id'] . ']',
					'editor_class' => 'slim',
					'wpautop' => true,
				);
				echo'<td>';
				wp_editor( $meta, $field['id'], $settings );
				echo '</td>';
				break;
		}

		if ( $inline == null ) {
			echo '</tr>';
		}
	}

	echo '</table>';
}

#-----------------------------------------------------------------#
# Save Meta
#-----------------------------------------------------------------#

function atelie_save_meta_box( $post_id ) {

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	if ( !isset( $_POST['atelie_meta'] ) || !isset( $_POST['atelie_meta_box_nonce'] ) || !wp_verify_nonce( $_POST['atelie_meta_box_nonce'], basename( __FILE__ ) ) ) {
		return;
	}

	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) )
			return;
	}
	else {
		if ( !current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
	}

	foreach ( $_POST['atelie_meta'] as $key => $val ) {
		update_post_meta( $post_id, $key, $val );
	}
}

add_action( 'save_post', 'atelie_save_meta_box' );
