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

<?php get_footer();?>