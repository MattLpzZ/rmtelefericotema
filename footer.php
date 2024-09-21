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
?>

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

<!--------------------------------------------------------------------------------------------------------------------------------------------->
<footer class="footer">
    <div class="footer-row">
        <div class="footer-col">
            <h4>Info</h4>
            <?php
            // Agregar menú dinámico para "Info"
            wp_nav_menu(array(
                'theme_location' => 'footer_menu_info',
                'menu_class'     => 'links',
                'container'      => false,
            ));
            ?>
        </div>

        <div class="footer-col">
            <h4>Explore</h4>
            <?php
            // Agregar menú dinámico para "Explore"
            wp_nav_menu(array(
                'theme_location' => 'footer_menu_explore',
                'menu_class'     => 'links',
                'container'      => false,
            ));
            ?>
        </div>

        <div class="footer-col">
            <h4>Legal</h4>
            <?php
            // Agregar menú dinámico para "Legal"
            wp_nav_menu(array(
                'theme_location' => 'footer_menu_legal',
                'menu_class'     => 'links',
                'container'      => false,
            ));
            ?>
        </div>

        <div class="footer-col">
            <h4>Newsletter</h4>
            <p>
                Subscribe to our newsletter for a weekly dose
                of news, updates, helpful tips, and
                exclusive offers.
            </p>
            <form action="#">
                <input type="text" placeholder="Your email" required>
                <button type="submit">SUBSCRIBE</button>
            </form>
            <div class="icons">
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-linkedin"></i>
                <i class="fa-brands fa-github"></i>
            </div>
        </div>
    </div>

    <div class="bottom-details">
        <div class="bottom_text">
            <span class="copyright_text">Copyright &#169; 2023 
                <a href="<?php echo esc_url(get_theme_mod('enlace_copyright', '#')); ?>" target="_blank">
                    Patronato Teleferico Puerto Plata
                </a> 
                All rights reserved, 
                <a href="https://www.instagram.com/mattlpzz/" target="_blank">Designed by RM INNOVATION GROUP</a>
            </span>
            <span class="policy_terms">
                <a href="<?php echo esc_url(get_theme_mod('enlace_privacy_policy', '#')); ?>" target="_blank">Privacy policy</a>
                <a href="<?php echo esc_url(get_theme_mod('enlace_terms_condition', '#')); ?>" target="_blank">Terms & condition</a>
            </span>
        </div>
    </div>
</footer>

<!-- Enlaces a archivos JS -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/nav.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/pagination.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/section-galery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/calendar.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bannerfin.js"></script>


<?php wp_footer(); ?>
</body>
</html>