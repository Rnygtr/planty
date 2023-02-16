<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

function add_admin_item_to_nav_menu( $items, $args ) {
    if (is_user_logged_in()) {
        $items .= '<li id="menu-item-285" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-285"><a href="http://localhost/planty/admin/" itemprop="url"><span itemprop="name">Admin</span></a></li>';
    }
    return $items;
}

add_filter( 'wp_nav_menu_items', 'add_admin_item_to_nav_menu', 10, 2);

