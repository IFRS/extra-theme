<?php if (is_active_sidebar('sidebar-carousel')) : ?>
    <div id="carousel-home" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php dynamic_sidebar('sidebar-carousel'); ?>
        </div>
        <a class="carousel-control-prev" href="#carousel-home" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"><?php _e('Anterior', 'ifrs-extra-theme'); ?></span>
        </a>
        <a class="carousel-control-next" href="#carousel-home" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"><?php _e('Próximo', 'ifrs-extra-theme'); ?></span>
        </a>
    </div>
<?php endif; ?>
