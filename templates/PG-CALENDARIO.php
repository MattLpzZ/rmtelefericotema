<?php /* Template Name: PG CALENDARIO*/ ?>

<?php get_header();?>

<section id="water-slider">
    <div class="containerpg">
        <h3><?php echo get_theme_mod('water_slider_text', '“Calendario Cruceros”'); ?></h3>
    </div>
</section>

<br>
<br>
<br>
<section class="bodyman">
<article>
<div id="calendar"></div>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
</article>
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
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/pg-calendar.js"></script>

<?php get_footer();?>