<?php
/**
 * Limit max menu depth in admin panel to 3
 */
add_action( 'admin_enqueue_scripts', function( $hook ) {
    if ( $hook != 'nav-menus.php' ) return;

    // override default value right after 'nav-menu' JS
    wp_add_inline_script( 'nav-menu', 'wpNavMenu.options.globalMaxDepth = 2;', 'after' );
} );
