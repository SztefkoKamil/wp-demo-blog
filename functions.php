<?php


get_template_part('/template-parts/scripts-load');
add_action('wp_enqueue_scripts', 'load_css');
add_action('wp_enqueue_scripts', 'load_js');


add_theme_support( 'html5', 	array(
	'search-form',
	'comment-form',
	'comment-list',
	'gallery',
	'caption',
	'script',
	'style',
)
);


add_theme_support('menus');
register_nav_menus(
	array(
		'top_menu' => __('Top Menu', 'theme'),
	)
);


add_theme_support( 'custom-logo', array(
	'height'      => 50,
	'width'       => 200,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
));


add_theme_support( 'title-tag' );
add_theme_support('post-thumbnails');


add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
function custom_excerpt_length( $length ) {
	return 30;
}


add_action( 'wp_enqueue_scripts', 'register_comments_scripts' );
function register_comments_scripts() {
	if ( ( ! is_admin() ) && is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}


add_theme_support('widgets');

add_action('widgets_init', 'blog_bottom_sidebar');
function blog_bottom_sidebar() {
	register_sidebar( array(
		'name' => 'Blog bottom sidebar', 
		'id' => 'blog-bottom-sidebar',
		'description' => 'Blog bottom sidebar with search, tags & archives',
		'before_widget' => '<div class="blog-bottom-widget-%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="blog-bottom-widget__title">',
		'after_title' => '</h4>'
		) );
}

add_action('widgets_init', 'footer_sidebar');
function footer_sidebar() {
	register_sidebar( array(
		'name' => 'Footer Sidebar', 
		'id' => 'footer-sidebar',
		'description' => 'Footer sidebar with social media links',
		'before_widget' => '<div class="footer-widget-%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="footer-widget__title">',
		'after_title' => '</h4>'
		) );
}
get_template_part('/template-parts/social-widget');














