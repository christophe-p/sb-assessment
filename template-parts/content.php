<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Azara_Healthcare
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<?php
			if ( ! is_singular() ) :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

			elseif ( is_single() ) :
				the_title( '<h2 class="entry-title">', '</h2>' );

			endif;

			if ( 'post' === get_post_type() ) :
		?>
				<div class="entry-meta">

					<?php
						esc_html_e( 'By ', 'azarahealthcare' ) . the_author_posts_link() . esc_html_e( ' // ', 'azarahealthcare' ) . the_date();
					?>

				</div><!-- .entry-meta -->
			<?php endif; ?>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'azarahealthcare' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		$args = array(
			'before' => '<div class="page-links">' . esc_html__( 'Continue reading: ', 'azarahealthcare' ),
			'after'  => '</div>',
	    'separator'         => ' | ',
		);
 		wp_link_pages( $args );

		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			if ( is_single() ) :
		?>
			<div class="entry-meta">

				<?php
					esc_html_e( 'By ', 'azarahealthcare' ) . the_author_posts_link() . esc_html_e( ' on ', 'azarahealthcare' ) . the_date() . esc_html_e( ', ', 'azarahealthcare' ) . the_time();
				?>

			</div><!-- .entry-meta -->

			<?php
			$categories_list = get_the_category_list( esc_html__( ', ', 'azarahealthcare' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'azarahealthcare' ) . '</span><br/>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'azarahealthcare' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'azarahealthcare' ) . '</span><br/>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
			?>

		<?php endif; ?>

	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
