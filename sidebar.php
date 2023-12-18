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
 <div class="aside">
	<?php if (is_active_sidebar('aside-widget-area')) : ?>
		<?php dynamic_sidebar('aside-widget-area'); ?>
	<?php endif; ?>
</div>



