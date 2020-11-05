<!doctype html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">
<head>
    <!-- Meta -->
    <meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index,follow">
    <meta name="author" content="Departamento de Comunicação do IFRS">
    <?php echo get_template_part('partials/favicons'); ?>
    <!-- Contexto Barra Brasil -->
    <meta property="creator.productor" content="http://estruturaorganizacional.dados.gov.br/id/unidade-organizacional/100918">
    <!-- OpenGraph -->
    <meta property="og:site_name" content="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
    <meta property="og:url" content="<?php echo esc_attr( wp_get_canonical_url() ); ?>">
    <meta property="og:locale" content="<?php echo esc_attr( get_locale() ); ?>">
    <meta property="og:type" content="<?php echo ( !is_front_page() && !is_home() ) ? 'article' : 'website' ?>">
    <meta property="og:title" content="<?php echo esc_attr( wp_get_document_title() ); ?>">
    <?php
        $og_image = '';

        if (has_post_thumbnail()) {
            $og_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
        } elseif (has_custom_logo()) {
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $attachment = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            $og_image = $attachment[0];
        } elseif (get_header_image())  {
            $og_image = header_image();
        } else {
            $og_image = esc_url( get_stylesheet_directory_uri() ) . '/img/ifrs.png';
        }
    ?>
    <meta property="og:image" content="<?php echo esc_attr( $og_image ); ?>">
    <!-- WP -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <a href="#main" class="sr-only">Pular para o conte&uacute;do</a>

    <?php wp_body_open(); ?>

    <?php echo get_template_part('partials/barrabrasil'); ?>

    <!-- Barra -->
    <div class="barra-social">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-6">
                    <a class="barra-social__link" href="<?php echo ifrs_get_unidade('url'); ?>">
                        <img class="barra-social__logo" src="<?php echo ifrs_get_unidade('image'); ?>" alt="<?php echo ifrs_get_unidade('title'); ?>"/>
                    </a>
                </div>
                <div class="col-12 col-sm-6">
                    <?php if (is_active_sidebar('sidebar-social')) : ?>
                        <nav aria-label="Redes Sociais">
                            <ul class="area-social">
                                <?php dynamic_sidebar('sidebar-social'); ?>
                            </ul>
                        </nav>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu -->
    <div class="container">
        <?php get_template_part('partials/menu'); ?>
    </div>

    <!-- Cabeçalho -->
    <header class="header">
    <?php if ( get_header_image() ) : ?>
        <img
            data-src="<?php header_image(); ?>"
            width="<?php echo esc_attr( absint( get_custom_header()->width ) ); ?>"
            height="<?php echo esc_attr( absint( get_custom_header()->height ) ); ?>"
            alt=""
            aria-hidden="true"
            class="lazyload header__background-image"
        />
    <?php endif; ?>
        <div class="container">
            <div class="row no-gutters align-items-end">
                <?php if (has_custom_logo()) : ?>
                    <div class="col-12 col-md-5">
                        <?php the_custom_logo(); ?>
                    </div>
                <?php endif; ?>
                <div class="col-12 col-md-7">
                    <div class="header__titulo">
                        <h1><?php bloginfo('name'); ?></h1>
                        <small><?php echo ifrs_get_unidade('title'); ?></small>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Corpo -->
    <a href="#inicio-conteudo" id="inicio-conteudo" class="sr-only">In&iacute;cio do conte&uacute;do</a>

    <main role="main" id="main" class="container">
        <?php extra_breadcrumb(); ?>
