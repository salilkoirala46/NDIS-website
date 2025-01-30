<?php

function allAspectCare_styles() {
    wp_enqueue_style('allaspectcare_bootstrap_css',get_theme_file_uri('css/bootstrap.min.css'));
    wp_enqueue_style('allaspectcare_custom_css',get_theme_file_uri('css/index.css'));

    //fonts
    // wp_enqueue_style('allaspectcare_google_fonts', '//fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:slnt,wght@-10..0,100..900&display=swap');
    wp_enqueue_style('allaspectcare_fontawesome', '//use.fontawesome.com/releases/v5.15.4/css/all.css');
    wp_enqueue_style('allaspectcare_bootstrap_icons', '//cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css');
    
    //animation and carousel css
    wp_enqueue_style('allaspectcare_animate_css', get_theme_file_uri('lib/animate/animate.min.css'));
    wp_enqueue_style('allaspectcare_lightbox_css', get_theme_file_uri('lib/lightbox/css/lightbox.min.css'));
    wp_enqueue_style('allaspectcare_owlcarousel_css', get_theme_file_uri('lib/owlcarousel/assets/owl.carousel.min.css'));

   // External JS libraries
   wp_enqueue_script('allAspectCare_jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js', array(), '3.6.4', true);
   wp_enqueue_script('allAspectCare_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', array('allAspectCare_jquery'), '5.0.0', true);
   
   // Internal JS libraries
   wp_enqueue_script('allAspectCare_wow', get_theme_file_uri('lib/wow/wow.min.js'), array(), '1.0', true);
   wp_enqueue_script('allAspectCare_easing', get_theme_file_uri('lib/easing/easing.min.js'), array(), '1.0', true);
   wp_enqueue_script('allAspectCare_waypoints', get_theme_file_uri('lib/waypoints/waypoints.min.js'), array(), '1.0', true);
   wp_enqueue_script('allAspectCare_counterup', get_theme_file_uri('lib/counterup/counterup.min.js'), array(), '1.0', true);
   wp_enqueue_script('allAspectCare_lightbox', get_theme_file_uri('lib/lightbox/js/lightbox.min.js'), array(), '1.0', true);
   wp_enqueue_script('allAspectCare_owlcarousel', get_theme_file_uri('lib/owlcarousel/owl.carousel.min.js'), array(), '1.0', true);

   // Custom JS file
   wp_enqueue_script('allAspectCare_main', get_theme_file_uri('js/main.js'), array('allAspectCare_jquery'), '1.0', true);

}


function allaspectcare_features(){
    register_nav_menu('headerMenuLocation3', 'Header Menu Location'); //for header menu
    register_nav_menu('footerMenuLocation3', 'Footer Menu Location 1'); //for footer menu 1
}

add_action('after_setup_theme', 'allaspectcare_features');

add_action('wp_enqueue_scripts', 'allAspectCare_styles');



?>