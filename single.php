<?php 
/**
 * The main template file.
 *
 * @link https://github.com/MattLpzZ/website-turistico
 *
 * @package Rm Graphic & Desing - MattLpzZ
 * @subpackage RmTelefericoTema
 * @since RmTelefericoTema 1.02
 */

get_header();?>



<!-- Body Section -->
<?php
// Asegúrate de que WordPress cargue correctamente los datos del post.
if (have_posts()) : 
    while (have_posts()) : the_post(); ?>

    <!-- Banner Section -->
    <div class="x1a2b3c">
        <div class="x4d5e6f">
            <h3><?php the_title(); ?></h3> <!-- Título del artículo dentro del banner -->
        </div> <!-- end banner-text -->
    </div> <!-- end banner -->

    <!-- Body Section -->
    <section class="bodyman">
        <article>
            <div class="y1z2x3w">
                <div class="a7b8c9d">

                    <!-- Imagen destacada -->
                    <!-- Imagen destacada -->
                <?php if (has_post_thumbnail()) : ?>
                    <div class="image-container11">
                        <?php the_post_thumbnail('full'); ?> <!-- Aquí puedes usar 'full', 'large', 'medium', o un tamaño personalizado -->
                    </div>
                <?php endif; ?>
                    <!-- Artículo principal -->
                    <div class="p1q2r3s">
                        <h2><?php the_title(); ?></h2> <!-- Título del artículo -->
                        
                        <!-- Contenido del artículo -->
                        <div class="content-container111">
                            <?php the_content(); ?>
                        </div>
                    </div> <!-- end post -->

                </div> <!-- end container -->
            </div> <!-- end main -->
        </article>

    <?php 
    endwhile; 
else : 
    echo '<p>No se encontró ningún artículo.</p>';
endif;
?>
   <?php get_sidebar();?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/pg-single.js"></script>

<?php get_footer();?>