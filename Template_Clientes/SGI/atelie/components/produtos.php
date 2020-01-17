<?php

#-----------------------------------------------------------------#
# Create admin produtos section
#-----------------------------------------------------------------#

function produtos_register() {

    $labels = array(
        'name' => __('Produtos', 'taxonomy general name', ATELIE_THEME_NAME),
        'singular_name' => __('Produto', ATELIE_THEME_NAME),
        'search_items' => __('Pesquisar produto', ATELIE_THEME_NAME),
        'all_items' => __('Todos produtos', ATELIE_THEME_NAME),
        'parent_item' => __('Parent Produto', ATELIE_THEME_NAME),
        'edit_item' => __('Editar Produto', ATELIE_THEME_NAME),
        'update_item' => __('Atualizar Pastoral', ATELIE_THEME_NAME),
        'add_new' => __('Adicionar Novo', ATELIE_THEME_NAME),
        'add_new_item' => __('Adicionar Novo Produto', ATELIE_THEME_NAME),
        'menu_name' => __('produtos', ATELIE_THEME_NAME)
    );

    $args = array(
        'labels' => $labels,
        'singular_label' => __('Produtos', ATELIE_THEME_NAME),
        'public' => true,
        'show_ui' => true,
        'show_in_rest' => true,
        'hierarchical' => false,
        'menu_position' => 9,
        'menu_icon' => 'dashicons-tagcloud',
        'exclude_from_search' => false,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
    );

    register_post_type('produtos', $args);
}

add_action('init', 'produtos_register');
