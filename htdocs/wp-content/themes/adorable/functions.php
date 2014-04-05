<?php
/** Start the engine */
require_once( get_template_directory() . '/lib/init.php' );

/** Child theme (do not remove) */
define( 'CHILD_THEME_NAME', 'Adorable Child Theme' );
define( 'CHILD_THEME_URL', 'http://www.studiopress.com/themes/adorable' );

/** Add Viewport meta tag for mobile browsers */
add_action( 'genesis_meta', 'adorable_add_viewport_meta_tag' );
function adorable_add_viewport_meta_tag() {
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
}

/** Add support for custom header */
add_theme_support( 'genesis-custom-header', array( 'width' => 1100, 'height' => 160 ) );

/** Add support for color options */
add_theme_support( 'genesis-style-selector', array( 'theme-pinkgreen' => 'Pink & Green','theme-aquared' => 'Red & Aqua', 'theme-tealorange' => 'Teal & Orange', 'theme-pinkgray' => 'Pink & Charcoal','theme-customexample' => 'Custom Example' ) );


/** Add support for structural wraps */
add_theme_support( 'genesis-structural-wraps', array( 'header', 'nav', 'subnav', 'inner',
'footer-widgets', 'footer' ) );


/** Add support for 3-column footer widgets */
add_theme_support( 'genesis-footer-widgets', 3 );


// Add new image sizes
add_image_size( 'Blog Excerpt', 250, 175, TRUE );
add_image_size( 'Home Thumb', 300, 150, TRUE );
add_image_size( 'Home Top', 660, 200, TRUE );
add_image_size( 'Sidebar', 290, 175, TRUE );

// Changing excerpt more
add_filter( 'excerpt_more', 'new_excerpt_more' );
function new_excerpt_more($more) {
    return '<a href="'.get_permalink().'" rel="nofollow">  {Read More} </a>';
} 

// Changing excerpt more
function custom_excerpt_length($length) {
return 80;
}
add_filter( 'excerpt_length', 'custom_excerpt_length' );

/** Register widget areas */
genesis_register_sidebar(array(
	'name'=>'Featured Top Full Width',
	'id' => 'featured-full',
	'description' => 'This is the full width top featured section of the homepage.',
	'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
));
genesis_register_sidebar(array(
	'name'=>'Featured Top Left',
	'id' => 'featured-top-left',
	'description' => 'This is the featured top left column of the homepage.',
	'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
));
genesis_register_sidebar(array(
	'name'=>'Featured Top Right',
	'id' => 'featured-top-right',
	'description' => 'This is the featured top right column of the homepage.',
	'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
));
genesis_register_sidebar(array(
	'name'=>'Featured Bottom Left',
	'id' => 'featured-bottom-left',
	'description' => 'This is the featured bottom left column of the homepage.',
	'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
));
genesis_register_sidebar(array(
	'name'=>'Featured Bottom Right',
	'id' => 'featured-bottom-right',
	'description' => 'This is the featured bottom left column of the homepage.',
	'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
));