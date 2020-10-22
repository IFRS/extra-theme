<?php get_header(); ?>

<?php the_post(); ?>

<?php if (get_option('show_on_front') === 'page') : ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
<?php endif; ?>

<?php get_footer(); ?>
