<?php 



function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


add_filter( 'widget_tag_cloud_args', 'jmw_exclude_tag_from_tag_cloud');
function jmw_exclude_tag_from_tag_cloud( $args ) {
  $args[ 'include' ] = '25,34,43,32,58,23,29,8,25,59'; // ID of the tag. If multiple tags use comma delimited sting '2,5,36'
  return $args;
}


?>