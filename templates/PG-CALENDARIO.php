<?php /* Template Name: PG CALENDARIO*/ ?>

<?php get_header();?>

<section id="water-slider">
    <div class="containerpg">
        <h3><?php echo get_theme_mod('water_slider_text', '“Calendario Cruceros”'); ?></h3>
    </div>
</section>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9171958648587965"
     crossorigin="anonymous"></script>
<!-- BANER ADS -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-9171958648587965"
     data-ad-slot="6662661673"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<br>
<br>
<br>
<section class="bodyman">
<article>
<div id="calendar"></div>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
</article>

<?php get_sidebar();?>


<script src="<?php echo get_template_directory_uri(); ?>/assets/js/pg-calendar.js"></script>

<?php get_footer();?>
