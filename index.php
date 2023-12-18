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

get_header();?>

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


    <div class="articles-container">
        <?php
        $args = array(
            'post_type' => 'post',   // Tipo de contenido: entradas de blog
            'post_status' => 'publish',  // Solo entradas publicadas
            'posts_per_page' => -1,  // Mostrar todas las entradas
            'orderby' => 'date',  // Ordenar por fecha
            'order' => 'DESC',  // En orden descendente
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
        ?>
            <article class="article">
                <h1><?php the_title(); ?></h1>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
                <div class="post-thumbnail">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large', array('class' => 'custom-thumbnail-class')); ?>
                    <?php endif; ?>
                </div>
               <!-- Etiquetas de datos de entrada
                <div class="post-meta">
                    <span class="author">Por: <?php the_author(); ?></span>
                    <span class="date">Publicado el: <?php the_date(); ?></span>
                    <span class="categories">Categorías: <?php the_category(', '); ?></span>
                </div>
                    -->
            </article>
        <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </div>

    <div class="container-aside">
        <?php if (is_active_sidebar('aside-widget-area')) : ?>
            <div class="aside">
                <?php dynamic_sidebar('aside-widget-area'); ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<section id="water-slider">
        <div class="containerpg">
            <h3>“Una Experiencia de Altura”</h3>
      
        </div>
    </section>
    
<section id="blog">
        
            <main class="main">
            <div class="containerpg2">
            <div class="left-containermm">
                <div class="text-containermm">
                <h1>Disfruta del unico <span>Teleferico Turistico</span> del caribe.</h1>
                <p>
                Explorar Puerto Plata se torna incompleto sin experimentar el teleférico, el único en toda la región caribeña que ha estado operando de manera continua desde 1975. Este emocionante viaje de 10 minutos te transporta a 800 metros sobre el paisaje mágico de Puerto Plata, brindándote vistas panorámicas del mar al norte y las exuberantes llanuras que, al final de la travesía, te conducen a la majestuosa Loma Isabel de Torres. Adéntrate en esta reserva natural y su cautivador jardín botánico, y revive la maravilla del teleférico durante tu descenso. Una experiencia que fusiona la naturaleza con la innovación, garantizando un recuerdo inolvidable.</p>
                </div>
        
                <div class="stats-containerm">
                <ul>
                    <li><span>755+</span> Usuarios Diarios</li>
                    <li><span>22,650+</span> Usuarios Mensuales</li>
                    <li><span>275,575+</span> Usuarios anuales</li>
                </ul>
                </div>
            </div>
        
            <div class="right-containermm">
                <div class="background-image">
                <div class="background-color"></div>
                </div>
            </div>
            </div>
        </main>
    </section>


<?php get_footer();?>