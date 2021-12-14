<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

  <header class="entry-header">

    <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

    <div class="entry-meta">

      <?php
        $all_categories = get_the_category();

        // Display first category only
        esc_html_e( $all_categories[0]->cat_name );
      ?>

      <?php
        esc_html_e( ' | ', 'azarahealthcare' ) . esc_html_e( ' By ', 'azarahealthcare' ) . esc_url( the_author_posts_link() ) . esc_html_e( ' | ', 'azarahealthcare' );
      ?>

      <i class="<?php echo esc_attr( 'fas fa-calendar-alt' ); ?>"></i>
      <?php
        the_time( 'F j, Y' );
      ?>

    </div>

  </header>

  <div class="entry-content">

    <?php if ( has_post_thumbnail() ) { ?>

      <a href="<?php the_permalink(); ?>">
      <?php
        $attr = array(
          'alt' => get_the_title(),
          'title' => get_the_title(),
        );
        the_post_thumbnail( 'blog-post-thumb', $attr );
      ?>
      </a>

    <?php } // End if ?>

    <?php the_excerpt(); ?>

  </div><!-- .entry-content -->

  <footer class="entry-footer">
		<?php azarahealthcare_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article>
