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
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1" />
    <title><?php wp_title(); ?></title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,500;0,600;1,300&display=swap" rel="stylesheet">

    <!-- Carga de estilos personalizados -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/nav.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/section-water.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/section-welcome.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pagination.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/img-promo.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/section-galery-slider.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/article.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/aside.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/footer.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sobrenosotros.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/banner.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pg-calendario.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bannerfin.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pg-landing.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pg-contact.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pg-single.css">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- FullCalendar CSS -->
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css' rel='stylesheet' />
    <!-- FullCalendar JS -->
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js'></script>


    <!-- WordPress Head Hook -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="hero">
    <nav class="nav container" id="nav">
        <a href="<?php echo home_url(); ?>">
            <?php 
            // Obtener el logo del personalizador
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id, 'full'); 
            ?>
            <img loading="lazy" class="nav__logo" src="<?php echo esc_url($logo[0]); ?>" alt="Logo">
        </a>

        <div class="nav-container" id="nav-container">
            <!-- Dynamic WordPress Menu -->
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary_menu', // Defined in functions.php
                    'menu_class'     => 'nav__links',   // Custom class for UL
                    'container'      => false,          // Avoids adding a container around UL
                ));
            ?>
        </div>

        <a href="#nav" class="nav__hamburguer" id="nav-hamburguer">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/menu.svg" class="nav__icon" alt="Menu Icon">
        </a>

        <a href="#" class="nav__close" id="nav-close">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/close.svg" class="nav__icon" alt="Close Icon">
        </a>
    </nav>
</header>