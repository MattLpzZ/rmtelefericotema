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



