<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="page-top">
<?php wp_body_open(); ?>

<header id="masthead" class="site-header">

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

      <button class="hamburger hamburger--spin" id="hamburger" type="button">
        <span class="hamburger-box">
          <span class="hamburger-top"></span>
          <span class="hamburger-center"></span>
          <span class="hamburger-bottom"></span>
        </span>
      </button>

      <?php
        $args = array(
        'theme_location' => 'mobile-nav',
        'container' => 'nav',
        'container_id' => 'mobile-nav',
        'container_class' => 'mobile-nav',
        'menu_class' => 'header-menu',
        );
        wp_nav_menu( $args );
      ?>

  </nav><!-- #site-navigation -->
</header><!-- #masthead -->

<?php do_action( 'azarahealthcare_after_header' ); ?>
