<article class="post">
    <h3 class="post__titulo"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
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
        <span class="post__data">
            <?php the_date('d/m/Y'); ?>
        </span>
    </div>
</article>
