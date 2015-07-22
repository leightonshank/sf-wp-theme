<?php
/**
 * Register widget area.
 *
 * @since Midnight Spaghetti (Twenty Fifteen 1.0)
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */

function spaghettifest_setup() {
  register_nav_menus( array(
    'primary' => 'Top Menu',
    'social' => 'Social Navbar Menu',
    'footer' => 'Footer Menu'
  ) );
}
add_action( 'after_setup_theme', 'spaghettifest_setup' );

function spaghettifest_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Widget Area', 'spaghettifest' ),
    'id'            => 'sidebar-1',
    'description'   => __( 'Add widgets here to appear in your sidebar.', 'spaghettifest' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'spaghettifest_widgets_init' );

function spaghettifest_scripts() {
  wp_enqueue_style(
    'font-awesome',
    get_template_directory_uri() . '/bower_components/fontawesome/css/font-awesome.css',
    array(),
    '4.3.0'
  );
  wp_enqueue_style(
    'spaghettifest',
    get_template_directory_uri() . '/dist/css/spaghettifest.css',
    array(),
    null
  );
  wp_enqueue_script(
    'bootstrap',
    get_template_directory_uri() . '/bower_components/bootstrap/dist/js/bootstrap.js',
    array(),
    '3.3.5'
  );
}
add_action( 'wp_enqueue_scripts', 'spaghettifest_scripts' );
