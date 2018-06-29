<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @author WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Hook Woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<div class="ljs-template-checkout__container">
	<div
		itemscope
		itemtype="<?php echo esc_attr( woocommerce_get_product_schema() ); ?>"
		id="product-<?php the_ID(); ?>"
		<?php post_class(); ?>>

		<?php
			/**
			 * woocommerce_before_single_product_summary hook.
			 *
			 * @hooked woocommerce_show_product_sale_flash - 10
			 * @hooked woocommerce_show_product_images - 20
			 */
			do_action( 'woocommerce_before_single_product_summary' );
		?>

		<div class="summary entry-summary">

			<?php
				/**
				 * woocommerce_single_product_summary hook.
				 *
				 * @hooked woocommerce_template_single_title - 5
				 * @hooked woocommerce_template_single_rating - 10
				 * @hooked woocommerce_template_single_price - 10
				 * @hooked woocommerce_template_single_excerpt - 20
				 * @hooked woocommerce_template_single_add_to_cart - 30
				 * @hooked woocommerce_template_single_meta - 40
				 * @hooked woocommerce_template_single_sharing - 50
				 */
				do_action( 'woocommerce_single_product_summary' );
			?>

		</div><!-- .summary -->

		<?php
			/**
			 * woocommerce_after_single_product_summary hook.
			 *
			 * @hooked woocommerce_output_product_data_tabs - 10
			 * @hooked woocommerce_upsell_display - 15
			 * @hooked woocommerce_output_related_products - 20
			 */
			do_action( 'woocommerce_after_single_product_summary' );
		?>

		<meta itemprop="url" content="<?php the_permalink(); ?>" />

	</div><!-- #product-<?php the_ID(); ?> -->

	<?php do_action( 'woocommerce_after_single_product' ); ?>

	<div class="ljs-template-checkout__details-container">
		<i
			class="fa fa-ticket"
			aria-hidden="true"></i>
		<div class="ljs-template-checkout__headline">
			<h1>TWO DAYS<br> GREAT WORKSHOPS<br> AWESOME SPEAKERS</h1>
		</div>
		<!-- <div class="ljs-template-checkout__speakers">
			<p>Keynote Speaker</p>
			<p>Pam Selle</p>
		</div> -->
		<div class="ljs-footer__divider"></div>
		<div class="ljs-template-checkout__info-location">
			NOVEMBER 1-2 2018 &middot; PHILADELPHIA, USA
		</div>
	</div>
</div>
