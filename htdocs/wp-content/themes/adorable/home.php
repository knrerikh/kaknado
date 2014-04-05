<?php

add_action( 'genesis_meta', 'adorable_home_genesis_meta' );
/**
 * Add widget support for homepage. If no widgets active, display the default loop.
 *
 */
function adorable_home_genesis_meta() {

	if ( is_active_sidebar( 'featured-full' ) || is_active_sidebar( 'featured-top-left' ) || is_active_sidebar( 'featured-top-right' ) || is_active_sidebar( 'featured-bottom-left' ) || is_active_sidebar( 'featured-bottom-right' )) {

		remove_action( 'genesis_loop', 'genesis_do_loop' );
		add_action( 'genesis_loop', 'adorable_home_loop_helper' );

	}
}

/**
 * Display widget content for home widgets.
 *
 */
function adorable_home_loop_helper() {

		if ( is_active_sidebar( 'featured-full' ) || is_active_sidebar( 'featured-top-left' ) || is_active_sidebar( 'featured-top-right' ) || is_active_sidebar( 'featured-bottom-left' ) || is_active_sidebar( 'featured-bottom-right' )) {

		echo '<div id="featured-full">';
		echo '<div class="featured-full">';
		dynamic_sidebar( 'featured-full' );
		echo '</div><!-- end .featured-full -->';
		echo '</div><!-- end #featured-full -->';

		echo '<div id="featured-top">';
		echo '<div class="featured-top-left">';
		dynamic_sidebar( 'featured-top-left' );
		echo '</div><!-- end .featured-top-left -->';

		echo '<div class="featured-top-right">';
		dynamic_sidebar( 'featured-top-right' );
		echo '</div><!-- end .featured-top-right -->';
		echo '</div><!-- end #featured-top -->';

		echo '<div id="featured-bottom-stuff">';
		echo '<div class="featured-bottom-left">';
		dynamic_sidebar( 'featured-bottom-left' );
		echo '</div><!-- end .featured-bottom-left -->';

		echo '<div class="featured-bottom-right">';
		dynamic_sidebar( 'featured-bottom-right' );
		echo '</div><!-- end .featured-bottom-right -->';
		echo '</div><!-- end #featured-bottom-stuff -->';	

	}

}

genesis();