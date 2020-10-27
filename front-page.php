<?php get_header(); ?>

<?php
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => -1,
        'post__in'       => get_option('sticky_posts'),
    );

    $sticky = new WP_Query($args);
?>

<?php if ($sticky->have_posts()) : ?>
    <div id="carousel-frontpage" class="carousel slide carousel-fade carousel-frontpage" data-interval="false">
        <div class="carousel-inner">
        <?php while ($sticky->have_posts()) : $sticky->the_post(); ?>
            <div class="carousel-item<?php echo ($sticky->current_post == 0) ? ' active' : ''; ?>">
                <article class="post-carousel">
                    <div class="row no-gutters">
                        <div class="col-12 col-md-5 order-2 order-md-1">
                            <div class="post-carousel__painel">
                                <h3 class="post-carousel__titulo"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <time class="post-carousel__data" datetime="<?php echo get_the_date('c'); ?>"><?php the_time('d.m.Y'); ?></time>
                                <hr class="post-carousel__separador">
                                <div class="post-carousel__resumo"><?php the_excerpt(); ?></div>
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
            </div>
        <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>

<?php if (get_option('show_on_front') === 'page') : ?>
    <?php the_post(); ?>

    <div class="row">
        <div class="col">
            <article>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </article>
        </div>
    </div>
<?php endif; ?>

<?php
    global $wp_query;

    $args = array(
        'post_type' => 'post',
        'posts_per_page' => (get_option('show_on_front') === 'page') ? 3 : get_option('posts_per_page'),
        'ignore_sticky_posts' => true,
    );

    $query = ((get_option('show_on_front') === 'page')) ? new WP_Query($args) : $wp_query;
?>
<?php if ($query->have_posts()) : ?>
    <div class="row">
        <div class="col">
            <h2>Posts</h2>
        </div>
    </div>
    <div class="row">
    <?php while ($query->have_posts()) : $query->the_post(); ?>
        <div class="col-12 col-sm-6 col-md-4">
            <?php get_template_part('partials/post'); ?>
        </div>
    <?php endwhile; ?>
    </div>

    <div class="row mt-3">
        <div class="col">
        <?php if (get_option('show_on_front') === 'page') : ?>
            <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="float-right post__button"><?php _e('Todas as Postagens', 'ifrs-extra-theme'); ?></a>
        <?php else : ?>
            <?php extra_pagination(); ?>
        <?php endif; ?>
        </div>
    </div>
<?php endif; ?>

<?php get_footer(); ?>
