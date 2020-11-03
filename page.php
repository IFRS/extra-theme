<?php get_header(); ?>

<?php the_post(); ?>

<?php
    $children = get_pages(array(
        'sort_column' => 'menu_order',
        'parent' => get_the_ID(),
    ));
?>

<div class="row">
    <div class="col">
        <article class="page">
            <h2 class="page__title"><?php the_title(); ?></h2>

            <?php if ($children && count($children) > 0) : ?>
                <nav class="subpages nav" aria-label="Subpáginas">
                    <?php foreach ($children as $child): ?>
                        <a class="nav-link" href="<?php echo get_page_link($child->ID); ?>"><?php echo $child->post_title; ?></a>
                    <?php endforeach; ?>
                </nav>
            <?php endif; ?>

            <?php the_content(); ?>
        </article>
    </div>
</div>

<?php get_footer(); ?>
