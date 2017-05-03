<?php
/**
 * The template for displaying product content in the single-product.php template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php
	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );
?>

<div class="ljs2017-template-checkout__container">
	<div
		itemscope
		itemtype="<?php echo woocommerce_get_product_schema(); ?>"
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

	<div class="ljs2017-template-checkout__details-container">
		<i
			class="fa fa-ticket"
			aria-hidden="true"></i>
		<div class="ljs2017-template-checkout__headline">
			<h1>2 DAYS<br> 8 WORKSHOPS<br> 30+ SPEAKERS</h1>
		</div>
		<div class="ljs2017-template-checkout__speakers">
			<p>Keynote Speakers</p>
			<p>John Maeda, Rand Fishkin, Todd Wilkens</p>
			<p>Beka Rice, Kandace Brigleb, Zach Stepek</p>
		</div>
		<div class="ljs2017-footer__divider"></div>
		<div class="ljs2017-template-checkout__info-location">
			OCTOBER 19 &amp; 20 • SEATTLE, USA
		</div>
	</div>
</div>
