<?php

/**
 * TGM Init Class
 */
include_once ('class-tgm-plugin-activation.php');

function atelie_register_required_plugins() {
	/**
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		// Plugin ContactForm
		array(
			'name' => 'Ultimate Addons for Gutenberg',
			'slug' => 'ultimate-addons-for-gutenberg',
			'required' => true,
		),
		// Plugin ContactForm
		array(
			'name' => 'Contact Form 7',
			'slug' => 'contact-form-7',
			'required' => true,
		),
		// Plugin WordPress SEO é necessário | Melhor opção em SEO para WordPress
		array(
			'name' => 'Yoast SEO',
			'slug' => 'wordpress-seo',
			'required' => true,
		),
		// Plugin W3 Total Cache é necessário | Uma das melhores opções em Cache para WordPress, muito bom para melhorar a velocidade do site.
		array(
			'name' => 'W3 Total Cache',
			'slug' => 'w3-total-cache',
			'required' => false,
		),
		// Plugin Wordfence Security é necessário | Ótimo plugin para segurança WordPress
		array(
			'name' => 'Wordfence Security',
			'slug' => 'wordfence',
			'required' => true,
		),
		// Plugin Activity Log, Log de Usuários
		array(
			'name' => 'Activity Log',
			'slug' => 'aryo-activity-log',
			'required' => true,
		),
		// Plugin WP SEC Login, Segurança no login
		array(
			'name' => 'WP SEC Login',
			'slug' => 'wpsec',
			'source' => get_template_directory() . '/plugins/wpsec.zip',
			'required' => true,
			'force_activation' => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
		),
	);

	/**
	 * Array of configuration settings. Amend each line as needed.
	 * If you want the default strings to be available under your own theme domain,
	 * leave the strings uncommented.
	 * Some of the strings are added into a sprintf, so see the comments at the
	 * end of each line for what each argument will be.
	 */
	$config = array(
		'default_path' => '', // Default absolute path to pre-packaged plugins.
		'menu' => 'tgmpa-install-plugins', // Menu slug.
		'has_notices' => true, // Show admin notices or not.
		'dismissable' => true, // If false, a user cannot dismiss the nag message.
		'dismiss_msg' => '', // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false, // Automatically activate plugins after installation or not.
		'message' => '', // Message to output right before the plugins table.
		'strings' => array(
			'page_title' => __( 'Instalação de plugins necessários', 'tgmpa' ),
			'menu_title' => __( 'Instalar Plugins', 'tgmpa' ),
			'installing' => __( 'Instalando o plugin: %s', 'tgmpa' ), // %s = plugin name.
			'oops' => __( 'Algo deu errado.', 'tgmpa' ),
			'notice_can_install_required' => _n_noop( 'Este tema requer o seguinte plug-in: %1$s.', 'Este tema requer os seguintes plugins: %1$s.' ), // %1$s = plugin name(s).
			'notice_can_install_recommended' => _n_noop( 'Este tema requer o seguinte plug-in: %1$s.', 'Este tema recomenda/requer os seguintes plugins: %1$s.' ), // %1$s = plugin name(s).
			'notice_cannot_install' => _n_noop( 'Desculpe, mas você não tem as permissões corretas para instalar o %s plugin. Contacte o administrador do site para obter ajuda sobre como tirar o plugin instalado.', 'Desculpe, mas você não tem as permissões corretas para instalar o %s plugins. Contacte o administrador do site para obter ajuda em obter os plugins instalados.' ), // %1$s = plugin name(s).
			'notice_can_activate_required' => _n_noop( 'O seguinte plugin recomendado está atualmente desativado: %1$s.', 'Os seguintes plugins necessários são atualmente inativo: %1$s.' ), // %1$s = plugin name(s).
			'notice_can_activate_recommended' => _n_noop( 'O seguinte plugin recomendado está desativado: %1$s.', 'Os seguintes plugins recomendados estão desativados atualmente: %1$s.' ), // %1$s = plugin name(s).
			'notice_cannot_activate' => _n_noop( 'Desculpe, mas você não tem as permissões corretas para ativar o %s plugin. Contacte o administrador do site para obter ajuda na obtenção do plugin ativado.', 'Desculpe, mas você não tem as permissões corretas para ativar o %s plugins. Contacte o administrador do site para obter ajuda em obter os plugins ativados.' ), // %1$s = plugin name(s).
			'notice_ask_to_update' => _n_noop( 'O seguinte plugin precisa ser atualizado para sua versão mais recente para assegurar o máximo de compatibilidade com este tema: %1$s.', 'Os seguintes plugins precisam ser atualizados para sua última versão para assegurar o máximo de compatibilidade com este tema: %1$s.' ), // %1$s = plugin name(s).
			'notice_cannot_update' => _n_noop( 'Desculpe, mas você não tem as permissões corretas para atualizar %s plugin. Contacte o administrador do site para obter ajuda sobre como tirar o plug-in atualizado.', 'Desculpe, mas você não tem as permissões corretas para atualizar o %s plugins. Contacte o administrador do site para obter ajuda em obter os plugins atualizados.' ), // %1$s = plugin name(s).
			'install_link' => _n_noop( 'Clique aqui e comece a instalação do(s) plugin(s)', 'Clique aqui e comece a instalação dos plugins' ),
			'activate_link' => _n_noop( 'Clique aqui e comece a ativação dos plugins', 'Clique aqui e comece a ativação dos plugins' ),
			'return' => __( 'Retornar para o painel administrativo', 'tgmpa' ),
			'plugin_activated' => __( 'Plugin ativado com sucesso.', 'tgmpa' ),
			'complete' => __( 'Todos os plugins instalados e ativados com sucesso. %s', 'tgmpa' ), // %s = dashboard link.
			'nag_type' => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
		)
	);

	tgmpa( $plugins, $config );
}

add_action( 'tgmpa_register', 'atelie_register_required_plugins' );
