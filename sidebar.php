<?php 

/**
 * The sidebar containing the main widget area.
 *
 * @link https://github.com/MattLpzZ/website-turistico
 *
 * @package Rm Graphic & Desing - MattLpzZ
 * @subpackage RmTelefericoTema
 * @since RmTelefericoTema 1.02
 */


 ?>
<aside>
    <div class="container-aside">
        <?php if (is_active_sidebar('custom-sidebar')) : ?>
            <?php dynamic_sidebar('custom-sidebar'); ?>
        <?php else : ?>

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




