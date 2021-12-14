<footer id="colophon" class="site-footer" style="background-color: <?php echo get_theme_mod( 'footer_color', '#EFF4FB' ); ?>">

	<section class="mega-footer-wrapper">

		<section class="mega-footer-1">
			<?php dynamic_sidebar( 'footer-widgets-1' ); ?>
		</section>

		<section class="mega-footer-2">
			<?php dynamic_sidebar( 'footer-widgets-2' ); ?>
		</section>

		<section class="mega-footer-3">
			<?php dynamic_sidebar( 'footer-widgets-3' ); ?>
		</section>

	</section>

	<?php
		$args = array(
			'theme_location' => 'footer-nav',
			'container' => 'nav',
			'container_id' => 'footer-nav',
			'container_class' => 'footer-nav',
			'menu_class' => 'footer-menu',
		);
		wp_nav_menu( $args );
	?>

</footer><!-- #colophon -->

<footer class="footer-copyright">
	<!-- Customizer test -->
	<div>
		Copyright &copy; <?php echo date( 'Y' ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>. All rights reserved. <a href="/privacy-policy/">Privacy.</a>
	</div>
</footer>

<!-- Back-to-top button -->
<a class="back-to-top" href="#page-top" title="Scroll back to top" aria-label="Scroll back to top" rel="nofollow">
 <span class="back-to-top-icon icon-arrow-up"><svg viewBox="0 0 330 512" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
   <path d="M305.863 314.916c0 2.266-1.133 4.815-2.832 6.514l-14.157 14.163c-1.699 1.7-3.964 2.832-6.513 2.832-2.265 0-4.813-1.133-6.512-2.832L164.572 224.276 53.295 335.593c-1.699 1.7-4.247 2.832-6.512 2.832-2.265 0-4.814-1.133-6.513-2.832L26.113 321.43c-1.699-1.7-2.831-4.248-2.831-6.514s1.132-4.816 2.831-6.515L158.06 176.408c1.699-1.7 4.247-2.833 6.512-2.833 2.265 0 4.814 1.133 6.513 2.833L303.03 308.4c1.7 1.7 2.832 4.249 2.832 6.515z" fill-rule="nonzero"></path>
  </svg></span>
</a>

<?php wp_footer(); ?>

</body>
</html>
