<input
	type="<?php echo esc_attr( $type ); ?>"
	class="<?php echo esc_attr( $input_class ); ?>"
	placeholder="<?php echo esc_attr( $label ); ?>"
	value="<?php echo esc_attr( $value ); ?>" name="<?php echo esc_attr( $name ); ?>"
	id="<?php echo esc_attr( $id ); ?>"<?php disabled( $disabled ); ?>
	<?php echo $required ? 'required' : ''; ?>
	/>
