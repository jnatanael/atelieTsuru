<?php

add_action('add_meta_boxes', 'atelieMetaboxPage');

function atelieMetaboxPage() {

    $meta_box = array(
        'id' => 'atelieMetaboxProdutosDisplay',
        'title' => __('Texto de destaque no banner', ATELIE_THEME_NAME),
        'description' => __('', ATELIE_THEME_NAME),
        'post_type' => 'page',
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(
            array(
                'name' => 'Descrição da página',
                'desc' => '',
                'id' => '_atelieDestaque',
                'type' => 'editor'
            )
        )
    );
    $callback = create_function('$post,$meta_box', 'atelie_create_meta_box( $post, $meta_box["args"] );');
    add_meta_box($meta_box['id'], $meta_box['title'], $callback, $meta_box['post_type'], $meta_box['context'], $meta_box['priority'], $meta_box);

}
