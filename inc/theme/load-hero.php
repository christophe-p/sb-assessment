<?php

// Load front-page hero conditionally
function azarahealthcare_hero() {
  if ( is_front_page() ) {
    locate_template( 'template-parts/hero-front-page.php', true );
  } else {
    locate_template( 'template-parts/hero-page.php', true );
  }
}
add_action( 'azarahealthcare_after_header', 'azarahealthcare_hero', 10 );
