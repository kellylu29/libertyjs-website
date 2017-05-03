<div class="ljs2017-ticket-edit__container">
	<form name="edit-ticket" action="" method="post" class="edit-ticket ljs2017-ticket-edit__container-left">
		<h1 class="product_title entry-title">Edit Ticket</h1>

		<?php $ticket_form->render(); ?>

		<div class="clear"></div>

		<p class="buttons">
			<input type="submit" class="button" value="<?php _e( 'Update', 'woocommerce-box-office' ); ?>" />

			<?php if ( $print_ticket_enabled ) : ?>
				<a href="<?php echo esc_url( $print_ticket_url ); ?>" target="_blank" class="button">
					<?php _e( 'Print ticket', 'woocommerce-box-office' ); ?>
				</a>
			<?php endif; ?>
		</p>

		<input type="hidden" name="action" value="update_ticket" />
		<?php wp_nonce_field( 'woocommerce-box-office_update_ticket' ); ?>
	</form>

	<div class="ljs2017-ticket-edit__container-right">
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

	<?php do_action( 'woocommerce_box_office_after_edit_ticket_form', $ticket_id ); ?>

</div>
