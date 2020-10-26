<?php get_header(); ?>

<?php if (get_option('show_on_front') === 'page') : ?>
    <?php the_post(); ?>

    <h2><?php the_title(); ?></h2>

    <?php the_content(); ?>
<?php endif; ?>

<?php get_footer(); ?>
