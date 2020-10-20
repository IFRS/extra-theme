<nav class="navbar navbar-expand-lg navbar-light bg-light collapse show">
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar-principal" aria-controls="navbar-principal" aria-expanded="false"><span class="navbar-toggler-icon" aria-hidden="true"></span><span class="sr-only">Esconder/Mostrar</span>&nbsp;Menu</button>
    <?php
        wp_nav_menu(
            array(
                'menu_class'      => 'navbar-nav mr-auto menu-principal',
                'menu_id'         => false,
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'navbar-principal',
                'depth'           => 2,
                'theme_location'  => 'principal',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            )
        );
    ?>
</nav>
