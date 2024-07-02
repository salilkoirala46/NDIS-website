<?php

function ndis_post_types(){

    register_post_type('services', array(
        'show_in_rest' => true, //to enable gutenberg editor
        'supports' => array('title', 'editor', 'excerpt', 'custom-fields'),
        'rewrite' => array('slug' => 'services'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Services',
            'add_new_item' => 'Add New Service',
            'edit_item' => 'Edit Service',
            'all_items' => 'All Services',
            'singular_name' => 'Service'
        ),
        'menu_icon' => 'dashicons-share-alt'
    ));

}

add_action('init', 'ndis_post_types');
