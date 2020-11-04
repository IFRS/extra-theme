<?php get_header(); ?>

<div class="row">
    <div class="col-12">
        <div class="alert alert-danger text-center" role="alert">
            <strong>Ops!</strong>
            <br>
            A p&aacute;gina que voc&ecirc; procura n&atilde;o foi encontrada.
            <br>
            Tente fazer uma busca pelo site...
            <?php get_search_form(); ?>
            ou, voc&ecirc; pode voltar para a <a href="<?php echo esc_url(home_url()); ?>" class="alert-link">p&aacute;gina inicial</a>.
        </div>
    </div>
</div>

<?php get_footer(); ?>
