<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package buddyx
 */

namespace BuddyX\Buddyx;

get_header();

buddyx()->print_styles( 'buddyx-content' );
buddyx()->print_styles( 'buddyx-sidebar', 'buddyx-widgets' );

$default_sidebar = get_theme_mod( 'sidebar_option', buddyx_defaults( 'sidebar-option' ) );

?>

	<?php do_action( 'buddyx_sub_header' ); ?>
	
	<?php do_action( 'buddyx_before_content' ); ?>

	<?php if ( class_exists( 'WooCommerce' ) ) { ?>
		<?php if ( ! is_woocommerce() && $default_sidebar == 'left' && ! is_cart() && $default_sidebar == 'left' && ! is_checkout() && $default_sidebar == 'left' && ! is_account_page() && $default_sidebar == 'left' || ! is_woocommerce() && $default_sidebar == 'both' && ! is_cart() && $default_sidebar == 'both' && ! is_checkout() && $default_sidebar == 'both' && ! is_account_page() && $default_sidebar == 'both' ) : ?>
			<aside id="secondary" class="left-sidebar widget-area">
				<div class="sticky-sidebar">
					<?php buddyx()->display_left_sidebar(); ?>
				</div>
			</aside>
		<?php endif; ?>
		<?php
	} else {
		if ( $default_sidebar == 'left' || $default_sidebar == 'both' ) :
			?>
		<aside id="secondary" class="left-sidebar widget-area">
			<div class="sticky-sidebar">
				<?php buddyx()->display_left_sidebar(); ?>
			</div>
		</aside>
	<?php endif; ?>
	<?php } ?>

	<?php
	if ( have_posts() ) {
		?>
			<?php
			while ( have_posts() ) {
				the_post();

				get_template_part( 'template-parts/content/entry', 'page' );
			}
			?>
			<?php

			if ( ! is_singular() ) {
				get_template_part( 'template-parts/content/pagination' );
			}
	} else {
		get_template_part( 'template-parts/content/error' );
	}
	?>


	<main id="velkommen">
    <h1>WELCOME TO</br> STREET FOOD FRIENDS</h1>
<div id="about-offer" class="row">
<div class="col-6"><img id="icon" width="30%" src="<?php the_field('icon1'); ?>"/> </div>
<div class="col-6"><h5><?php the_field('header1'); ?></h5><p><?php the_field('text1'); ?></p></div>
<div class="col-6"><img id="icon" width="30%" src="<?php the_field('icon2'); ?>"/> </div>
<div class="col-6"><h5><?php the_field('header2'); ?></h5><p><?php the_field('text2'); ?></p></div>
<div class="col-6"><img id="icon" width="30%" src="<?php the_field('icon3'); ?>"/> </div>
<div class="col-6"><h5><?php the_field('header3'); ?></h5><p><?php the_field('text3'); ?></p></div></div>
	<?php if ( class_exists( 'WooCommerce' ) ) { ?>
		<?php if ( ! is_woocommerce() && $default_sidebar == 'right' && ! is_cart() && $default_sidebar == 'right' && ! is_checkout() && $default_sidebar == 'right' && ! is_account_page() && $default_sidebar == 'right' || ! is_woocommerce() && $default_sidebar == 'both' && ! is_cart() && $default_sidebar == 'both' && ! is_checkout() && $default_sidebar == 'both' && ! is_account_page() && $default_sidebar == 'both' ) : ?>
			<aside id="secondary" class="primary-sidebar widget-area">
				<div class="sticky-sidebar">
					<?php buddyx()->display_right_sidebar(); ?>
				</div>
			</aside>
		<?php endif; ?>
		<?php } else { ?>
			<?php if ( $default_sidebar == 'right' || $default_sidebar == 'both' ) : ?>
			<aside id="secondary" class="primary-sidebar widget-area">
				<div class="sticky-sidebar">
					<?php buddyx()->display_right_sidebar(); ?>
				</div>
			</aside>
		<?php endif; ?>
	<?php } ?>

	<?php do_action( 'buddyx_after_content' ); ?>
<?php
get_footer();