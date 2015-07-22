<?php
/**
 * Register widget area.
 *
 * @since Midnight Spaghetti (Twenty Fifteen 1.0)
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function midnightspaghetti_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'midnightspaghetti' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'midnightspaghetti' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_nav_menus( array(
		'primary' => 'Top Menu',
		'social' => 'Social Navbar Menu',
		'footer' => 'Midnight Spaghetti Menu',
		'contact' => 'Contact Us Menu',
		'press' => 'Press Menu',
		'media' => 'Media Menu',
	) );
}
add_action( 'widgets_init', 'midnightspaghetti_widgets_init' );
