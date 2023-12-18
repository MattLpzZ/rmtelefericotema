<?php 
/**
 * The main template file.
 *
 * @link https://github.com/MattLpzZ/website-turistico
 *
 * @package Rm Graphic & Desing - MattLpzZ
 * @subpackage RmTelefericoTema
 * @since RmTelefericoTema 1.2
 */
get_header();?>

<!--Articulo-->
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
        <div class="container-content">
            <article>
                <h1><?php the_title(); ?></h1>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
                <div class="post-thumbnail">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large', array('class' => 'custom-thumbnail-class')); ?>
                    <?php endif; ?>
                </div>
                <div class="post-meta">
                    <span class="author">Por: <?php the_author(); ?></span>
                    <span class="date">Publicado el: <?php the_date(); ?></span>
                    <span class="categories">Categorías: <?php the_category(', '); ?></span>
                </div>
            </article>
        </div>
<?php
    endwhile;
endif;

wp_reset_postdata();
?>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
