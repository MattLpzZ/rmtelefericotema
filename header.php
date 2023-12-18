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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Título de pestaña -->
    <title>Teleférico Puerto Plata</title>

    <!-- Ícono de pestaña -->
    <link rel="icon" href="<?php bloginfo('template_url')?>/assets/images/TELEPOP INCORecurso 3.png">

    <!-- Encolar estilos CSS -->
    
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/css/style-1.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/css/style-static.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>


         <!-- Encolar scripts (JavaScript) -->
        
    
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9171958648587965"
    crossorigin="anonymous"></script>

    <?php $video_url = get_theme_mod('video_file', ''); ?>

     <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HX14LEQQFW"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-HX14LEQQFW');
    </script>
<!-- Encolar scripts (JavaScript) -->
  

<!-- Encolar scripts (JavaScript) -->
  

</head>

<body  class="body">

<!--------------------------------------------------------------------------------------------------------------------------------------------->
<!--Header - menu-->
<header class="hero">
    <nav class="nav container" id="nav">
        <a href="<?php echo home_url(); ?>"><img loading="lazy" class="nav__logo" src="<?php bloginfo( 'template_url' )?>/assets/images/LGTELEFERICO.png"></a>

        <?php
        // Comprobar si el menú "Superior" está registrado
        if (has_nav_menu('Superior')) {
            wp_nav_menu(array(
                'theme_location' => 'Superior',
                'container' => 'nav',
                'container_class' => 'nav-container',
                'container_id' => 'nav-container',
                'items_wrap' => '<ul class="nav__links">%3$s</ul>',
                'menu_class' => 'nav__item',
            ));
        } else {
            // Menú de respaldo o estructura de navegación alternativa
            echo '<nav class="nav-container">';
            echo '<ul class="nav__links">';
            echo '<li class="nav__item"><a href="/">Inicio</a></li>';
            echo '<li class="nav__item"><a href="/sobre-nosotros">Sobre Nosotros</a></li>';
            echo '<li class="nav__item"><a href="/contacto">Contacto</a></li>';
            echo '</ul>';
            echo '</nav>';
        }
        ?>

        <a href="#nav" class="nav__hamburguer">
            <img src="<?php bloginfo( 'template_url' )?>/assets/images/menu.svg" class="nav__icon">
        </a>

        <a href="#" class="nav__close">
            <img src="<?php bloginfo( 'template_url' )?>/assets/images/close.svg" class="nav__icon">
        </a>
    </nav>
    
</header>
