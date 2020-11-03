<?php get_header(); ?>

<div class="row">
    <div class="col">
        <article class="page">
            <h2 class="page__title"><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </article>
    </div>
</div>

<?php get_footer(); ?>
