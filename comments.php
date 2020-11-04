<?php if (post_password_required()) return; ?>

<div id="comments" class="comments <?php echo get_option( 'show_avatars' ) ? 'show-avatars' : ''; ?>">
    <?php if (have_comments()) : ?>
        <h2 class="comments__title">
            <?php
                printf(
                    _nx( '%s Coment&aacute;rio', '%s Coment&aacute;rios', get_comments_number(), 'comments title', 'ifrs-extra-theme' ),
                    number_format_i18n( get_comments_number() )
                );
            ?>
        </h2>
        <?php
            wp_list_comments(
                array(
                    'avatar_size' => 60,
                    'style'       => 'div',
                    'short_ping'  => true,
                )
            );
        ?>

        <?php the_comments_pagination(array(
            'type' => 'list',
        )); ?>

        <?php if ( ! comments_open() ) : ?>
            <p class="comments__closed"><?php _e('Os coment&aacute;rios est&atilde;o fechados!', 'ifrs-extra-theme'); ?></p>
        <?php endif; ?>
    <?php endif; ?>

    <?php
    comment_form(
        array(
            'title_reply' => __('Deixe um coment&aacute;rio', 'ifrs-extra-theme'),
            'format'      => 'html5',
        )
    );
    ?>
</div>
