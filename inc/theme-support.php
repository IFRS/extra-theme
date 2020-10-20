<?php
add_action( 'after_setup_theme', function() {
    // Add theme support for Automatic Feed Links
    add_theme_support( 'automatic-feed-links' );

    // Add theme support for Featured Images
    add_theme_support( 'post-thumbnails' );

    // Add theme support for HTML5 Semantic Markup
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

    // Add theme support for document Title tag
    add_theme_support( 'title-tag' );

    // Add theme support for Custom Logo
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Add theme support for Custom Header
    add_theme_support( 'custom-header', array(
        'default-image'          => '',
        'width'                  => 0,
        'height'                 => 0,
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
        'video-active-callback'  => '',
    ) );

    // Default Headers
    register_default_headers( array(
        'alvorada' => array(
            'description' => __( 'Campus Alvorada', 'ifrs-extra-theme' ),
            'url' => '/img/header-alvorada.png',
            'thumbnail_url' => '/img/header-alvorada.thumb.png',
        )
    ) );
} );
