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

<!--------------------------------------------------------------------------------------------------------------------------------------------->
<footer class="footer">
    <div class="content">
        <div class="top">
            <div class="logo-details">
                <!--<img class="iconimg" src="<?php bloginfo('template_url')?>/assets/images/TELEPOP INCORecurso 3.png"></i>-->
                <span class="logo_name">Teleferico Puerto Plata</span>
            </div>
            <div class="media-icons">
                <?php
                $redes_sociales = array('facebook', 'twitter', 'instagram', 'linkedin', 'youtube');

                foreach ($redes_sociales as $red) {
                    $url = esc_url(get_theme_mod("opciones_redes_sociales[{$red}_url]"));
                    if (!empty($url)) {
                        echo "<a href='{$url}' target='_blank'><i class='fab fa-{$red}'></i></a>";
                    }
                }
                ?>
            </div>

        </div>

        <div class="link-boxes">
            <!-- Agrega aquí más cajas (box) con enlaces si es necesario -->
            <ul class="box">
                <li class="link_name">Sobre Nosotros</li>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu_nav_footer', // Utiliza la ubicación del menú que registraste
                    'container' => false, // No se utiliza un contenedor
                    'menu_class' => 'box', // Clase para la lista ul
                    'items_wrap' => '%3$s', // Utiliza %3$s para envolver los elementos li en el ul
                ));
                ?>
            </ul>

            <ul class="box">
                <li class="link_name">Actividades</li>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu_nav_footer_2', // Utiliza la ubicación del menú que registraste
                    'container' => false, // No se utiliza un contenedor
                    'menu_class' => 'box', // Clase para la lista ul
                    'items_wrap' => '%3$s', // Utiliza %3$s para envolver los elementos li en el ul
                ));
                ?>
            </ul>

            <ul class="box input-box">
                <li class="link_name">Subscribe</li>
                <li>
                    <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                        <input type="text" name="subscriber_email" placeholder="Enter your email" required>
                        <input type="hidden" name="action" value="handle_subscription">
                        <input type="submit" value="Subscribe">
                    </form>
                </li>
            </ul>
        </div>
    </div>

    <!-- ... AREA DE DATOS INSTITUCIONALES ... -->

    <div class="bottom-details">
        <div class="bottom_text">
            <span class="copyright_text">Copyright &#169; 2023 <a href="<?php echo esc_url(get_theme_mod('enlace_copyright', '#')); ?>" target="_blank" >Patronato Teleferico Puerto Plata</a> All rights reserved, <a href="https://www.instagram.com/mattlpzz/" target="_blank"> Designed by MattlpzZ</a></span>
            <span class="policy_terms">
                <a href="<?php echo esc_url(get_theme_mod('enlace_privacy_policy', '#')); ?>" target="_blank">Privacy policy</a>
                <a href="<?php echo esc_url(get_theme_mod('enlace_terms_condition', '#')); ?>" target="_blank">Terms & condition</a>
            </span>
        </div>
    </div>
</footer>




    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/archivo.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/scroll-to-top.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/extrenaljq.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
    
    
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v18.0" nonce="jUmk0tEs"></script>



</body>
</html>