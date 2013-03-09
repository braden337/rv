<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package thirtyseven
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function rv_infinite_scroll_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'rv_infinite_scroll_setup' );
