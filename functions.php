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

// Verificar actualizaciones del tema desde GitHub

function check_theme_updates_from_github() {
    // Cargar el token de acceso personal de GitHub
    $github_token = 'SHA256:EQzD7T6AA9L5KPZqiEi+zA3uHMBgGDb3TynVWY/HxDk';

    // Consultar la API de GitHub para obtener las etiquetas (versiones) del repositorio
    $response = wp_remote_get("https://api.github.com/repos/MattLpzZ/rmtelefericotema/tags", array(
        'headers' => array(
            'Authorization' => 'token ' . $github_token,
            'User-Agent' => 'WordPress'
        )
    ));

    if (is_wp_error($response)) {
        return;
    }

    $tags = json_decode(wp_remote_retrieve_body($response), true);

    // Verificar si $tags es un array válido y no está vacío
    if (is_array($tags) && !empty($tags)) {
        // Mostrar un mensaje en el panel de administración con un botón de actualización
        add_action('admin_notices', function() {
            echo '<div class="notice notice-warning"><p>¡Hay una actualización disponible para el tema! <a href="' . esc_url(admin_url('update-core.php')) . '" class="button">Actualizar Ahora</a></p></div>';
        });
    }
}

// Ejecutar la función cada día
add_action('init', 'check_theme_updates_from_github');

// TAMAÑO DE ARCHIVOS PERMITIDO
@ini_set( 'upload_max_size' , '100M' );
@ini_set( 'post_max_size', '100M');
@ini_set( 'max_execution_time', '600' );

// INDENTIFICAR ERRORES

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// CACHE EN EL SITIO WEB

// Habilitar la compresión GZIP
function enable_gzip_compression() {
    if (extension_loaded('zlib') && !ob_start("ob_gzhandler")) {
        ob_start();
    }
}
add_action('init', 'enable_gzip_compression');

// Configurar encabezados de caché
function custom_cache_headers($headers) {
    $headers['Cache-Control'] = 'public, max-age=3600'; // Almacena en caché durante 1 hora
    return $headers;
}
add_filter('wp_headers', 'custom_cache_headers');


// Soporte para Títulos de Tema (Title Tag Support)
add_theme_support('title-tag');

// Soporte para Menús Personalizados (Custom Menu Support)
if (function_exists('register_nav_menus')) {
    register_nav_menus(array('Superior' => 'Menu Principal Superior'));
}

// Agregar clase para <a> y que lea CSS (enlace de páginas)
add_filter('nav_menu_link_attributes', 'clase_menu_invento', 10, 3);

function clase_menu_invento($atts, $item, $args) {
    $class = 'nav__link';
    $atts['class'] = $class;
    return $atts;
}

//BODDY

/*AGREGAR IMAGENES DEL CARRUSER*/

function custom_theme_customize_register($wp_customize) {
    // Sección para imágenes del carrusel
    $wp_customize->add_section('carousel_images', array(
        'title' => 'Imágenes del Carrusel',
        'priority' => 30,
    ));

    // Configuración para cada imagen del carrusel
    for ($i = 1; $i <= 4; $i++) {
        $wp_customize->add_setting("carousel_image_$i", array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "carousel_image_$i", array(
            'label' => "Imagen $i",
            'section' => 'carousel_images',
            'settings' => "carousel_image_$i",
        )));
    }
}

add_action('customize_register', 'custom_theme_customize_register');


// Agregar Imágenes Destacadas (Post Thumbnails)
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}

//ASIDE

// Registra el área de widgets del aside

// Registra un área de widgets para el aside
function registrar_aside_dinamico() {
    register_sidebar(array(
        'name' => 'Área de Widgets del Aside', // Nombre del área de widgets
        'id' => 'aside-widget-area', // Identificador único
        'description' => 'Esta área de widgets aparecerá en el "aside" de tu tema.', // Descripción
        'before_widget' => '<div id="%1$s" class="widget %2$s">', // HTML antes de cada widget
        'after_widget' => '</div>', // HTML después de cada widget
        'before_title' => '<h2 class="widget-title">', // HTML antes del título del widget
        'after_title' => '</h2>', // HTML después del título del widget
    ));
}

add_action('widgets_init', 'registrar_aside_dinamico');

    /* AREA DE PERSONALIZACION DE ENLACES FOOTER*/

	/*ENLACES DE REDES*/
    // Agregar sección de Redes Sociales en Personalizador de WordPress
    function rm_teleferico_customize_register($wp_customize) {
        $wp_customize->add_section('redes_sociales', array(
            'title' => 'Redes Sociales',
            'priority' => 30,
        ));
    
        $redes_sociales = array('facebook', 'twitter', 'instagram', 'linkedin', 'youtube');
    
        foreach ($redes_sociales as $red) {
            $setting_name = "opciones_redes_sociales[{$red}_url]";
    
            $wp_customize->add_setting($setting_name, array(
                'default' => '',
                'sanitize_callback' => 'esc_url_raw',
            ));
    
            $wp_customize->add_control($setting_name, array(
                'label' => "Enlace de {$red}",
                'section' => 'redes_sociales',
                'type' => 'text',
            ));
        }
    }
    
    add_action('customize_register', 'rm_teleferico_customize_register');
    

    
    
// menus footer

if (function_exists('register_nav_menus')) {
    register_nav_menus(array('menu_nav_footer' => 'Menú Footer'));
}

if (function_exists('register_nav_menus')) {
    register_nav_menus(array('menu_nav_footer_2' => 'Menú Footer 2'));
}

/*Imput de suscripcion*/

// Registra la acción para manejar la suscripción
add_action('admin_post_handle_subscription', 'handle_subscription');
add_action('admin_post_nopriv_handle_subscription', 'handle_subscription');

function handle_subscription() {
    // Verifica si se ha enviado un correo electrónico
    if (isset($_POST['subscriber_email'])) {
        $subscriber_email = sanitize_email($_POST['subscriber_email']);
        // Aquí puedes realizar validaciones adicionales, como verificar si el correo es válido

        // Guarda el correo electrónico en la base de datos (puedes usar la tabla de suscriptores de WordPress)
        $subscriber_id = wp_insert_post(array(
            'post_title' => $subscriber_email,
            'post_status' => 'publish',
            'post_type' => 'subscribers', // Crea un tipo de publicación personalizado para los suscriptores
        ));

        if (!is_wp_error($subscriber_id)) {
            // Redirecciona a una página de éxito o muestra un mensaje de éxito
            wp_safe_redirect(home_url());
            exit;
        } else {
            // Hubo un problema al procesar la suscripción, redirecciona a una página de error o muestra un mensaje de error
            wp_safe_redirect('url_de_la_pagina_de_error');
            exit;
        }
    } else {
        // No se proporcionó una dirección de correo electrónico, redirecciona a una página de error o muestra un mensaje de error
        wp_safe_redirect(home_url());
        exit;
    }
}
/*AREA DE DATOS INTITUCIONALES*/

function registrar_campos_enlaces_footer($wp_customize) {
    $wp_customize->add_section('seccion_enlaces_footer', array(
        'title' => 'Enlaces del Footer',
        'priority' => 30,
    ));

    $wp_customize->add_setting('enlace_privacy_policy', array(
        'default' => '#',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('enlace_terms_condition', array(
        'default' => '#',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('enlace_copyright', array(
        'default' => '#',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('enlace_privacy_policy', array(
        'label' => 'Enlace de Privacy policy',
        'section' => 'seccion_enlaces_footer',
        'type' => 'text',
    ));

    $wp_customize->add_control('enlace_terms_condition', array(
        'label' => 'Enlace de Terms & condition',
        'section' => 'seccion_enlaces_footer',
        'type' => 'text',
    ));

    $wp_customize->add_control('enlace_copyright', array(
        'label' => 'Enlace de Copyright',
        'section' => 'seccion_enlaces_footer',
        'type' => 'text',
    ));
}
add_action('customize_register', 'registrar_campos_enlaces_footer');

// WIDGETSS INFERIOR

function register_custom_widgets_area() {
    register_sidebar( array(
        'name' => 'Área de Widgets Personalizada',
        'id' => 'custom-widgets-area',
        'description' => 'Esta es un área de widgets personalizada en tu sitio web.',
        'before_widget' => '<div id="%1$s" class="img-holder widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '',
        'after_title' => '',
    ) );
}
add_action( 'widgets_init', 'register_custom_widgets_area' );

// Register customizer settings
function theme_customizer_settings($wp_customize) {
    // Custom H1
    $wp_customize->add_setting('custom_h1', array(
        'default'           => 'Happiness is closer than you think',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('custom_h1', array(
        'label'   => __('Custom H1', 'your-text-domain'),
        'section' => 'header_section',
        'type'    => 'text',
    ));

    // Custom Paragraph
    $wp_customize->add_setting('custom_paragraph', array(
        'default'           => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, ea. Mollitia maiores voluptatum vitae suscipit tenetur ut officiis assumenda ipsam.',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('custom_paragraph', array(
        'label'   => __('Custom Paragraph', 'your-text-domain'),
        'section' => 'header_section',
        'type'    => 'textarea',
    ));

    // Read More Page
    $wp_customize->add_setting('read_more_page', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('read_more_page', array(
        'label'   => __('Read More Page Link', 'your-text-domain'),
        'section' => 'header_section',
        'type'    => 'text',
    ));
}

add_action('customize_register', 'theme_customizer_settings');

// Create a section for customizer
function theme_customizer_sections($wp_customize) {
    $wp_customize->add_section('header_section', array(
        'title'    => __('Header Section', 'your-text-domain'),
        'priority' => 30,
    ));
}

add_action('customize_register', 'theme_customizer_sections');

//video // Añade las secciones y configuraciones al Customizer

function theme_customizer_video_settings($wp_customize) {
    // Sección para el video
    $wp_customize->add_section('video_section', array(
        'title'    => __('Video Settings', 'your-text-domain'),
        'priority' => 30,
    ));

    // Configuración para la URL del video
    $wp_customize->add_setting('video_url', array(
        'default'           => get_template_directory_uri() . '/assets/images/mivideo.mp4',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('video_url', array(
        'label'   => __('Video URL', 'your-text-domain'),
        'section' => 'video_section',
        'type'    => 'text',
    ));
}

add_action('customize_register', 'theme_customizer_video_settings');
