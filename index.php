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

 get_header(); ?>

 <section id="water-slider">
     <div class="containerpg">
         <h3><?php echo get_theme_mod('water_slider_text', '“Novedades”'); ?></h3>
     </div>
 </section>
 
 <section class="bodyman">
 <article>
 
 <section id="customPostIndex" class="customWidthWrapper">
     <?php
     // Consulta para obtener las publicaciones
     $args = array(
         'post_type'      => 'post', // Cambia a tu tipo de publicación si es necesario
         'posts_per_page' => 100, // Número de publicaciones a mostrar
     );
     $query = new WP_Query($args);
 
     // Verifica si hay publicaciones
     if ($query->have_posts()) :
         // Bucle para mostrar cada publicación
         while ($query->have_posts()) : $query->the_post(); ?>
             <article class="customArticle">
                 <a target="_blank" href="<?php the_permalink(); ?>">
                     <div class="customPostImg">
                         <?php if (has_post_thumbnail()) : ?>
                             <?php the_post_thumbnail('thumbnail'); // Puedes cambiar el tamaño si es necesario ?>
                         <?php else : ?>
                             <img src="http://sitechop.com/images/demos/default-image.png" alt="<?php the_title(); ?>" /> <!-- Imagen predeterminada si no hay miniatura -->
                         <?php endif; ?>
                     </div>
                     <h2><?php the_title(); ?></h2>
                     <p><?php the_excerpt(); // Muestra el extracto de la publicación ?></p>
                 </a>
             </article>
         <?php endwhile;
 
         // Resetea la consulta
         wp_reset_postdata();
     else :
         echo '<p>No hay publicaciones disponibles.</p>';
     endif;
     ?>
 </section>
 
 </article>
 
 <!-- Código de Google AdSense separado del bucle PHP -->
 <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9171958648587965"
      crossorigin="anonymous"></script>
 <ins class="adsbygoogle"
      style="display:inline-block;width:728px;height:90px"
      data-ad-client="ca-pub-9171958648587965"
      data-ad-slot="6662661673"></ins>
 <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
 </script>
 
 <?php get_sidebar(); ?>
 <?php get_footer(); ?>
 