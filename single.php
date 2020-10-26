<?php get_header(); ?>

<?php the_post(); ?>

<article class="single">
    <div class="row">
        <div class="col">
            <h2 class="single__title"><?php the_title(); ?></h2>
        </div>
    </div>
    <div class="row single__meta">
        <div class="col-12 col-sm">
            <p>
                <time class="single__date" datetime="<?php echo get_the_date('c'); ?>">publicado em <?php the_time('d'); ?> de <?php the_time('F'); ?> de <?php the_time('Y'); ?></time>
                <?php if (get_the_modified_time() != get_the_time()) : ?>
                    <time class="single__date">&uacute;ltima modifica&ccedil;&atilde;o em <?php the_modified_time('d'); ?> de <?php the_modified_time('F'); ?> de <?php the_modified_time('Y'); ?></time>
                <?php endif; ?>
            </p>
        </div>
        <div class="col-12 col-sm text-sm-right">
            <p>
                <?php the_category(', '); ?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?php if (has_post_thumbnail()) : ?>
                <?php $caption = get_post(get_post_thumbnail_id())->post_excerpt; ?>
                <div class="single__thumb<?php echo ($caption) ? ' wp-caption' : ''; ?>">
                    <a href="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium-large' )[0]; ?>"><?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?></a>
                    <?php if ($caption) : ?>
                        <p class="wp-caption-text"><?php echo $caption; ?></p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <?php the_content(); ?>

            <nav aria-label="Paginação da Postagem" class="text-center">
                <?php
                    wp_link_pages(array(
                        'before' => '',
                        'after'  => '',
                    ));
                ?>
            </nav>

            <?php $tags = get_the_tags(); ?>
            <?php if (!empty($tags)) : ?>
                <hr class="single__tags-separator">
                <ul class="single__tags">
                    <?php foreach ($tags as $tag) : ?>
                        <li class="single__tag"><a href="<?php echo get_tag_link( $tag->term_id ); ?>"><?php echo $tag->name; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</article>

<?php get_footer(); ?>
