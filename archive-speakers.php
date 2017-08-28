<?php
/*
Template Name: Speakers
*/
get_header();

$args = array(
	'post_type' => 'speakers',
	'posts_per_page' => -1,
);
$query = new WP_Query( $args );

function output_speaker( $id ) {
	$facebook = get_post_meta( $id, 'facebook', true );
	$image = get_post_meta( $id, 'image', true );
	$instagram = get_post_meta( $id, 'instagram', true );
	$linkedin = get_post_meta( $id, 'linkedin', true );
	$name = get_post_meta( $id, 'name', true );
	$secondary = get_post_meta( $id, 'secondary', true );
	$twitter = get_post_meta( $id, 'twitter', true );
	?>

	<div class="ljs2017-grid__item">
		<div class="ljs2017-grid__item-name"><?php echo esc_html( $name ); ?></div>
		<div class="ljs2017-grid__item-jobtitle"><?php echo esc_html( $secondary ); ?></div>
		<img
			class="ljs2017-grid__item-image"
			src="<?php echo esc_attr( $image ); ?>"
			alt="<?php echo esc_attr( $name ); ?>">
		<div class="ljs2017-grid__item-social-container">
			<?php if ( $facebook ) : ?>
				<a href="<?php echo esc_url( $facebook ); ?>" target="_blank">
					<i class="fa fa-facebook-square" aria-hidden="true"></i>
				</a>
			<?php endif; ?>
			<?php if ( $instagram ) : ?>
				<a href="<?php echo esc_url( $instagram ); ?>" target="_blank">
					<i class="fa fa-instagram" aria-hidden="true"></i>
				</a>
			<?php endif; ?>
			<?php if ( $linkedin ) : ?>
				<a href="<?php echo esc_url( $linkedin ); ?>" target="_blank">
					<i class="fa fa-linkedin-square" aria-hidden="true"></i>
				</a>
			<?php endif; ?>
			<?php if ( $twitter ) : ?>
				<a href="<?php echo esc_url( $twitter ); ?>" target="_blank">
					<i class="fa fa-twitter-square" aria-hidden="true"></i>
				</a>
			<?php endif; ?>
		</div>
	</div>
	<?php
}
?>

<div class="ljs2017-grid__container" id="gridItems">
	<div class="ljs2017-grid__heading-container">
		<div class="ljs2017-grid__heading" id="keynotes">
			<h2>SPEAKERS</h2>
		</div>
	</div>
	<div class="ljs2017-grid__items">
		<?php if ( $query->have_posts() ) : ?>
			<?php while ( $query->have_posts() ) : ?>
				<?php $query->the_post(); ?>
				<?php output_speaker( $post->ID ); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>

<?php

get_footer();
