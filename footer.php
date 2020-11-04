</main>

<a href="#fim-conteudo" id="fim-conteudo" class="sr-only">Fim do conte&uacute;do</a>

<!-- Rodapé -->
<footer>
<?php if (is_active_sidebar('sidebar-banners')) : ?>
    <div class="area-banners">
        <div class="container">
            <div class="area-banners__grid">
                <?php dynamic_sidebar('sidebar-banners'); ?>
            </div>
        </div>
    </div>
<?php endif; ?>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col">
                <?php if (has_nav_menu('principal')) : ?>
                    <nav id="mapa-site" class="site-map" aria-labelledby="mapa-site-titulo">
                        <h2 id="mapa-site-titulo" class="site-map__title"><?php _e('Mapa do Site', 'ifrs-extra-theme'); ?></h2>
                        <?php
                            wp_nav_menu( array(
                                'theme_location'    => 'principal',
                                'depth'             => 2,
                                'container'         => false,
                                'container_class'   => false,
                                'container_id'      => false,
                                'menu_id'           => false,
                                'menu_class'        => 'site-map__menu',
                            ));
                        ?>
                    </nav>
                <?php endif; ?>
                </div>
                <div class="col-12 col-md-4">
                    <div class="area-rodape">
                        <?php if (!dynamic_sidebar('sidebar-rodape')) : endif; ?>
                        <div class="creditos">
                            <!-- Wordpress -->
                            <a href="https://br.wordpress.org/" target="_blank" rel="noopener noreferrer" data-toggle="tooltip" data-placement="bottom" title="Desenvolvido com Wordpress">
                                <img data-src="<?php echo esc_url(get_template_directory_uri()); ?>/img/creditos-wordpress.png" alt="Desenvolvido com Wordpress (abre uma nova p&aacute;gina)" class="lazyload"/>
                            </a>
                            <!-- Código-fonte -->
                            <a href="https://github.com/IFRS/extra-theme/" target="_blank" rel="noopener noreferrer" data-toggle="tooltip" data-placement="bottom" title="C&oacute;digo-fonte deste tema sob a licen&ccedil;a GPLv3">
                                <img data-src="<?php echo esc_url(get_template_directory_uri()); ?>/img/creditos-git.png" alt="C&oacute;digo-fonte deste tema sob a licen&ccedil;a GPLv3 (abre uma nova p&aacute;gina)" class="lazyload"/>
                            </a>
                            <!-- Creative Commons -->
                            <a href="https://creativecommons.org/licenses/by-nc-sa/4.0/deed.pt_BR" target="_blank" rel="noopener noreferrer license" data-toggle="tooltip" data-placement="bottom" title="M&iacute;dia licenciada sob a Licen&ccedil;a Creative Commons Atribui&ccedil;&atilde;o-N&atilde;oComercial-CompartilhaIgual 4.0 Internacional">
                                <img data-src="<?php echo esc_url(get_template_directory_uri()); ?>/img/creditos-cc-by-nc-sa.png" alt="M&iacute;dia licenciada sob a Licen&ccedil;a Creative Commons Atribui&ccedil;&atilde;o-N&atilde;oComercial-CompartilhaIgual 4.0 Internacional (abre uma nova p&aacute;gina)" class="lazyload"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portal">
        <a href="https://ifrs.edu.br/" data-toggle="tooltip" data-placement="top" title="Portal do IFRS">
            <img data-src="<?php echo esc_url(get_template_directory_uri()); ?>/img/ifrs.png" alt="Portal do IFRS" class="lazyload img-fluid"/>
        </a>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
