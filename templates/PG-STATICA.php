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
    <!-- Mutiple Slider Section Starts -->
    <section id="water-slider">
        <div class="containerpg">
            <h3>“Una Experiencia de Altura”</h3>
      
        </div>
    </section>
    
    <!-- Blog Section Starts -->
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
<?php get_footer();?>