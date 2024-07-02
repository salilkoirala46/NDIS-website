<?php

add_action('wp_enqueue_scripts', 'university_files');

function university_files(){
    wp_enqueue_style('custom_google_font', "//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i"); //first argument does not matter;
    wp_enqueue_style('fontawesome_styles', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');//first argument does not matter;
    wp_enqueue_style('university_main_styles', get_theme_file_uri('build/style-index.css')); //first argument does not matter;
    wp_enqueue_style('university_extra_styles', get_theme_file_uri('build/index.css')); //first argument does not matter;
    // wp_enqueue_style('university_main_styles', get_theme_file_uri('build/index.css')); //first argument does not matter;
    wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true); //true loads the script in the bottom of page footer
}

function university_features(){
    register_nav_menu('headerMenuLocation', 'Header Menu Location'); //for header menu
    register_nav_menu('footerMenuLocation1', 'Footer Menu Location 1'); //for footer menu 1
    register_nav_menu('footerMenuLocation2', 'Footer Menu Location 2'); //for footer menu 1
    add_theme_support('title-tag'); //for title tag in the browser
}

add_action('after_setup_theme', 'university_features');

?>