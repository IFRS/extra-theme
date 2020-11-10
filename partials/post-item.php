<article class="post-item">
    <h3 class="post-item__titulo"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <div class="post-item__meta">
        <time class="post-item__data" datetime="<?php echo get_the_date('c'); ?>"><?php the_time('d.m.Y'); ?></time>
        &centerdot;
        <?php the_category(', '); ?>
    </div>
    <div class="post-item__resumo">
        <?php the_excerpt(); ?>
    </div>
    <?php if (comments_open()) : ?>
        <hr class="post-item__separador">
        <div class="post-item__info">
            <span class="post-item__comentarios">
                <?php echo get_comments_number(); ?>
            </span>
        </div>
    <?php endif; ?>
</article>
