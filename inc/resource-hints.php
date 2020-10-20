<?php
add_action('wp_head', function() {
    if (!WP_DEBUG) :
?>
    <link rel="preconnect" href="https://vlibras.gov.br">
    <link rel="preconnect" href="https://barra.brasil.gov.br">
<?php
    endif;
}, 0);
