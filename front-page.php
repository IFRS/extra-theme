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
                <?php get_template_part('partials/post-destaque'); ?>
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
        'posts_per_page' => 3,
        'ignore_sticky_posts' => true,
        'post__not_in' => get_option('sticky_posts'),
    );

    $query = ((get_option('show_on_front') === 'page')) ? new WP_Query($args) : $wp_query;
?>
<?php if ($query->have_posts()) : ?>
    <div class="row">
        <div class="col">
            <h2><?php _e('Posts', 'ifrs-extra-theme'); ?></h2>
        </div>
    </div>
    <div class="row">
    <?php while ($query->have_posts()) : $query->the_post(); ?>
        <div class="col-12 col-sm-6 col-md-4">
            <?php get_template_part('partials/post'); ?>
        </div>
    <?php endwhile; ?>
    </div>

    <div class="row my-3">
        <div class="col">
        <?php if (get_option('show_on_front') === 'page') : ?>
            <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="float-right home-button"><?php _e('Todas as Postagens', 'ifrs-extra-theme'); ?></a>
        <?php else : ?>
            <?php extra_pagination(); ?>
        <?php endif; ?>
        </div>
    </div>
<?php endif; ?>

<?php if (is_active_sidebar('sidebar-destaques')) : ?>
    <section class="row">
        <?php dynamic_sidebar('sidebar-destaques'); ?>
    </section>
<?php endif; ?>

<?php get_footer(); ?>
