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

// Agregar soporte para personalización del logo
function mytheme_customize_register( $wp_customize ) {
    // Agregar sección para el logo
    $wp_customize->add_section( 'custom_logo_section' , array(
        'title'      => __( 'Logo Personalizado', 'mytheme' ),
        'priority'   => 30,
    ) );

    // Agregar configuración para el logo
    $wp_customize->add_setting( 'custom_logo' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    // Agregar control para el logo
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'custom_logo', array(
        'label'      => __( 'Logo', 'mytheme' ),
        'section'    => 'custom_logo_section',
        'settings'   => 'custom_logo',
    ) ) );
}
add_action( 'customize_register', 'mytheme_customize_register' );

// Registrar los menús de WordPress
function teleferico_register_menus() {
    register_nav_menus(array(
        'primary_menu' => __( 'Menu Navegacion', 'teleferico' )
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

// FUNTION MENU FOOTER

function teleferico_register_footer_menus() {
    register_nav_menus(array(
        'footer_menu_info'    => __('Footer Menu Info', 'teleferico'),
        'footer_menu_explore' => __('Footer Menu Explore', 'teleferico'),
        'footer_menu_legal'   => __('Footer Menu Legal', 'teleferico'),
    ));
}
add_action('init', 'teleferico_register_footer_menus');

// FUNTION WATER SLIDE

function custom_theme_customize_register($wp_customize) {
    // Sección para el slider de agua
    $wp_customize->add_section('water_slider_section', array(
        'title'    => __('Slogan', 'theme_name'),
        'priority' => 30,
    ));

    // Configuración para el texto del slider
    $wp_customize->add_setting('water_slider_text', array(
        'default'   => '“Una Experiencia de Altura”',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Control para el texto del slider
    $wp_customize->add_control('water_slider_text', array(
        'label'   => __('Texto del Slider', 'theme_name'),
        'section' => 'water_slider_section',
        'type'    => 'text',
    ));
}

add_action('customize_register', 'custom_theme_customize_register');

// FUNTION ARTICLE

function custom_article_shortcode() {
    ob_start(); // Inicia el almacenamiento en búfer

    ?>
    <section id="customPostIndex" class="customWidthWrapper">
        <?php
        $args = array(
            'post_type' => 'post', // O cambia esto por el tipo de post que desees
            'posts_per_page' => 5, // Ajusta el número de posts a mostrar
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>
                <article class="customArticle">
                    <a target="_blank" href="<?php the_permalink(); ?>">
                        <div class="customPostImg">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('full');
                            } ?>
                        </div>
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_excerpt(); ?></p>
                    </a>
                </article>
            <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </section>
    <?php

    return ob_get_clean(); // Devuelve el contenido del búfer
}
add_shortcode('custom_articles', 'custom_article_shortcode');

// SECTION LLAMADO DE ACCION

function viajes_customizer_settings($wp_customize) {
    // Sección
    $wp_customize->add_section('viajes_section', array(
        'title' => __('Viajes por Carretera', 'tu_textdomain'),
        'priority' => 30,
    ));

    // Ajustes
    $wp_customize->add_setting('viajes_titulo', array(
        'default' => 'Viajes por Carretera',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_setting('viajes_descripcion', array(
        'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry...',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_setting('viajes_boton_texto', array(
        'default' => 'Saber Más',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_setting('viajes_imagen_url', array(
        'default' => 'https://res.cloudinary.com/de8cuyd0n/image/upload/v1520412556/E-commerce%20landing%20page/summer-collection/cold-fashion-man-women_3x.jpg',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Controles
    $wp_customize->add_control('viajes_titulo', array(
        'label' => __('Título', 'tu_textdomain'),
        'section' => 'viajes_section',
        'type' => 'text',
    ));

    $wp_customize->add_control('viajes_descripcion', array(
        'label' => __('Descripción', 'tu_textdomain'),
        'section' => 'viajes_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_control('viajes_boton_texto', array(
        'label' => __('Texto del Botón', 'tu_textdomain'),
        'section' => 'viajes_section',
        'type' => 'text',
    ));

    $wp_customize->add_control('viajes_imagen_url', array(
        'label' => __('URL de la Imagen', 'tu_textdomain'),
        'section' => 'viajes_section',
        'type' => 'url',
    ));
}
add_action('customize_register', 'viajes_customizer_settings');




// ARTICULOS DINAMICO SINGLE.PHP

// Función para generar artículos dinámicos
function generate_articles($articles) {
    foreach ($articles as $article) {
        echo '<article class="p1q2r3s">';
        echo '<h3>' . $article['title'] . '</h3>';
        echo '<p>' . $article['content'] . '</p>';
        echo '</article>';
    }
}

// Array de artículos con títulos y contenidos
$articles = [
    [
        'title' => 'Heading 1',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...'
    ],
    [
        'title' => 'Heading 2',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...'
    ],
    [
        'title' => 'Heading 3',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...'
    ],
    // Agrega más artículos según sea necesario
];

// WIDGET ASIDE

function register_custom_widgets() {
    register_sidebar(array(
        'name'          => __('Sidebar Personalizada', 'theme_name'),
        'id'            => 'custom-sidebar',
        'description'   => __('Área de widgets para el contenido del aside.', 'theme_name'),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}

add_action('widgets_init', 'register_custom_widgets');

// FUNTION RECORRIDO INFO

function customizer_settings($wp_customize) {

    // Sección para la página de inicio
    $wp_customize->add_section('home_page_section', array(
        'title' => __('Página de Inicio', 'theme_name'),
        'priority' => 30,
    ));

    // Campo para el título del welcome-section
    $wp_customize->add_setting('welcome_title', array(
        'default' => 'Descubre la Magia del Teleférico de Puerto Plata: Una Aventura Inolvidable',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('welcome_title', array(
        'label' => __('Título de la Sección de Bienvenida', 'theme_name'),
        'section' => 'home_page_section',
        'type' => 'text',
    ));

    // Campo para el párrafo del welcome-section
    $wp_customize->add_setting('welcome_paragraph', array(
        'default' => 'Aplica por el descuento de temporada mostrando tu documento de identidad o residencia.',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('welcome_paragraph', array(
        'label' => __('Párrafo de la Sección de Bienvenida', 'theme_name'),
        'section' => 'home_page_section',
        'type' => 'textarea',
    ));

    // Títulos y párrafos de la galería
    for ($i = 1; $i <= 4; $i++) {
        // Campo para el título de cada item de galería
        $wp_customize->add_setting('gallery_title_' . $i, array(
            'default' => 'Título del Ítem ' . $i,
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('gallery_title_' . $i, array(
            'label' => __('Título del Ítem ' . $i, 'theme_name'),
            'section' => 'home_page_section',
            'type' => 'text',
        ));

        // Campo para el párrafo de cada item de galería
        $wp_customize->add_setting('gallery_paragraph_' . $i, array(
            'default' => 'Descripción del Ítem ' . $i,
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('gallery_paragraph_' . $i, array(
            'label' => __('Descripción del Ítem ' . $i, 'theme_name'),
            'section' => 'home_page_section',
            'type' => 'textarea',
        ));
    }
}

add_action('customize_register', 'customizer_settings');


// GALERIA

function customizer_slider_settings($wp_customize) {

    // Sección para la configuración del slider
    $wp_customize->add_section('slider_section', array(
        'title' => __('Configuración del Slider', 'theme_name'),
        'priority' => 30,
    ));

    // Agregar configuraciones para las imágenes del slider
    for ($i = 1; $i <= 6; $i++) {
        $wp_customize->add_setting('slider_image_' . $i, array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_image_' . $i, array(
            'label' => __('Imagen ' . $i, 'theme_name'),
            'section' => 'slider_section',
            'settings' => 'slider_image_' . $i,
        )));

        $wp_customize->add_setting('slider_image_link_' . $i, array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control('slider_image_link_' . $i, array(
            'label' => __('Enlace para Imagen ' . $i, 'theme_name'),
            'section' => 'slider_section',
            'type' => 'url',
        ));
    }
}

add_action('customize_register', 'customizer_slider_settings');

// PG CALENDARIO

// PG CALENDARIO

// Añadir la sección de personalización para eventos en el calendario
function calendar_customizer_register($wp_customize) {
    // Sección para eventos de Taino Bay
    $wp_customize->add_section('calendar_events_taino_bay', array(
        'title' => __('Taino Bay Events', 'your_theme'),
        'description' => __('Add unlimited events for Taino Bay', 'your_theme'),
        'priority' => 30,
    ));

    // Sección para eventos de Amber Cove
    $wp_customize->add_section('calendar_events_amber_cove', array(
        'title' => __('Amber Cove Events', 'your_theme'),
        'description' => __('Add unlimited events for Amber Cove', 'your_theme'),
        'priority' => 31,
    ));

    // Crear un campo dinámico para los eventos de Taino Bay
    $wp_customize->add_setting('taino_bay_events', array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'taino_bay_events_control', array(
        'label' => __('Taino Bay Events (JSON format)', 'your_theme'),
        'description' => __('Enter events as JSON array with event names and dates', 'your_theme'),
        'section' => 'calendar_events_taino_bay',
        'settings' => 'taino_bay_events',
        'type' => 'textarea',
    )));

    // Crear un campo dinámico para los eventos de Amber Cove
    $wp_customize->add_setting('amber_cove_events', array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'amber_cove_events_control', array(
        'label' => __('Amber Cove Events (JSON format)', 'your_theme'),
        'description' => __('Enter events as JSON array with event names and dates', 'your_theme'),
        'section' => 'calendar_events_amber_cove',
        'settings' => 'amber_cove_events',
        'type' => 'textarea',
    )));
}
add_action('customize_register', 'calendar_customizer_register');

// Pasar los eventos personalizados al script del calendario
function enqueue_calendar_script() {
    wp_enqueue_script('calendar-script', get_template_directory_uri() . '/assets/js/pg-calendar.js', array('jquery', 'moment'), null, true);

    // Obtener eventos de Taino Bay y Amber Cove del personalizador
    $taino_bay_events_json = get_theme_mod('taino_bay_events', '[]');
    $amber_cove_events_json = get_theme_mod('amber_cove_events', '[]');

    // Decodificar los eventos en formato JSON
    $taino_bay_events = json_decode($taino_bay_events_json, true);
    $amber_cove_events = json_decode($amber_cove_events_json, true);

    // Formatear eventos para el script de JavaScript
    $events = array();

    if (is_array($taino_bay_events)) {
        foreach ($taino_bay_events as $event) {
            if (!empty($event['name']) && !empty($event['date'])) {
                $events[] = array(
                    'eventName' => sanitize_text_field($event['name']),
                    'date' => sanitize_text_field($event['date']),
                    'calendar' => 'Taino Bay',
                    'color' => 'blue' // Azul para Taino Bay
                );
            }
        }
    }

// Continuación de la función enqueue_calendar_script
if (is_array($amber_cove_events)) {
    foreach ($amber_cove_events as $event) {
        if (!empty($event['name']) && !empty($event['date'])) {
            $events[] = array(
                'eventName' => sanitize_text_field($event['name']),
                'date' => sanitize_text_field($event['date']),
                'calendar' => 'Amber Cove',
                'color' => 'orange' // Naranja para Amber Cove
            );
        }
    }
}

// Pasar el array de eventos a JavaScript
wp_localize_script('calendar-script', 'calendarEvents', array(
    'events' => $events
));
}
add_action('wp_enqueue_scripts', 'enqueue_calendar_script');


//BANNER BOTTOM

function mytheme_customize_button_section($wp_customize) {
    // Sección para el botón personalizado
    $wp_customize->add_section('button_section', array(
        'title'    => __('Botón de Calendario', 'mytheme'),
        'priority' => 30,
    ));

    // URL del botón
    $wp_customize->add_setting('button_url', array(
        'default'   => 'https://tupagina.com',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('button_url_control', array(
        'label'    => __('URL del Botón', 'mytheme'),
        'section'  => 'button_section',
        'settings' => 'button_url',
        'type'     => 'url',
    ));

    // Texto del botón
    $wp_customize->add_setting('button_text', array(
        'default'   => 'Gracias!',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('button_text_control', array(
        'label'    => __('Texto del Botón', 'mytheme'),
        'section'  => 'button_section',
        'settings' => 'button_text',
        'type'     => 'text',
    ));
}

add_action('customize_register', 'mytheme_customize_button_section');


add_action('customize_register', 'mytheme_customize_register');

// PG HISTORIA

function custom_blog_section($wp_customize) {
    // Sección en el personalizador
    $wp_customize->add_section('blog_custom_section', array(
        'title'    => __('Blog Section', 'yourtheme'),
        'priority' => 30,
    ));

    // Campo para el primer título
    $wp_customize->add_setting('blog_title_1', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('blog_title_1', array(
        'label'    => __('Título 1', 'yourtheme'),
        'section'  => 'blog_custom_section',
        'settings' => 'blog_title_1',
        'type'     => 'text',
    ));

    // Campo para el primer párrafo
    $wp_customize->add_setting('blog_paragraph_1', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('blog_paragraph_1', array(
        'label'    => __('Párrafo 1', 'yourtheme'),
        'section'  => 'blog_custom_section',
        'settings' => 'blog_paragraph_1',
        'type'     => 'textarea',
    ));

    // Campo para la primera imagen
    $wp_customize->add_setting('blog_image_1', array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('blog_image_1', array(
        'label'    => __('URL de Imagen 1', 'yourtheme'),
        'section'  => 'blog_custom_section',
        'settings' => 'blog_image_1',
        'type'     => 'url',
    ));

    // Campo para el segundo título
    $wp_customize->add_setting('blog_title_2', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('blog_title_2', array(
        'label'    => __('Título 2', 'yourtheme'),
        'section'  => 'blog_custom_section',
        'settings' => 'blog_title_2',
        'type'     => 'text',
    ));

    // Campo para el segundo párrafo
    $wp_customize->add_setting('blog_paragraph_2', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('blog_paragraph_2', array(
        'label'    => __('Párrafo 2', 'yourtheme'),
        'section'  => 'blog_custom_section',
        'settings' => 'blog_paragraph_2',
        'type'     => 'textarea',
    ));

    // Campo para la segunda imagen
    $wp_customize->add_setting('blog_image_2', array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('blog_image_2', array(
        'label'    => __('URL de Imagen 2', 'yourtheme'),
        'section'  => 'blog_custom_section',
        'settings' => 'blog_image_2',
        'type'     => 'url',
    ));

    // Campo para el tercer título
    $wp_customize->add_setting('blog_title_3', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('blog_title_3', array(
        'label'    => __('Título 3', 'yourtheme'),
        'section'  => 'blog_custom_section',
        'settings' => 'blog_title_3',
        'type'     => 'text',
    ));

    // Campo para el tercer párrafo
    $wp_customize->add_setting('blog_paragraph_3', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('blog_paragraph_3', array(
        'label'    => __('Párrafo 3', 'yourtheme'),
        'section'  => 'blog_custom_section',
        'settings' => 'blog_paragraph_3',
        'type'     => 'textarea',
    ));

    // Campo para la tercera imagen
    $wp_customize->add_setting('blog_image_3', array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('blog_image_3', array(
        'label'    => __('URL de Imagen 3', 'yourtheme'),
        'section'  => 'blog_custom_section',
        'settings' => 'blog_image_3',
        'type'     => 'url',
    ));
}

add_action('customize_register', 'custom_blog_section');