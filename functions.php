<?php
function athena_child_enqueue_styles() {

    $parent_style = 'athena-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('athena-bootstrap', get_template_directory_uri() . '/inc/css/bootstrap.css', array(), ATHENA_VERSION);
    wp_enqueue_style('athena-bootstrap-theme', get_template_directory_uri() . '/inc/css/bootstrap-theme.min.css', array(), ATHENA_VERSION);
    wp_enqueue_style('athena-fontawesome', get_template_directory_uri() . '/inc/css/font-awesome.css', array(), ATHENA_VERSION);
    wp_enqueue_style('athena-main-style', get_template_directory_uri() . '/inc/css/style.css', array(), ATHENA_VERSION);
    wp_enqueue_style('athena-camera-style', get_template_directory_uri() . '/inc/css/camera.css', array(), ATHENA_VERSION);
    wp_enqueue_style('athena-animations', get_template_directory_uri() . '/inc/css/animate.css', array(), ATHENA_VERSION);
    wp_enqueue_style('athena-slicknav', get_template_directory_uri() . '/inc/css/slicknav.min.css', array(), ATHENA_VERSION);
    wp_enqueue_style('athena-template', get_template_directory_uri() . '/inc/css/temps/' . esc_attr(get_theme_mod('theme_color', 'green')) . '.css', array(), ATHENA_VERSION);

    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );

       wp_enqueue_style( 'itel-style',
        get_stylesheet_directory_uri() . '/itel.css',
        array( $parent_style ),
        wp_get_theme()->get('Version') // we add itel's css so that it would show up but she can't override my css codes
    );
}
add_action( 'wp_enqueue_scripts', 'athena_child_enqueue_styles' );
?>