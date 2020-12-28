<?php
// aqui creo mi menu

if ( function_exists('register_nav_menus')) {
    register_nav_menus (array('superior' => 'Menu principal superior'));
}

//Aqui creo una clase para las <a>

add_filter( 'nav_menu_link_attributes', 'clase_menu_invento', 10, 3);

function clase_menu_invento ($atts, $item, $args) {
    $class = 'nav-link';
    $atts['class'] = $class;
    return $atts;
}

// Agregando imagenes destacadas

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    
    
// Agregando sidebars

add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s" my-3>',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
 }

?> 