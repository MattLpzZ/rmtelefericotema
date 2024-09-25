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
   <aside>
    <div class="container-aside">
        <?php if (is_active_sidebar('custom-sidebar')) : ?>
            <?php dynamic_sidebar('custom-sidebar'); ?>
        <?php else : ?>
            <div class="post">
                <div class="header_post">
                    <img src="https://images.pexels.com/photos/2529973/pexels-photo-2529973.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                </div>
    
                <div class="body_post">
                    <div class="post_content">
                        <h1>Lorem Ipsum</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi assumenda cumque deserunt dolorum ex exercitationem.</p>
    
                        <div class="container_infos">
                            <div class="postedBy">
                                <span>author:</span> John Doe
                            </div>
    
                            <div class="container_tags">
                                <span>tags:</span>
                                <div class="tags">
                                    <ul>
                                        <li>design</li>
                                        <li>front end</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9171958648587965"
     crossorigin="anonymous"></script>
<!-- RESP ADS -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9171958648587965"
     data-ad-slot="9386965737"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
      </div>
    <?php endif; ?>
    
</aside>
 </section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/pg-single.js"></script>

<?php get_footer();?>