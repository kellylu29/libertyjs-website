<select name="<?php echo esc_attr( $name ); ?>" id="<?php echo esc_attr( $id ); ?>" <?php disabled( $disabled ); ?>>
	<option value="" disabled selected hidden>
		<?php echo esc_html( $label ); ?>
	</option>
<?php foreach ( $options as $option ) : ?>
	<option <?php selected( $option, $value ); ?> value="<?php echo esc_attr( $option ); ?>"><?php echo esc_html( $option ); ?></option>
<?php endforeach; ?>
</select>
