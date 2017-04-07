<?php


require_once('wp-bootstrap-navwalker.php');


function my_dawg_setup() {

  	register_nav_menu(	'header-menu', __( 'Header Menu', 'my_dawg' ));


	add_image_size( 'post_featured_image', 760, 9999 );
	add_image_size( 'page_featured_image', 760, 9999 );

	add_theme_support('post-thumbnails');
	add_theme_support('page-thumbnails');


	set_post_thumbnail_size(250, 250, array('center', 'center'));
	set_post_thumbnail_size(250, 250, array('center', 'center'));

	
	add_theme_support( 'post-formats', array( 'image') );
	add_theme_support( 'page-formats', array( 'image') );


}
add_action('after_setup_theme', 'my_dawg_setup');

require_once('includes/filters.php');

/**
 * Register our sidebars and widgetized areas.
 *
 */
function my_dawg_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer area',
		'id'            => 'footer_area',
		'before_widget' => '<li class="list-inline-item">',
		'after_widget'  => '</li>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
        'name'          => __( 'Front Page Sidebar', 'front_page_sidebar' ),
        'id'            => 'sidebar-front',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>'
    ) );
    register_sidebar( array(
        'name'          => __( 'Dog Page Sidebar', 'dog_page_sidebar' ),
        'id'            => 'sidebar-dog',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>'
    ) );

}
add_action( 'widgets_init', 'my_dawg_widgets_init' );




require_once('includes/actions.php');


function add_styles_and_scripts() {

wp_enqueue_style( 'themes-bootstrap4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css', '4.0.0-alpha.6' );

wp_enqueue_style( 'themes-style', get_template_directory_uri() . '/style.css', array('themes-bootstrap4'), '2017032701');
  
wp_enqueue_style( 'themes-main', get_template_directory_uri() . '/css/main.css', array('themes-bootstrap4','themes-style'), '2017032701');

wp_enqueue_style( 'themes-main', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css
', array('themes-bootstrap4','themes-style', 'themes-main'), 'font-awesome');

wp_deregister_script( 'jquery' );
wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.1.1.slim.min.js', array(), '3.1.1', true);

wp_enqueue_script( 'tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', array('jquery'), '1.4.0', true);

wp_enqueue_script( 'bootstrap4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', array('jquery', 'tether'), '4.0.0-alpha.6', true);

}
add_action( 'wp_enqueue_scripts', 'add_styles_and_scripts' );




