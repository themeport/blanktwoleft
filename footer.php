<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blanktwoleft
 */
?>

	</div><!-- #content -->

	</div><!-- #page -->

	<footer class="site-footer">

		<?php if ( has_nav_menu( 'social' ) ) : ?>
			<nav id="social-navigation" class="social-links">
				<?php
					// Social links navigation menu.
					wp_nav_menu( array(
						'theme_location' => 'social',
						'depth'          => 1,
						'link_before'    => '<span class="screen-reader-text">',
						'link_after'     => '</span>',
					) );
				?>
			</nav><!-- .social-navigation -->
		<?php endif; ?>

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'blanktwoleft' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'blanktwoleft' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( '%1$s by %2$s', 'blanktwoleft' ), 'Blank Two Column, Left Sidebar', '<a href="https://themeport.net" rel="designer">ThemePort</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
