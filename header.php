<!doctype html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index,follow">
    <meta name="author" content="Departamento de Comunicação do IFRS">
    <!-- Title -->
    <title><?php echo get_template_part('partials/title'); ?></title>
    <!-- Favicons -->
    <?php echo get_template_part('partials/favicons'); ?>
    <!-- Contexto Barra Brasil -->
    <meta property="creator.productor" content="http://estruturaorganizacional.dados.gov.br/id/unidade-organizacional/100918">
    <!-- OpenGraph -->
    <meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>">
    <meta property="og:url" content="<?php echo esc_attr( wp_get_canonical_url() ); ?>">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:type" content="<?php echo (!is_front_page() && !is_home()) ? 'article' : 'website' ?>">
    <meta property="og:title" content="<?php echo esc_attr( get_template_part('partials/title') ); ?>">
    <meta property="og:image" content="<?php has_post_thumbnail() ? esc_attr( the_post_thumbnail_url('full') ) : esc_attr( header_image() ); ?>">
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo esc_url( wp_get_canonical_url() ); ?>">
    <!-- Feed -->
    <link rel="alternate" type="application/rss+xml" title="<?php echo esc_attr( get_bloginfo('name') ); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
    <!-- WP -->
    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
    <a href="#main" class="sr-only">Pular para o conte&uacute;do</a>

    <?php echo get_template_part('partials/barrabrasil'); ?>

    <!-- Barra -->
    <div class="barra-social">
        <div class="container">
            <div class="col-12 col-sm-6"></div>
            <div class="col-12 col-sm-6">
                <?php if (is_active_sidebar('sidebar-social')) : ?>
                    <nav>
                        <ul class="area-social">
                            <?php if (!dynamic_sidebar('sidebar-social')) : endif; ?>
                        </ul>
                    </nav>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Menu -->
    <div class="container">
        <?php get_template_part('partials/menu'); ?>
    </div>

    <!-- Cabeçalho -->
    <header>
        <div class="container">
            <?php if (has_custom_logo()) : ?>
                <div class="col-12 col-md-5">
                    <?php the_custom_logo(); ?>
                </div>
            <?php endif; ?>
            <div class="col">
                <h1><?php bloginfo('name'); ?></h1>
            </div>
        </div>
    </header>

    <!-- Corpo -->
    <a href="#inicio-conteudo" id="inicio-conteudo" class="sr-only">In&iacute;cio do conte&uacute;do</a>

    <main role="main" id="main">
