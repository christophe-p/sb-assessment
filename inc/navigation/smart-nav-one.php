<?php

/**
 * Smart Nav One changes the top nav color when the user scrolls down.
 *
 * JS scripts are enqueued conditionally, with one script for the homepage and another for other pages.
 */

function azarahealthcare_smart_nav_one() {
  if ( is_front_page() ) {
		wp_enqueue_script( 'azarahealthcare-smart-nav-one', get_template_directory_uri() . '/js/navigation/smart-nav-one-front-page.js', array(), _S_VERSION, true );
  }
	else {
		wp_enqueue_script( 'azarahealthcare-smart-nav-one', get_template_directory_uri() . '/js/navigation/smart-nav-one-page.js', array(), _S_VERSION, true );
	}
}
add_action( 'azarahealthcare_after_header', 'azarahealthcare_smart_nav_one', 10 );
