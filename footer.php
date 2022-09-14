<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package buddyx
 */

namespace BuddyX\Buddyx;

?>
	<?php
	$classes = get_body_class();
	if ( ! in_array( 'page-template-full-width', $classes ) ) {
		?>
		</div><!-- .container -->
	<?php } ?>

	<?php do_action( 'buddyx_footer_before' ); ?>

	<footer id="colophon" class="site-footer">
    <div class="col-sm-4">  <a>Find os</a></br>
<p>Esbjerg Street Food</br>
Kongensgade 34</br>
Borgergade 33, 6700 Esbjerg</br> </div></p>
    <div class="col-sm-4"> <a>Åbningstider madboder</a></br> 
<p>Søndag – torsdag: 11:30 – 20:00</br> 
Fredag – lørdag: 11:30 – 21:00</br> 
Madboderne kan have længere åben </div></p>
    <div class="col-sm-4"> <a>Åbningstider barer</br> </a>
<p>Søndag – onsdag: 11:30 til senest 21:00</br> 
Torsdag – lørdag: 11:30 til senest 02:00</br> </p>
</div>
		<?php if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) { ?>
			<div class="site-footer-wrapper">
				<div class="container">
					<?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) ) : ?>
						<div class="footer-inner" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'buddyx' ); ?>">
								<?php if ( is_active_sidebar( 'footer-1' ) ) { ?>
							<div class="footer-widget">
									<?php dynamic_sidebar( 'footer-1' ); ?>
							</div>
								<?php } if ( is_active_sidebar( 'footer-2' ) ) { ?>
							<div class="footer-widget">
									<?php dynamic_sidebar( 'footer-2' ); ?>
							</div>
							<?php } ?>
								<?php if ( is_active_sidebar( 'footer-3' ) ) { ?>
							<div class="footer-widget">
									<?php dynamic_sidebar( 'footer-3' ); ?>
							</div>
								<?php } if ( is_active_sidebar( 'footer-4' ) ) { ?>
							<div class="footer-widget">
									<?php dynamic_sidebar( 'footer-4' ); ?>
							</div>
							<?php } ?>
						</div><!-- .widget-area inner-->
					<?php endif; ?>	
				</div><!-- .container -->
			</div><!-- .site-footer-wrapper -->
			<?php get_template_part( 'template-parts/footer/info' ); ?>
		<?php } ?>
	</footer><!-- #colophon -->

	<?php do_action( 'buddyx_footer_after' ); ?>

<?php do_action( 'buddyx_page_bottom' ); ?>

<!-- #page -->

<div class="mobile-menu-close"></div>

<?php do_action( 'buddyx_body_bottom' ); ?>

<?php wp_footer(); ?>

</body>
</html>