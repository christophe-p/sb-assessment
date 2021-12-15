<?php

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'azarahealthcare_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function azarahealthcare_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Azara Healthcare, use a find and replace
		 * to change 'azarahealthcare' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'azarahealthcare', get_template_directory() . '/languages' );

		// Add theme support
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'post-formats', [ 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat',  ] );
		add_theme_support( 'html5' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'align-wide' );

		// Add theme support for core custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'width'       => 137,
				'height'      => 56,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'azarahealthcare_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add custom image size for post thumbnails: 750px wide and unlimited height
		//add_image_size( 'blog-post-thumb', 750, 9999 );

		// Register nav menus.
		register_nav_menus(
      array(
      	'wide-screen-nav' => esc_html__( 'Wide Screen Nav', 'azarahealthcare' ),
 				'mobile-nav' => esc_html__( 'Mobile Nav', 'azarahealthcare' ),
				'footer-nav-1' => esc_html__( 'Footer Nav 1', 'azarahealthcare' ),
        'footer-nav-2' => esc_html__( 'Footer Nav 2', 'azarahealthcare' ),
      )
   );

	}
endif;
add_action( 'after_setup_theme', 'azarahealthcare_setup' );


// Register widget areas
function azarahealthcare_widgets_init() {

	// Footer Widget Areas
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area 1', 'azarahealthcare' ),
		'id'            => 'footer-widgets-1',
		'description'   => esc_html__( 'Add footer widgets here.', 'azarahealthcare' ),
		'before_widget' => '<section class="footer-widget-area">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="footer-widget-title">',
		'after-title'   => '</h3>',
		)
	);

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area 2', 'azarahealthcare' ),
		'id'            => 'footer-widgets-2',
		'description'   => esc_html__( 'Add footer widgets here.', 'azarahealthcare' ),
		'before_widget' => '<section class="footer-widget-area">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="footer-widget-title">',
		'after-title'   => '</h3>',
		)
	);

	  register_sidebar( array(
	    'name'          => esc_html__( 'Footer Widget Area 3', 'azarahealthcare' ),
	    'id'            => 'footer-widgets-3',
	    'description'   => esc_html__( 'Add footer widgets here.', 'azarahealthcare' ),
	    'before_widget' => '<section class="footer-widget-area">',
	    'after_widget'  => '</section>',
	    'before_title'  => '<h3 class="footer-widget-title">',
	    'after-title'   => '</h3>',
	    )
	  );
}
add_action( 'widgets_init', 'azarahealthcare_widgets_init' );

// Enqueue scripts and styles

function azarahealthcare_enqueue_scripts() {

	// Enqueue Google Fonts
	wp_enqueue_style( 'google-font-roboto', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap', array(), false, 'all' );

	wp_enqueue_style( 'google-font-quicksand', 'https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap', array(), false, 'all' );

	// Enqueue dashicons
	wp_enqueue_style('dashicons');

	// Enqueue Font Awesome
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css', array(), false, 'all' );

	// Enqueue main style sheet with dependencies
	wp_enqueue_style( 'azarahealthcare-style', get_stylesheet_uri(), array( 'google-font-roboto' , 'google-font-quicksand' ), false, 'all' );

	// Enqueue hamburger JS
	wp_enqueue_script( 'hamburger', get_template_directory_uri() . '/js/hamburger.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'azarahealthcare_enqueue_scripts' );

/**
 * Load comment form and comments
 */
 function azarahealthcare_comments() {
		// If comments are open or we have at least one comment, load up the comment template. (Copied from Gutenberg Starter Theme.)
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
}
add_action( 'loop_end', 'azarahealthcare_comments', 1 );

/**
 * Load front-page hero conditionally
 */
require get_template_directory() . '/inc/theme/load-hero.php';

/**
 * Replace the excerpt default "more" text with a custom link
 */
require get_template_directory() . '/inc/theme/read-more.php';

/**
 * Filter hook removing the prepended part of archive titles
 */
require get_template_directory() . '/inc/theme/archive-titles.php';

/**
 * Customizer additions
 */
require get_template_directory() . '/inc/admin/customizer.php';

/**
	* Underscores default includes
	*/

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/underscores/jetpack.php';
}
