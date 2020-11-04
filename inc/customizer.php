<?php
    add_action('customize_register', function($wp_customize) {
        $wp_customize->add_setting( 'ifrs_unidade' , array(
            'default'           => 'reitoria',
            'transport'         => 'refresh',
            'sanitize_callback' => function($input, $setting) {
                // Ensure input is a slug.
                $input = sanitize_key( $input );

                // Get list of choices from the control associated with the setting.
                $choices = $setting->manager->get_control( $setting->id )->choices;

                // If the input is a valid key, return it; otherwise, return the default.
                return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
            }
        ) );
        $wp_customize->add_control(
            'ifrs_unidade_control',
            array(
                'label'       => __( 'Unidade', 'ifrs-extra-theme' ),
                'description' => __( '', 'ifrs-extra-theme' ),
                'section'     => 'title_tagline',
                'settings'    => 'ifrs_unidade',
                'priority'    => 0,
                'type'        => 'select',
                'choices'     => ifrs_get_unidade_options(),
            )
        );
    });

    function ifrs_get_unidades() {
        return array(
            'reitoria' => array(
                'option' => 'Geral',
                'title'  => 'Instituto Federal do Rio Grande do Sul',
                'url'    => 'https://ifrs.edu.br/',
                'image'  => get_template_directory_uri().'/img/marcas/ifrs.png',
            ),
            'alvorada' => array(
                'option' => 'Alvorada',
                'title'  => 'Campus Alvorada',
                'url'    => 'https://ifrs.edu.br/alvorada',
                'image'  => get_template_directory_uri().'/img/marcas/alvorada.png',
            ),
            'bento' => array(
                'option' => 'Bento Gonçalves',
                'title'  => 'Campus Bento Gonçalves',
                'url'    => 'https://ifrs.edu.br/bento',
                'image'  => get_template_directory_uri().'/img/marcas/bento.png',
            ),
            'canoas' => array(
                'option' => 'Canoas',
                'title'  => 'Campus Canoas',
                'url'    => 'https://ifrs.edu.br/canoas',
                'image'  => get_template_directory_uri().'/img/marcas/canoas.png',
            ),
            'caxias' => array(
                'option' => 'Caxias do Sul',
                'title'  => 'Campus Caxias do Sul',
                'url'    => 'https://ifrs.edu.br/caxias',
                'image'  => get_template_directory_uri().'/img/marcas/caxias.png',
            ),
            'erechim' => array(
                'option' => 'Erechim',
                'title'  => 'Campus Erechim',
                'url'    => 'https://ifrs.edu.br/erechim',
                'image'  => get_template_directory_uri().'/img/marcas/erechim.png',
            ),
            'farroupilha' => array(
                'option' => 'Farroupilha',
                'title'  => 'Campus Farroupilha',
                'url'    => 'https://ifrs.edu.br/farroupilha',
                'image'  => get_template_directory_uri().'/img/marcas/farroupilha.png',
            ),
            'feliz' => array(
                'option' => 'Feliz',
                'title'  => 'Campus Feliz',
                'url'    => 'https://ifrs.edu.br/feliz',
                'image'  => get_template_directory_uri().'/img/marcas/feliz.png',
            ),
            'ibiruba' => array(
                'option' => 'Ibirubá',
                'title'  => 'Campus Ibirubá',
                'url'    => 'https://ifrs.edu.br/ibiruba',
                'image'  => get_template_directory_uri().'/img/marcas/ibiruba.png',
            ),
            'osorio' => array(
                'option' => 'Osório',
                'title'  => 'Campus Osório',
                'url'    => 'https://ifrs.edu.br/osorio',
                'image'  => get_template_directory_uri().'/img/marcas/osorio.png',
            ),
            'poa' => array(
                'option' => 'Porto Alegre',
                'title'  => 'Campus Porto Alegre',
                'url'    => 'https://poa.ifrs.edu.br/',
                'image'  => get_template_directory_uri().'/img/marcas/poa.png',
            ),
            'restinga' => array(
                'option' => 'Restinga',
                'title'  => 'Campus Restinga',
                'url'    => 'https://ifrs.edu.br/restinga',
                'image'  => get_template_directory_uri().'/img/marcas/restinga.png',
            ),
            'riogrande' => array(
                'option' => 'Rio Grande',
                'title'  => 'Campus Rio Grande',
                'url'    => 'https://ifrs.edu.br/riogrande',
                'image'  => get_template_directory_uri().'/img/marcas/riogrande.png',
            ),
            'rolante' => array(
                'option' => 'Rolante',
                'title'  => 'Campus Rolante',
                'url'    => 'https://ifrs.edu.br/rolante',
                'image'  => get_template_directory_uri().'/img/marcas/rolante.png',
            ),
            'sertao' => array(
                'option' => 'Sertão',
                'title'  => 'Campus Sertão',
                'url'    => 'https://ifrs.edu.br/sertao',
                'image'  => get_template_directory_uri().'/img/marcas/sertao.png',
            ),
            'vacaria' => array(
                'option' => 'Vacaria',
                'title'  => 'Campus Vacaria',
                'url'    => 'https://ifrs.edu.br/vacaria',
                'image'  => get_template_directory_uri().'/img/marcas/vacaria.png',
            ),
            'veranopolis' => array(
                'option' => 'Veranópolis',
                'title'  => 'Campus Veranópolis',
                'url'    => 'https://ifrs.edu.br/veranopolis',
                'image'  => get_template_directory_uri().'/img/marcas/veranopolis.png',
            ),
            'viamao' => array(
                'option' => 'Viamão',
                'title'  => 'Campus Viamão',
                'url'    => 'https://ifrs.edu.br/viamao',
                'image'  => get_template_directory_uri().'/img/marcas/viamao.png',
            ),
        );
    }

    function ifrs_get_unidade_options() {
        $unidades = ifrs_get_unidades();
        $options = array();
        foreach ($unidades as $key => $unidade) {
            $options[$key] = $unidade['option'];
        }
        return $options;
    }

    function ifrs_get_unidade($prop) {
        $unidade = get_theme_mod('ifrs_unidade');
        $data = null;

        if ($prop) {
            $data = ifrs_get_unidades()[$unidade][$prop];
        } else {
            $data = ifrs_get_unidades()[$unidade];
        }

        return $data;
    }
?>
