<?php get_header(); ?>

<div class="row">
    <div class="col-12 col-md-8">
        <h2 class="search-results__title"><?php printf('Resultados da busca por &quot;%s&quot;', get_search_query()); ?></h2>
    </div>
    <div class="col-12 col-md-4 d-flex align-items-center justify-content-center">
        <?php get_search_form(); ?>
    </div>
</div>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="row search-result">
        <div class="col-12">
            <h3 class="search-result__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php the_excerpt(); ?>
        </div>
    </div>
    <?php endwhile; ?>
<?php else : ?>
    <div class="alert alert-warning text-center">
        <?php _e('Nenhum resultado encontrado.'); ?>
    </div>
<?php endif; ?>

<?php the_posts_navigation(array('next_text' => 'Resultados anteriores', 'prev_text' => 'Mais resultados', 'screen_reader_text' => ' ')); ?>

<?php get_footer(); ?>
