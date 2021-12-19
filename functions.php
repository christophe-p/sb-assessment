<?php

if ( ! function_exists( 'azarahealthcare_setup' ) ) :

	function azarahealthcare_setup() {

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
				'header-text' => array( 'site-title', 'site-description', ),
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

		// Register nav menus.
		register_nav_menus(
      array(
      	'wide-screen-nav' => esc_html__( 'Wide Screen Nav', 'azarahealthcare' ),
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
 * Load front-page hero or page hero conditionally
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
