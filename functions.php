<?php
//Include CSS files
function load_css () {
	wp_register_style( 'icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css');
	wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_register_style( 'my-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('icons');
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('my-style');
}
add_action('wp_enqueue_scripts', 'load_css');


//Create nav menus - from https://developer.wordpress.org/themes/functionality/navigation-menus/
function register_my_menus() {
  register_nav_menus(
	array(
	  'header-menu' => __( 'Header Menu' ),
	  'sidebar-menu' => __( 'Sidebar Menu' ),
	  'footer-menu' => __( 'Footer Menu' )
	 )
   );
 }
 add_action( 'init', 'register_my_menus' );
 
//Create widgets - from https://codex.wordpress.org/Widgetizing_Themes
function custom_widgets_init() {
	register_sidebar( array(
		'name'          => 'Main sidebar',
		'id'            => 'main-sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	));
	register_sidebar( array(
		'name'          => 'Footer widget area 1',
		'id'            => 'footer-one',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	));
	register_sidebar( array(
		'name'          => 'Footer widget area 2',
		'id'            => 'footer-two',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	));
}
add_action( 'widgets_init', 'custom_widgets_init' );