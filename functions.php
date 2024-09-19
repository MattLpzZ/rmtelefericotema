<?php 
/**
 * The main template file.
 *
 * @link https://github.com/MattLpzZ/website-turistico
 *
 * @package Rm Graphic & Desing - MattLpzZ
 * @subpackage RmTelefericoTema
 * @since RmTelefericoTema 1.3
 */

// 

// FUNTION MENU

// Registrar los menús de WordPress
function teleferico_register_menus() {
    register_nav_menus(array(
        'primary_menu' => __( 'Primary Menu', 'teleferico' )
    ));
}
add_action( 'after_setup_theme', 'teleferico_register_menus' );

// Habilitar soporte para características adicionales del tema
function teleferico_theme_support() {
    add_theme_support( 'title-tag' ); // Para que el título se gestione automáticamente
    add_theme_support( 'post-thumbnails' ); // Soporte para imágenes destacadas
}
add_action( 'after_setup_theme', 'teleferico_theme_support' );

// Encolar los estilos y scripts
function teleferico_enqueue_styles() {
    wp_enqueue_style( 'style-css', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_style( 'nav-css', get_template_directory_uri() . '/assets/css/nav.css' );
    wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css' );
    // Agregar otros archivos CSS necesarios...
}
add_action( 'wp_enqueue_scripts', 'teleferico_enqueue_styles' );