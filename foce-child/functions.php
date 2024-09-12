<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    // Chargement du style.css du thème parent Twenty Twenty
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du css/theme.css pour nos personnalisations
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/style.css', array(), filemtime(get_stylesheet_directory() . '/css/style.css'));
    // Chargement de swiper
    wp_enqueue_style( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

// Chargement des fichiers JS
add_action( 'wp_enqueue_scripts', 'child_theme_javascript' );
function child_theme_javascript(){
    wp_enqueue_script( "swiper-js", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js", array(), false, true);
    wp_enqueue_script( "skrollr-js", get_stylesheet_directory_uri() . "/assets/js/skrollr.min.js", array(), false, true);
    wp_enqueue_script( "child-js", get_stylesheet_directory_uri() . "/assets/js/script.js", array(), false, true );
}

?>