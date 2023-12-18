<?php /* Template Name: PG STATICA*/ ?>

<?php get_header();?>

<!--carruser fotos-->

<div class="carruserportada">
    <ul>
        <?php
        for ($i = 1; $i <= 4; $i++) {
            $image_url = get_theme_mod("carousel_image_$i");
            if (!empty($image_url)) {
        ?>
        <li>
            <img loading="lazy" src="<?php echo esc_url($image_url); ?>" alt="Imagen <?php echo $i; ?>">
        </li>
        <?php
            }
        }
        ?>
    </ul>
</div>
<!--BANNER ACTUALIDADES-->

<section class="bannernoticias">
  <i class="iconbanner"></i>
  <ul class="listadenoticias">
    <?php
    for ($i = 1; $i <= 5; $i++) {
        $news_text = get_theme_mod('news_banner_text_' . $i, '');
        if (!empty($news_text)) {
            echo '<li class="news-item"> ' . $i . ': ' . esc_html($news_text) . '</li>';
        }
    }
    ?>
  </ul>
</section>

<div class="content">
    <div class="articles-container-static">
        <article class="article">
            <h1><?php the_title(); ?></h1>
            <div class="entry-content">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
            <?php
        if (has_post_thumbnail()) {
            $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
        ?>
            <img src="<?php echo $featured_image; ?>" alt="<?php the_title(); ?>" />
        <?php
        }
        ?>
        </article>
       
    </div>

    <div class="container-aside">
        <?php if (is_active_sidebar('aside-widget-area')) : ?>
            <div class="aside">
                <?php dynamic_sidebar('aside-widget-area'); ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- tools section -->
<div class="tools">
        <div class="contenedorinferior">
            <div class="main-heading">
                <h2>Como utilizar Nuestros Servicios</h2>
            </div>

            <div class="tools-content">
                <div class="tool">
                <img src="<?php echo get_template_directory_uri() . '/assets/icon/ticket.svg"'; ?>" alt="icon blacklist">
                    <h3>¡Compra Tu Ticket en el Teleférico de Puerto Plata!t</h3>
                    <p>Asegura tu lugar para un viaje único en el Teleférico de Puerto Plata.</p>
                </div>
                <div class="tool">
                <img src="<?php echo get_template_directory_uri() . '/assets/icon/camara.svg"'; ?>" alt="icon blacklist">
                    <h3>Prepara tu Cámara para las Vistas Inigualables de Puerto Plata</h3>
                    <p>Listo para capturar vistas panorámicas impresionantes de Puerto Plata.</p>
                </div>
                <div class="tool">
                <img src="<?php echo get_template_directory_uri() . '/assets/icon/funicular.svg"'; ?>" alt="icon blacklist">
                    <h3> Aborda el Funicular Rumbo a la Aventura</h3>
                    <p>Sube al funicular para una emocionante aventura.</p>
                </div>
                <div class="tool">
                <img src="<?php echo get_template_directory_uri() . '/assets/icon/monumento.svg"'; ?>" alt="icon blacklist">
                    <h3>Explora del Monumento Loma Isabel de Torres</h3>
                    <p>Descubre la belleza natural y la historia en este icónico lugar.</p>
                </div>
            </div>

            <div class="main-heading">
                <p>Nota: Todos Nuestros Servicios es por orden de llegada.</p>
            </div>

            <div class="companies">
                <?php if ( is_active_sidebar( 'custom-widgets-area' ) ) : ?>
                    <?php dynamic_sidebar( 'custom-widgets-area' ); ?>
                <?php endif; ?>
            </div>


        </div>
    </div>



<?php get_footer();?>