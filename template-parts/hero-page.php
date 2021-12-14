<!-- Page Hero-->

<header class="hero">

 <section class="hero-container">

   <header class="entry-header">

    <h1>
      <?php
        if ( is_page() ) {
          single_post_title();
        } elseif ( is_single() ) {
          echo 'Blog';
        } elseif ( is_category() ) {
          single_cat_title();
        } elseif ( is_404() ) {
          echo '404';
        } else {
          wp_title( '' );
        }
     ?>
    </h1>

   </header><!-- .entry-header -->

 </section>

</header>
