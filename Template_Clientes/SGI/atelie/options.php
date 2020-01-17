<?php

/**
 * For full documentation, please visit: http://docs.reduxframework.com/
 * For a more extensive sample-config file, you may look at:
 * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
 */
if ( !class_exists( 'Redux' ) ) {
	return;
}

// This is your option name where all the Redux data is stored.
$opt_name = "atelie_redux";

/**
 * ---> SET ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 * */
$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
	'opt_name' => $opt_name,
	'display_name' => $theme->get( 'Ateliê Solutions' ),
	'display_version' => $theme->get( '1.0.0' ),
	'page_title' => 'Ateliê Tsuru Options',
	'update_notice' => FALSE,
	'admin_bar' => TRUE,
	'admin_bar_icon' => 'dashicons-portfolio',
	'admin_bar_priority' => 50,
	'menu_type' => 'menu',
	'menu_title' => 'Ateliê Config',
	'allow_sub_menu' => FALSE,
	'page_parent_post_type' => 'your_post_type',
	'customizer' => TRUE,
	'dev_mode' => FALSE,
	'default_mark' => '*',
	'global_variable' => '',
	'update_notice' => FALSE,
	'customizer' => FALSE,
	'page_priority' => 54,
	'page_parent' => 'themes.php',
	'page_permissions' => 'manage_options',
	'menu_icon' => $theme_menu_icon,
	'last_tab' => '',
	'page_icon' => 'icon-themes',
	'page_slug' => 'tsuru_config',
	'default_show' => false,
	'footer_credit' => ' ',
	'output' => TRUE,
	'output_tag' => TRUE,
	'settings_api' => TRUE,
	'cdn_check_time' => '1440',
	'compiler' => TRUE,
	'page_permissions' => 'manage_options',
	'save_defaults' => TRUE,
	'show_import_export' => TRUE,
	'database' => 'optionsTsuru',
	'transient_time' => '3600',
	'network_sites' => TRUE,
	'use_cdn' => TRUE,
	'hints' => array(
		'icon' => 'el el-question-sign',
		'icon_position' => 'right',
		'icon_color' => 'lightgray',
		'icon_size' => 'normal',
		'tip_style' => array(
			'color' => 'red',
			'shadow' => true,
			'rounded' => false,
			'style' => '',
		),
		'tip_position' => array(
			'my' => 'top left',
			'at' => 'bottom right',
		),
		'tip_effect' => array(
			'show' => array(
				'effect' => 'slide',
				'duration' => '500',
				'event' => 'mouseover',
			),
			'hide' => array(
				'effect' => 'slide',
				'duration' => '500',
				'event' => 'click mouseleave',
			),
		),
	)
);

// SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
$args['share_icons'][] = array(
	'url' => 'https://www.ateliesolutions.com.br',
	'title' => 'Site',
	'icon' => 'el el-link'
);
$args['share_icons'][] = array(
	'url' => 'https://www.facebook.com/ateliesolutions',
	'title' => 'Like us on Facebook',
	'icon' => 'el el-facebook'
);
$args['share_icons'][] = array(
	'url' => 'https://www.linkedin.com/company/ateliesolutions',
	'title' => 'Find us on LinkedIn',
	'icon' => 'el el-linkedin'
);
$args['share_icons'][] = array(
	'url' => 'https://www.instagram.com/ateliesolutions',
	'title' => 'Follow us on Instagram',
	'icon' => 'el el-instagram'
);
$args['share_icons'][] = array(
	'url' => 'https://plus.google.com/101045396068671616392',
	'title' => 'Follow us on Google Plus',
	'icon' => 'el el-googleplus'
);

// Panel Intro text -> before the form
if ( !isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
	if ( !empty( $args['global_variable'] ) ) {
		$v = $args['global_variable'];
	} else {
		$v = str_replace( '-', '_', $args['opt_name'] );
	}
	$args['intro_text'] = '';
} else {
	$args['intro_text'] = '';
}


Redux::setArgs( $opt_name, $args );

/*
 * ---> END ARGUMENTS
 */

/*
 *
 * ---> START SECTIONS
 *
 */

// Empresa
Redux::setSection( $opt_name, array(
	'title' => __( 'A Empresa', ATELIE_THEME_NAME ),
	'id' => 'empresaConfig',
	'icon' => 'el el-cog',
	'fields' => array(
	) )
);

Redux::setSection( $opt_name, array(
	'title' => __( 'Contato', ATELIE_THEME_NAME ),
	'id' => 'empresaConfigContato',
	'desc' => 'Informações de contato da empresa!',
	'subsection' => true,
	'fields' => array(
		array(
			'id' => 'endereco',
			'type' => 'text',
			'title' => __( 'Endereço', ATELIE_THEME_NAME ),
			'subtitle' => __( 'Insira a Rua, número', ATELIE_THEME_NAME ),
			'desc' => '',
			'default' => ''
		),
		array(
			'id' => 'bairro',
			'type' => 'text',
			'title' => __( 'Bairro', ATELIE_THEME_NAME ),
			'desc' => '',
			'default' => ''
		),
		array(
			'id' => 'cidade',
			'type' => 'text',
			'title' => __( 'Cidade', ATELIE_THEME_NAME ),
			'desc' => '',
			'default' => ''
		),
		array(
			'id' => 'estado',
			'type' => 'text',
			'title' => __( 'Estado', ATELIE_THEME_NAME ),
			'desc' => '',
			'default' => ''
		),
		array(
			'id' => 'telefone',
			'type' => 'text',
			'title' => __( 'Telefone', ATELIE_THEME_NAME ),
			'desc' => '',
			'default' => ''
		),
		array(
			'id' => 'celular',
			'type' => 'text',
			'title' => __( 'Celular', ATELIE_THEME_NAME ),
			'desc' => '',
			'default' => ''
		),
		array(
			'id' => 'whatsapp',
			'type' => 'text',
			'title' => __( 'WhatsApp', ATELIE_THEME_NAME ),
			'desc' => '',
			'default' => ''
		),
		array(
			'id' => 'email',
			'type' => 'text',
			'title' => __( 'Email', ATELIE_THEME_NAME ),
			'desc' => '',
			'default' => ''
		),
		array(
			'id' => 'skype',
			'type' => 'text',
			'title' => __( 'Skype', ATELIE_THEME_NAME ),
			'desc' => '',
			'default' => ''
		)
	)
) );

Redux::setSection( $opt_name, array(
	'title' => __( 'Institucional', ATELIE_THEME_NAME ),
	'id' => 'empresaConfigInstitucional',
	'desc' => 'Configurações Institucionais.',
	'subsection' => true,
	'fields' => array(
		array(
			'id' => 'missao',
			'type' => 'editor',
			'title' => __( 'Missão', ATELIE_THEME_NAME ),
			'subtitle' => __( 'Descrição da Missão da Empresa', ATELIE_THEME_NAME )
		),
		array(
			'id' => 'visao',
			'type' => 'editor',
			'title' => __( 'Visão', ATELIE_THEME_NAME ),
			'subtitle' => __( 'Descrição da Visão da Empresa', ATELIE_THEME_NAME )
		),
		array(
			'id' => 'valores',
			'type' => 'editor',
			'title' => __( 'Valores', ATELIE_THEME_NAME ),
			'subtitle' => __( 'Descrição da Valores da Empresa', ATELIE_THEME_NAME ),
			'args'   => array(
				'textarea_rows'    => 15
			)
		)
	)
) );

Redux::setSection( $opt_name, array(
	'title' => __( 'Política de Qualidade', ATELIE_THEME_NAME ),
	'id' => 'empresaConfigPolitica',
	'subsection' => true,
	'fields' => array(
		array(
			'id' => 'politicaQualidade',
			'type' => 'editor',
			'title' => __( 'Descrição', ATELIE_THEME_NAME ),
			'subtitle' => __( 'Descreva a Política de Qualidade da Empresa', ATELIE_THEME_NAME ),
			'args'   => array(
				'textarea_rows' => 20
			)
		)
	)
) );


// Scripts
Redux::setSection( $opt_name, array(
	'title' => __( 'Scripts', ATELIE_THEME_NAME ),
	'id' => 'scriptConfig',
	'desc' => 'Scripts que serão utilizados no site!',
	'icon' => 'el el-edit',
	'fields' => array(
	) )
);

Redux::setSection( $opt_name, array(
	'title' => __( 'Google Analytcs', ATELIE_THEME_NAME ),
	'id' => 'scriptConfigGoogleAnalytics',
	'subsection' => true,
	'fields' => array(
		array(
			'id' => 'googleAnalytics',
			'type' => 'ace_editor',
			'title' => __( 'Google Analytics', ATELIE_THEME_NAME ),
			'subtitle' => __( 'Please enter in your google analytics tracking code here. <br/> Remember to include the <strong>entire script from google</strong>, if you just enter your tracking ID it won\'t work.', ATELIE_THEME_NAME ),
			'desc' => __( '', ATELIE_THEME_NAME )
		)
	)
) );

Redux::setSection( $opt_name, array(
	'title' => __( 'Google Maps', ATELIE_THEME_NAME ),
	'id' => 'scriptConfigGoogleMaps',
	'subsection' => true,
	'fields' => array(
		array(
			'id' => 'googleMaps',
			'type' => 'ace_editor',
			'title' => __( 'Google Maps', ATELIE_THEME_NAME ),
			'subtitle' => __( 'Please enter in your google Maps code here. <br/> Remember to include the <strong>entire script from google</strong>, if you just enter your tracking ID it won\'t work.', ATELIE_THEME_NAME ),
			'desc' => __( '', ATELIE_THEME_NAME )
		)
	)
) );

Redux::setSection( $opt_name, array(
	'title' => __( 'JS Header', ATELIE_THEME_NAME ),
	'id' => 'scriptConfigJsHeader',
	'subsection' => true,
	'fields' => array(
		array(
			'id' => 'customScriptHeader',
			'type' => 'ace_editor',
			'title' => __( 'Custom JS Code Header', ATELIE_THEME_NAME ),
			'subtitle' => __( 'Scripts que serão inseridos no header', ATELIE_THEME_NAME ),
			'mode' => 'javascript',
			'theme' => 'monokai',
			'desc' => ''
		)
	)
) );

Redux::setSection( $opt_name, array(
	'title' => __( 'JS Footer', ATELIE_THEME_NAME ),
	'id' => 'scriptConfigJsFooter',
	'subsection' => true,
	'fields' => array(
		array(
			'id' => 'customScriptFooter',
			'type' => 'ace_editor',
			'title' => __( 'Custom JS Code Footer', ATELIE_THEME_NAME ),
			'subtitle' => __( 'Scripts que serão inseridos no footer', ATELIE_THEME_NAME ),
			'mode' => 'javascript',
			'theme' => 'monokai',
			'desc' => ''
		)
	)
) );

// CTAS
Redux::setSection( $opt_name, array(
	'title' => __( 'CAll To Actions', ATELIE_THEME_NAME ),
	'id' => 'cta',
	'icon' => 'el el-bell',
	'fields' => array(
	) )
);

Redux::setSection( $opt_name, array(
	'title' => __( 'Páginas', 'redux-framework-demo' ),
	'id' => 'ctaPages',
	'subsection' => true,
	'desc' => __( 'CTA das páginas do site.', ATELIE_THEME_NAME ),
	'fields' => array(
		array(
			'id' => 'ctaPagetitulo',
			'type' => 'text',
			'title' => __( 'Título', ATELIE_THEME_NAME )
		),
		array(
			'id' => 'ctaPagedescricao',
			'type' => 'editor',
			'title' => __( 'Descrição', ATELIE_THEME_NAME ),
		),
		array(
			'id' => 'ctaPagebotaoTxt',
			'type' => 'text',
			'title' => __( 'Texto do botão', ATELIE_THEME_NAME ),
		),
		array(
			'id' => 'ctaPageBotaoLink',
			'type' => 'text',
			'title' => __( 'Link URL', ATELIE_THEME_NAME ),
		),
		array(
			'id' => 'ctaPageImage',
			'type' => 'media',
			'title' => __( 'Imagem Background', ATELIE_THEME_NAME ),
		),
		
	)
) );


// Redes Sociais
Redux::setSection( $opt_name, array(
	'title' => __( 'Social Icons', ATELIE_THEME_NAME ),
	'id' => 'footerConfig',
	'desc' => __( 'All footer related options are listed here.', ATELIE_THEME_NAME ),
	'icon' => 'el el-file',
	'fields' => array(
		array(
			'id' => 'enable_social_in_header',
			'type' => 'switch',
			'title' => __( 'Enable Social Icons?', ATELIE_THEME_NAME ),
			'subtitle' => __( 'Do you want the secondary nav to display social icons?', ATELIE_THEME_NAME ),
			'desc' => '',
			'default' => '1'
		),
		array(
			'id' => 'use-facebook-icon',
			'type' => 'checkbox',
			'title' => __( 'Use Facebook Icon', ATELIE_THEME_NAME ),
			'subtitle' => '',
			'desc' => '',
			'required' => array( 'enable_social_in_header', '=', '1' ),
		),
		array(
			'id' => 'use-twitter-icon',
			'type' => 'checkbox',
			'title' => __( 'Use Twitter Icon', ATELIE_THEME_NAME ),
			'subtitle' => '',
			'desc' => '',
			'required' => array( 'enable_social_in_header', '=', '1' ),
		),
		array(
			'id' => 'use-google-plus-icon',
			'type' => 'checkbox',
			'title' => __( 'Use Google+ Icon', ATELIE_THEME_NAME ),
			'subtitle' => '',
			'desc' => '',
			'required' => array( 'enable_social_in_header', '=', '1' ),
		),
		array(
			'id' => 'use-vimeo-icon',
			'type' => 'checkbox',
			'title' => __( 'Use Vimeo Icon', ATELIE_THEME_NAME ),
			'subtitle' => '',
			'desc' => '',
			'required' => array( 'enable_social_in_header', '=', '1' ),
		),
		array(
			'id' => 'use-pinterest-icon',
			'type' => 'checkbox',
			'title' => __( 'Use Pinterest Icon', ATELIE_THEME_NAME ),
			'required' => array( 'enable_social_in_header', '=', '1' ),
			'subtitle' => '',
			'desc' => ''
		),
		array(
			'id' => 'use-youtube-icon',
			'type' => 'checkbox',
			'title' => __( 'Use Youtube Icon', ATELIE_THEME_NAME ),
			'required' => array( 'enable_social_in_header', '=', '1' ),
			'subtitle' => '',
			'desc' => ''
		),
		array(
			'id' => 'use-tumblr-icon',
			'type' => 'checkbox',
			'title' => __( 'Use Tumblr Icon', ATELIE_THEME_NAME ),
			'required' => array( 'enable_social_in_header', '=', '1' ),
			'subtitle' => '',
			'desc' => ''
		),
		array(
			'id' => 'use-linkedin-icon',
			'type' => 'checkbox',
			'title' => __( 'Use LinkedIn Icon', ATELIE_THEME_NAME ),
			'required' => array( 'enable_social_in_header', '=', '1' ),
			'subtitle' => '',
			'desc' => ''
		),
		array(
			'id' => 'use-rss-icon',
			'type' => 'checkbox',
			'title' => __( 'Use RSS Icon', ATELIE_THEME_NAME ),
			'required' => array( 'enable_social_in_header', '=', '1' ),
			'subtitle' => '',
			'desc' => ''
		),
		array(
			'id' => 'use-behance-icon',
			'type' => 'checkbox',
			'title' => __( 'Use Behance Icon', ATELIE_THEME_NAME ),
			'required' => array( 'enable_social_in_header', '=', '1' ),
			'subtitle' => '',
			'desc' => ''
		),
		array(
			'id' => 'use-instagram-icon',
			'type' => 'checkbox',
			'title' => __( 'Use Instagram Icon', ATELIE_THEME_NAME ),
			'required' => array( 'enable_social_in_header', '=', '1' ),
			'subtitle' => '',
			'desc' => ''
		),
		array(
			'id' => 'use-flickr-icon',
			'type' => 'checkbox',
			'title' => __( 'Use Flickr Icon', ATELIE_THEME_NAME ),
			'required' => array( 'enable_social_in_header', '=', '1' ),
			'subtitle' => '',
			'desc' => ''
		),
		array(
			'id' => 'use-spotify-icon',
			'type' => 'checkbox',
			'title' => __( 'Use Spotify Icon', ATELIE_THEME_NAME ),
			'required' => array( 'enable_social_in_header', '=', '1' ),
			'subtitle' => '',
			'desc' => ''
		),
		array(
			'id' => 'use-github-icon',
			'type' => 'checkbox',
			'title' => __( 'Use GitHub Icon', ATELIE_THEME_NAME ),
			'required' => array( 'enable_social_in_header', '=', '1' ),
			'subtitle' => '',
			'desc' => ''
		),
		array(
			'id' => 'use-soundcloud-icon',
			'type' => 'checkbox',
			'title' => __( 'Use SoundCloud Icon', ATELIE_THEME_NAME ),
			'required' => array( 'enable_social_in_header', '=', '1' ),
			'subtitle' => '',
			'desc' => ''
		),
		array(
			'id' => 'use-vk-icon',
			'type' => 'checkbox',
			'title' => __( 'Use VK Icon', ATELIE_THEME_NAME ),
			'required' => array( 'enable_social_in_header', '=', '1' ),
			'subtitle' => '',
			'desc' => ''
		)
	)
) );

Redux::setSection( $opt_name, array(
	'title' => __( 'Social Links', ATELIE_THEME_NAME ),
	'id' => 'social_media',
	'desc' => __( 'Enter in your social media locations here and then activate which ones you would like to display in your footer options & header options tabs. <br/><br/> <strong>Remember to include the "https://" in all URLs!</strong>', ATELIE_THEME_NAME ),
	'icon' => 'el el-share',
	'fields' => array(
		array(
			'id' => 'facebook-url',
			'type' => 'text',
			'title' => __( 'Facebook URL', ATELIE_THEME_NAME ),
			'subtitle' => __( 'Please enter in your Facebook URL.', ATELIE_THEME_NAME ),
			'desc' => ''
		),
		array(
			'id' => 'twitter-url',
			'type' => 'text',
			'title' => __( 'Twitter URL', ATELIE_THEME_NAME ),
			'subtitle' => __( 'Please enter in your Twitter URL.', ATELIE_THEME_NAME ),
			'desc' => ''
		),
		array(
			'id' => 'google-plus-url',
			'type' => 'text',
			'title' => __( 'Google+ URL', ATELIE_THEME_NAME ),
			'subtitle' => __( 'Please enter in your Google+ URL.', ATELIE_THEME_NAME ),
			'desc' => ''
		),
		array(
			'id' => 'vimeo-url',
			'type' => 'text',
			'title' => __( 'Vimeo URL', ATELIE_THEME_NAME ),
			'subtitle' => __( 'Please enter in your Vimeo URL.', ATELIE_THEME_NAME ),
			'desc' => ''
		),
		array(
			'id' => 'pinterest-url',
			'type' => 'text',
			'title' => __( 'Pinterest URL', ATELIE_THEME_NAME ),
			'subtitle' => __( 'Please enter in your Pinterest URL.', ATELIE_THEME_NAME ),
			'desc' => ''
		),
		array(
			'id' => 'youtube-url',
			'type' => 'text',
			'title' => __( 'Youtube URL', ATELIE_THEME_NAME ),
			'subtitle' => __( 'Please enter in your Youtube URL.', ATELIE_THEME_NAME ),
			'desc' => ''
		),
		array(
			'id' => 'tumblr-url',
			'type' => 'text',
			'title' => __( 'Tumblr URL', ATELIE_THEME_NAME ),
			'subtitle' => __( 'Please enter in your Tumblr URL.', ATELIE_THEME_NAME ),
			'desc' => ''
		),
		array(
			'id' => 'linkedin-url',
			'type' => 'text',
			'title' => __( 'LinkedIn URL', ATELIE_THEME_NAME ),
			'subtitle' => __( 'Please enter in your LinkedIn URL.', ATELIE_THEME_NAME ),
			'desc' => ''
		),
		array(
			'id' => 'rss-url',
			'type' => 'text',
			'title' => __( 'RSS URL', ATELIE_THEME_NAME ),
			'subtitle' => __( 'If you have an external RSS feed such as Feedburner, please enter it here. Will use built in Wordpress feed if left blank.', ATELIE_THEME_NAME ),
			'desc' => ''
		),
		array(
			'id' => 'behance-url',
			'type' => 'text',
			'title' => __( 'Behance URL', ATELIE_THEME_NAME ),
			'subtitle' => __( 'Please enter in your Behance URL.', ATELIE_THEME_NAME ),
			'desc' => ''
		),
		array(
			'id' => 'flickr-url',
			'type' => 'text',
			'title' => __( 'Flickr URL', ATELIE_THEME_NAME ),
			'subtitle' => __( 'Please enter in your Flickr URL.', ATELIE_THEME_NAME ),
			'desc' => ''
		),
		array(
			'id' => 'spotify-url',
			'type' => 'text',
			'title' => __( 'Spotify URL', ATELIE_THEME_NAME ),
			'subtitle' => __( 'Please enter in your Spotify URL.', ATELIE_THEME_NAME ),
			'desc' => ''
		),
		array(
			'id' => 'instagram-url',
			'type' => 'text',
			'title' => __( 'Instagram URL', ATELIE_THEME_NAME ),
			'subtitle' => __( 'Please enter in your Instagram URL.', ATELIE_THEME_NAME ),
			'desc' => ''
		),
		array(
			'id' => 'github-url',
			'type' => 'text',
			'title' => __( 'GitHub URL', ATELIE_THEME_NAME ),
			'subtitle' => __( 'Please enter in your GitHub URL.', ATELIE_THEME_NAME ),
			'desc' => ''
		),
		array(
			'id' => 'soundcloud-url',
			'type' => 'text',
			'title' => __( 'SoundCloud URL', ATELIE_THEME_NAME ),
			'subtitle' => __( 'Please enter in your SoundCloud URL.', ATELIE_THEME_NAME ),
			'desc' => ''
		),
		array(
			'id' => 'vk-url',
			'type' => 'text',
			'title' => __( 'VK URL', ATELIE_THEME_NAME ),
			'subtitle' => __( 'Please enter in your VK URL.', ATELIE_THEME_NAME ),
			'desc' => ''
		)
	)
) );


/*
 * <--- END SECTIONS
 */


/**
 * Custom function for the callback validation referenced above
 * */
if ( !function_exists( 'redux_validate_callback_function' ) ) {

	function redux_validate_callback_function( $field, $value, $existing_value ) {
		$error = false;
		$warning = false;

		//do your validation
		if ( $value == 1 ) {
			$error = true;
			$value = $existing_value;
		} elseif ( $value == 2 ) {
			$warning = true;
			$value = $existing_value;
		}

		$return['value'] = $value;

		if ( $error == true ) {
			$field['msg'] = 'your custom error message';
			$return['error'] = $field;
		}

		if ( $warning == true ) {
			$field['msg'] = 'your custom warning message';
			$return['warning'] = $field;
		}

		return $return;
	}

}

/**
 * Custom function for the callback referenced above
 */
if ( !function_exists( 'redux_my_custom_field' ) ) {

	function redux_my_custom_field( $field, $value ) {
		print_r( $field );
		echo '<br/>';
		print_r( $value );
	}

}


/**
 * Removes the demo link and the notice of integrated demo from the redux-framework plugin
 */
if ( !function_exists( 'remove_demo' ) ) {

	function remove_demo() {
		// Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
		if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
			remove_filter( 'plugin_row_meta', array(
				ReduxFrameworkPlugin::instance(),
				'plugin_metalinks'
			), null, 2 );

			// Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
			remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
		}
	}

}
