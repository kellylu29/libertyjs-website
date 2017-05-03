<?php
/*
Template Name: Info
*/
get_header();
?>

<h1 class="ljs2017-template-info__heading">
	<?php echo esc_html( get_the_title() ); ?>
</h1>

<div class="ljs2017-template-info__content">
	<?php echo apply_filters( 'the_content', $post->post_content ); ?>
</div>

<?php

get_footer();
