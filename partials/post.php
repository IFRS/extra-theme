<article class="post">
    <h3 class="post__titulo"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <time class="post__data" datetime="<?php echo get_the_date('c'); ?>"><?php the_time('d.m.Y'); ?></time>
    &centerdot;
    <?php the_category(', '); ?>
    <div class="post__resumo">
        <?php the_excerpt(); ?>
    </div>
    <hr class="post__separador">
    <div class="post__meta">
    <?php if (comments_open()) : ?>
        <span class="post__comentarios">
            <?php echo get_comments_number(); ?>
        </span>
    <?php endif; ?>
    </div>
</article>
