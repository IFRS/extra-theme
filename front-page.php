<?php get_header(); ?>

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
