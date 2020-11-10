<?php
add_action( 'after_setup_theme', function() {
    // Remove Gutenberg custom options
    add_theme_support( 'editor-color-palette' );
    add_theme_support( 'editor-gradient-presets' );
    add_theme_support( 'disable-custom-colors' );
    add_theme_support( 'disable-custom-gradients' );
    add_theme_support( 'disable-custom-font-sizes' );
    add_theme_support( 'custom-units', array() );

    // Add theme support for Automatic Feed Links
    add_theme_support( 'automatic-feed-links' );

    // Add theme support for Featured Images
    add_theme_support( 'post-thumbnails' );

    // Add theme support for HTML5 Semantic Markup
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

    // Add theme support for Responsive Embeds
    add_theme_support( 'responsive-embeds' );

    // Add theme support for document <title> tag
    add_theme_support( 'title-tag' );

    // Add theme support for Custom Logo
    add_theme_support( 'custom-logo', array(
        'height'      => 300,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Add theme support for Custom Header
    add_theme_support( 'custom-header', array(
        'default-image'          => '',
        'width'                  => 2560,
        'height'                 => 1440,
        'flex-width'             => false,
        'flex-height'            => true,
        'uploads'                => true,
        'random-default'         => false,
        'header-text'            => false,
        'default-text-color'     => '',
        'wp-head-callback'       => '',
        'admin-head-callback'    => '',
        'admin-preview-callback' => '',
        'video'                  => true,
        'video-active-callback'  => 'is_front_page || is_home',
    ) );

    // Default Headers
    register_default_headers( array(
        'fachada_bento' => array(
            'url'           => '%s/img/fundos/fachada-bento.jpg',
            'thumbnail_url' => '%s/img/fundos/fachada-bento.thumb.jpg',
            'description'   => __( 'Fachada Campus Bento Gonçalves', 'ifrs-extra-theme' ),
        ),
        'fachada_canoas' => array(
            'url'           => '%s/img/fundos/fachada-canoas.jpg',
            'thumbnail_url' => '%s/img/fundos/fachada-canoas.thumb.jpg',
            'description'   => __( 'Fachada Campus Canoas', 'ifrs-extra-theme' ),
        ),
        'fachada_caxias' => array(
            'url'           => '%s/img/fundos/fachada-caxias.jpg',
            'thumbnail_url' => '%s/img/fundos/fachada-caxias.thumb.jpg',
            'description'   => __( 'Fachada Campus Caxias do Sul', 'ifrs-extra-theme' ),
        ),
        'fachada_erechim' => array(
            'url'           => '%s/img/fundos/fachada-erechim.jpg',
            'thumbnail_url' => '%s/img/fundos/fachada-erechim.thumb.jpg',
            'description'   => __( 'Fachada Campus Erechim', 'ifrs-extra-theme' ),
        ),
        'fachada_farroupilha' => array(
            'url'           => '%s/img/fundos/fachada-farroupilha.jpg',
            'thumbnail_url' => '%s/img/fundos/fachada-farroupilha.thumb.jpg',
            'description'   => __( 'Fachada Campus Farroupilha', 'ifrs-extra-theme' ),
        ),
        'fachada_feliz' => array(
            'url'           => '%s/img/fundos/fachada-feliz.jpg',
            'thumbnail_url' => '%s/img/fundos/fachada-feliz.thumb.jpg',
            'description'   => __( 'Fachada Campus Feliz', 'ifrs-extra-theme' ),
        ),
        'fachada_ibiruba' => array(
            'url'           => '%s/img/fundos/fachada-ibiruba.jpg',
            'thumbnail_url' => '%s/img/fundos/fachada-ibiruba.thumb.jpg',
            'description'   => __( 'Fachada Campus Ibirubá', 'ifrs-extra-theme' ),
        ),
        'fachada_osorio' => array(
            'url'           => '%s/img/fundos/fachada-osorio.jpg',
            'thumbnail_url' => '%s/img/fundos/fachada-osorio.thumb.jpg',
            'description'   => __( 'Fachada Campus Osório', 'ifrs-extra-theme' ),
        ),
        'fachada_poa' => array(
            'url'           => '%s/img/fundos/fachada-poa.jpg',
            'thumbnail_url' => '%s/img/fundos/fachada-poa.thumb.jpg',
            'description'   => __( 'Fachada Campus Porto Alegre', 'ifrs-extra-theme' ),
        ),
        'fachada_restinga' => array(
            'url'           => '%s/img/fundos/fachada-restinga.jpg',
            'thumbnail_url' => '%s/img/fundos/fachada-restinga.thumb.jpg',
            'description'   => __( 'Fachada Campus Restinga', 'ifrs-extra-theme' ),
        ),
        'fachada_riogrande' => array(
            'url'           => '%s/img/fundos/fachada-riogrande.jpg',
            'thumbnail_url' => '%s/img/fundos/fachada-riogrande.thumb.jpg',
            'description'   => __( 'Fachada Campus Rio Grande', 'ifrs-extra-theme' ),
        ),
        'fachada_rolante' => array(
            'url'           => '%s/img/fundos/fachada-rolante.jpg',
            'thumbnail_url' => '%s/img/fundos/fachada-rolante.thumb.jpg',
            'description'   => __( 'Fachada Campus Rolante', 'ifrs-extra-theme' ),
        ),
        'fachada_sertao' => array(
            'url'           => '%s/img/fundos/fachada-sertao.jpg',
            'thumbnail_url' => '%s/img/fundos/fachada-sertao.thumb.jpg',
            'description'   => __( 'Fachada Campus Sertão', 'ifrs-extra-theme' ),
        ),
        'fachada_vacaria' => array(
            'url'           => '%s/img/fundos/fachada-vacaria.jpg',
            'thumbnail_url' => '%s/img/fundos/fachada-vacaria.thumb.jpg',
            'description'   => __( 'Fachada Campus Vacaria', 'ifrs-extra-theme' ),
        ),
        'fachada_veranopolis' => array(
            'url'           => '%s/img/fundos/fachada-veranopolis.jpg',
            'thumbnail_url' => '%s/img/fundos/fachada-veranopolis.thumb.jpg',
            'description'   => __( 'Fachada Campus Veranópolis', 'ifrs-extra-theme' ),
        ),
        'fachada_viamao' => array(
            'url'           => '%s/img/fundos/fachada-viamao.jpg',
            'thumbnail_url' => '%s/img/fundos/fachada-viamao.thumb.jpg',
            'description'   => __( 'Fachada Campus Viamão', 'ifrs-extra-theme' ),
        ),
    ) );
} );
