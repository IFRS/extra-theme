<?php if (have_posts()) : ?>
    <div class="row">
        <div class="col">
            <h2>
            <?php
                if (is_home()) {
                    echo get_the_title(get_option( 'page_for_posts' ));
                } elseif (is_category()) {
                    printf('%s&nbsp;&quot;%s&quot;', __('Categoria', 'ifrs-extra-theme'), single_cat_title('', false));
                } elseif (is_tag()) {
                    printf('%s&nbsp;&quot;%s&quot;', __('Tag', 'ifrs-extra-theme'), single_tag_title('', false));
                } elseif (is_author()) {
                    printf('%s&nbsp;&quot;%s&quot;', __('Autor', 'ifrs-extra-theme'), get_the_author_meta('display_name'));
                } else {
                    echo 'Posts';
                }
            ?>
            </h2>
        </div>
    </div>
    <div class="row">
    <?php while (have_posts()) : the_post(); ?>
        <div class="col-12 col-sm-6 col-md-4">
            <?php get_template_part('partials/post'); ?>
        </div>
    <?php endwhile; ?>
    </div>

    <div class="row mt-3">
        <div class="col">
            <?php extra_pagination(); ?>
        </div>
    </div>
<?php endif; ?>
