<article class="post-destaque">
    <div class="row no-gutters">
        <div class="col-12 col-md-5 order-2 order-md-1">
            <div class="post-destaque__painel">
                <h2 class="post-destaque__titulo"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <time class="post-destaque__data" datetime="<?php echo get_the_date('c'); ?>"><?php the_time('d.m.Y'); ?></time>
                <hr class="post-destaque__separador">
                <div class="post-destaque__resumo"><?php the_excerpt(); ?></div>
            </div>
            <div class="carousel-frontpage-controls">
                <a class="carousel-frontpage-control-prev btn btn-light" href="#carousel-frontpage" role="button" data-slide="prev">
                    <span class="sr-only">Post Anterior</span>
                </a>
                <a class="carousel-frontpage-control-next btn btn-light" href="#carousel-frontpage" role="button" data-slide="next">
                    <span class="sr-only">Pr&oacute;ximo Post</span>
                </a>
            </div>
        </div>
    <?php if (has_post_thumbnail()) : ?>
        <div class="col-12 col-md-7 order-1 order-md-2">
            <?php the_post_thumbnail('medium_large', array('class' => 'img-fluid')); ?>
        </div>
    <?php endif; ?>
    </div>
</article>
