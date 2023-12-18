<?php 
/**
 * The main template file.
 *
 * @link https://github.com/MattLpzZ/website-turistico
 *
 * @package Rm Graphic & Desing - MattLpzZ
 * @subpackage RmTelefericoTema
 * @since RmTelefericoTema 1.2
 */
?>
<?php
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments">
    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php
            $comments_number = get_comments_number();
            if ($comments_number === 1) {
                _e('One Comment', 'text-domain');
            } else {
                echo esc_html($comments_number) . ' ' . __('Comments', 'text-domain');
            }
            ?>
        </h2>

        <ul class="comment-list">
            <?php
            wp_list_comments(array(
                'style' => 'ul',
                'short_ping' => true,
                'avatar_size' => 40,
            ));
            ?>
        </ul>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            <nav class="comment-navigation" role="navigation">
                <div class="nav-previous"><?php previous_comments_link(__('Older Comments', 'text-domain')); ?></div>
                <div class="nav-next"><?php next_comments_link(__('Newer Comments', 'text-domain')); ?></div>
            </nav>
        <?php endif; ?>

    <?php endif; ?>

    <?php comment_form(); ?>
</div>
