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

    register_post_type('community', array(
        'show_in_rest' => true, //to enable gutenberg editor
        'supports' => array('title', 'editor'),
        'rewrite' => array('slug' => 'community'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'community',
            'add_new_item' => 'Add New community',
            'edit_item' => 'Edit Community',
            'all_items' => 'All Community',
            'singular_name' => 'community'
        ),
        'menu_icon' => 'dashicons-awards'
    ));

    register_post_type('resources', array(
        'show_in_rest' => true, //to enable gutenberg editor
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'labels' => array(
            'name' => 'resources',
            'add_new_item' => 'Add New Resources',
            'edit_item' => 'Edit Resources',
            'all_items' => 'All Resources',
            'singular_name' => 'resources'
        ),
        'menu_icon' => 'dashicons-welcome-learn-more'
    ));

}

add_action('init', 'ndis_post_types');
