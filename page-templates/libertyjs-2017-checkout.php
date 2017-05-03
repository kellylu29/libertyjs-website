<?php
/*
Template Name: Checkout
*/

get_header();

?>

<div class="ljs2017-template-checkout__container">
	<?php echo apply_filters( 'the_content', $post->post_content ); ?>
</div>

<?php

get_footer();
