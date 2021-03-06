<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site"><!-- Closed in footer.php -->

	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'azarahealthcare' ); ?></a>

  <header id="masthead" class="site-header">

    <div class="site-header-container">

      <div class="site-branding">

        <?php
          if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
          }
        ?>

        <div class="site-identity">
          <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
          <?php bloginfo( 'name' ); ?>
          </a>
          <div class="tagline"> <?php bloginfo( 'description' ); ?></div>
        </div>

      </div><!-- .site-branding -->

      <nav id="site-navigation" class="main-navigation topnav">

          <?php
            $args = array(
            'theme_location' => 'wide-screen-nav',
            'container' => 'nav',
            'container_id' => 'wide-screen-nav',
            'container_class' => 'wide-screen-nav',
            'menu_class' => 'header-menu',
            );
            wp_nav_menu( $args );
          ?>

      </nav><!-- #site-navigation -->

    </div><!-- .site-header-container -->

  </header><!-- #masthead -->

  <?php do_action( 'azarahealthcare_after_header' ); ?>
