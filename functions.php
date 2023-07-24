<?php 

/** 
    *InVitro
    *@link 
    *@package WordPress
    *@subpackage InVitro
    *@since 1.0.0
    *@version 1.0.0
*/

define('URL',get_stylesheet_directory_uri());
define('IMG',URL.'/images');
define('JS',URL.'/js');

// Estilos y Scripts
if(!function_exists ('invitro_scripts')):
    function invitro_scripts(){
        wp_register_style('style',get_stylesheet_uri(),array(),'1.0.0','all');
        wp_register_style('maincss',get_template_directory_uri().'/css/main.css','1.0.0','all');
        wp_register_style('nuevos',get_template_directory_uri().'/css/nuevos.css','1.0.0','all');
        wp_register_style('responsivecss',get_template_directory_uri().'/css/responsive.css','1.0.0','all');
        wp_register_style('iconcss',get_template_directory_uri().'/css/icons.css','1.0.0','all');
        wp_register_style('magnificcss',get_template_directory_uri().'/css/magnific-popup.css','1.0.0','all');
        wp_register_style('splidecss',get_template_directory_uri().'/css/splide.min.css','1.0.0','all');

        wp_enqueue_style('style');
        wp_enqueue_style('maincss');
        wp_enqueue_style('nuevos');
        wp_enqueue_style('responsivecss');
        wp_enqueue_style('iconcss');
        wp_enqueue_style('magnificcss');
        wp_enqueue_style('splidecss');
            
        wp_register_script('magnificjs',get_template_directory_uri().'/js/jquery.magnific-popup.min.js',array('jquery'),'1.0.0',true);
        wp_register_script('splidejs',get_template_directory_uri().'/js/splide.min.js',array(),'1.0.0',true);
        wp_register_script('splide_scrolljs',get_template_directory_uri().'/js/splide-extension-auto-scroll.min.js',array(),'1.0.0',true);
        wp_register_script('appjs',get_template_directory_uri().'/js/app.js',array(),'1.0.0',true);
        wp_register_script('scroll',get_template_directory_uri().'/js/scroll.js',array(),'1.0.0',true);

        wp_enqueue_script('magnificjs');
        wp_enqueue_script('splidejs');
        wp_enqueue_script('splide_scrolljs');
        wp_enqueue_script('appjs');
        wp_enqueue_script('scroll');
    }
endif;
add_action('wp_enqueue_scripts', 'invitro_scripts');


if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );


if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'menu_title'  => 'Secciones Repetidas',
        'menu_slug'   => 'theme-general-settings',
        'icon_url'    => 'dashicons-table-row-before',
        'redirect'    => false
    ));
    acf_add_options_sub_page(array(
        'page_title'  => 'Información InVitro',
        'menu_title'  => 'Información InVitro',
        'parent_slug' => 'theme-general-settings'
    ));
    acf_add_options_sub_page(array(
        'page_title'  => 'Sección Experiencias',
        'menu_title'  => 'Sección Experiencias',
        'parent_slug' => 'theme-general-settings'
    ));
    acf_add_options_sub_page(array(
        'page_title'  => 'Sección Cuéntanos tu Proyecto',
        'menu_title'  => 'Sección Cuéntanos tu Proyecto',
        'parent_slug' => 'theme-general-settings'
    ));
    acf_add_options_sub_page(array(
        'page_title'  => 'Sección QR y Checklist',
        'menu_title'  => 'Sección QR y Checklist',
        'parent_slug' => 'theme-general-settings'
    ));
    acf_add_options_sub_page(array(
        'page_title'  => 'Sección Confían en Nosotros',
        'menu_title'  => 'Sección Confían en Nosotros',
        'parent_slug' => 'theme-general-settings'
    ));
    acf_add_options_sub_page(array(
        'page_title'  => 'Sección Novedades',
        'menu_title'  => 'Sección Novedades',
        'parent_slug' => 'theme-general-settings'
    ));
}

//excerpt 30 word
function my_excerpt_length($length){return 30;}
add_filter('excerpt_length', 'my_excerpt_length');