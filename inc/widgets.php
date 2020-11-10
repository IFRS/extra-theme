<?php
add_action( 'widgets_init', function() {
    /* register_sidebar(array(
        'name'          => __('Carousel', 'ifrs-extra-theme'),
        'id'            => 'sidebar-carousel',
        'description'   => __('Área para conteúdo em forma de slider, geralmente imagens.', 'ifrs-extra-theme'),
        'before_widget' => '<div id="%1$s" class="carousel-item %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<span class="sr-only">',
        'after_title'   => '</span>',
    )); */
    register_sidebar( array(
        'name'          => __('Área Social', 'ifrs-extra-theme'),
        'id'            => 'sidebar-social',
        'description'   => __('Área no cabeçalho para as Redes Sociais. Tamanho recomendado de 32x32 px.', 'ifrs-extra-theme'),
        'before_widget' => '<li id="%1$s" class="area-social__widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<span class="sr-only">',
        'after_title'   => '</span>',
    ) );
    register_sidebar( array(
        'name'          => __('Área Destaques', 'ifrs-extra-theme'),
        'id'            => 'sidebar-destaques',
        'description'   => __('Área abaixo dos posts na página inicial, antes do rodapé, para uso geral.', 'ifrs-extra-theme'),
        'before_widget' => '<div id="%1$s" class="col-12 col-md-6 col-lg-4 widget-destaque %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __('Área Banners', 'ifrs-extra-theme'),
        'id'            => 'sidebar-banners',
        'description'   => __('Área acima do rodapé, para banners que aparecem em todas as páginas. Tamanho recomendado de 350x200 px.', 'ifrs-extra-theme'),
        'before_widget' => '<div id="%1$s" class="area-banners__widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<span class="sr-only">',
        'after_title'   => '</span>',
    ) );
    register_sidebar( array(
        'name'          => __('Área Rodapé', 'ifrs-extra-theme'),
        'id'            => 'sidebar-rodape',
        'description'   => __('Área no rodapé, ao lado do Mapa do Site, usualmente para colocar os contatos e endereço.', 'ifrs-extra-theme'),
        'before_widget' => '<div id="%1$s" class="area-rodape__widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="area-rodape__titulo">',
        'after_title'   => '</h2>',
    ) );
} );
