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

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
