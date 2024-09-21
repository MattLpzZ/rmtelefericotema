<?php /* Template Name: PG HISTORIA*/ ?>

<?php get_header();?>

<section id="water-slider">
    <div class="containerpg">
        <h3><?php echo get_theme_mod('water_slider_text', '“Historia”'); ?></h3>
    </div>
</section>

<section class="content-blog">
    <div class="blog-art">
        <!-- Título 1 -->
        <?php if ( get_theme_mod('blog_title_1') ) : ?>
            <h2><?php echo esc_html( get_theme_mod('blog_title_1') ); ?></h2>
        <?php endif; ?>
        
        <!-- Párrafo 1 -->
        <?php if ( get_theme_mod('blog_paragraph_1') ) : ?>
            <p><?php echo nl2br( esc_html( get_theme_mod('blog_paragraph_1') ) ); ?></p>
        <?php endif; ?>

        <br>

        <!-- Título 2 -->
        <?php if ( get_theme_mod('blog_title_2') ) : ?>
            <h2><?php echo esc_html( get_theme_mod('blog_title_2') ); ?></h2>
        <?php endif; ?>
        
        <!-- Párrafo 2 -->
        <?php if ( get_theme_mod('blog_paragraph_2') ) : ?>
            <p><?php echo nl2br( esc_html( get_theme_mod('blog_paragraph_2') ) ); ?></p>
        <?php endif; ?>

        <br>
    </div>
</section>


<section class="galery-slider">
  <div class="image-slider">
    <section class="slider__content">
        <button type="button" class="slider-control--button prev-button">
            <svg width="16" height="16" fill="currentColor" class="icon arrow-left-circle" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
            </svg>
        </button>
        <main class="image-display">
            <?php for ($i = 1; $i <= 6; $i++) : ?>
                <?php $image_url = get_theme_mod('slider_image_' . $i); ?>
                <?php if ($image_url) : ?>
                    <div class="slider-image" style="background-image: url('<?php echo esc_url($image_url); ?>');">
                        <a href="<?php echo esc_url(get_theme_mod('slider_image_link_' . $i, '#')); ?>" class="slider-link"></a>
                    </div>
                <?php endif; ?>
            <?php endfor; ?>
        </main>
        <button type="button" class="slider-control--button next-button">
            <svg width="16" height="16" fill="currentColor" class="icon arrow-right-circle" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
            </svg>
        </button>
    </section>
    <nav class="slider-navigation">
        <?php for ($i = 1; $i <= 6; $i++) : ?>
            <?php $thumbnail_url = get_theme_mod('slider_image_' . $i); ?>
            <button class="nav-button" aria-selected="false">
                <img class="thumbnail" src="<?php echo esc_url($thumbnail_url); ?>" alt="TPP IMG <?php echo $i; ?>" />
            </button>
        <?php endfor; ?>
    </nav>
  </div>
</section>

<section class="container-bannerfin">
  <h1>Ver Calendario de Cruceros</h1>
  <a href="<?php echo esc_url( get_theme_mod('bannerfin_url', 'https://tupagina.com') ); ?>" target="_blank">
    <button data-hover="Gracias!">
      <div>Ver!</div>
    </button>
  </a>
</section>

<?php get_footer();?>