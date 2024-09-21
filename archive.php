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

<section class="bodyman">
  <article>
    <?php 
    // WP_Query para obtener las últimas entradas del blog
    $args = array(
      'post_type'      => 'post',
      'posts_per_page' => 2, // Mostrar solo los últimos dos artículos
    );
    
    $query = new WP_Query($args);

    if ($query->have_posts()) :
      while ($query->have_posts()) : $query->the_post(); ?>
        
        <div class="blog">
          <div class="conteudo">
            <!-- Imagen destacada del post -->
            <?php if (has_post_thumbnail()) : ?>
              <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" style="width: 100%; height: auto;">
            <?php endif; ?>

            <!-- Título del post -->
            <h1><?php the_title(); ?></h1>
            
            <!-- Contenido del post -->
            <p><?php echo wp_trim_words(get_the_content(), 40, '...'); ?></p>

            <!-- Botón de Leer más -->
            <a href="<?php the_permalink(); ?>" class="continue-lendo">Read more →</a>
          </div>
        </div>

      <?php endwhile;
      wp_reset_postdata();
    else : 
      echo '<p>No posts found.</p>';
    endif; ?>
  </article>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
