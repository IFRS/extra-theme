<?php
add_action( 'widgets_init', function() {
    register_sidebar(array(
        'name'          => 'Carousel',
        'id'            => 'sidebar-carousel',
        'description'   => __('Área para conteúdo em forma de slider, geralmente imagens.', 'ifrs-extra-theme'),
        'before_widget' => '<div id="%1$s" class="carousel-item %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<span class="sr-only">',
        'after_title'   => '</span>',
    ));
    register_sidebar(array(
        'name'          => 'Área Social',
        'id'            => 'sidebar-social',
        'description'   => __('Área no cabeçalho para as Redes Sociais.', 'ifrs-extra-theme'),
        'before_widget' => '<li id="%1$s" class="area-social__widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<span class="sr-only">',
        'after_title'   => '</span>',
    ));
    register_sidebar(array(
        'name'          => 'Área Destaque',
        'id'            => 'sidebar-destaques',
        'description'   => __('Área mais abaixo na página inicial, antes do rodapé, para páginas em destaque e banners.', 'ifrs-extra-theme'),
        'before_widget' => '<div id="%1$s" class="area-destaque__widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<span class="sr-only">',
        'after_title'   => '</span>',
    ));
    register_sidebar(array(
        'name'          => 'Área Rodapé',
        'id'            => 'sidebar-rodape',
        'description'   => __('Área no rodapé, ao lado do mapa do site, usualmente para colocar os contatos e endereço.', 'ifrs-extra-theme'),
        'before_widget' => '<div id="%1$s" class="area-rodape__widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="area-rodape__titulo">',
        'after_title'   => '</h2>',
    ));
} );
