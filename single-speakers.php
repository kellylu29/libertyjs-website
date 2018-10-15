<?php
/*
Template Name: Talks
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function output_speaker( $id ) {
	$facebook  = get_post_meta( $id, 'facebook', true );
	$image     = get_post_meta( $id, 'image', true );
	$instagram = get_post_meta( $id, 'instagram', true );
	$linkedin  = get_post_meta( $id, 'linkedin', true );
	$name      = get_post_meta( $id, 'name', true );
	$secondary = get_post_meta( $id, 'secondary', true );
	$twitter   = get_post_meta( $id, 'twitter', true );
	?>

	<div class="ljs-speaker__container">
		<div class="ljs-speaker__name"><?php echo esc_html( $name ); ?></div>
		<div class="ljs-speaker__jobtitle"><?php echo esc_html( $secondary ); ?></div>
		<img
			class="ljs-speaker__image"
			src="<?php echo esc_attr( $image ); ?>"
			alt="<?php echo esc_attr( $name ); ?>">
		<div class="ljs-speaker__social-container">
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

<?php get_header(); ?>
	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
		<?php output_speaker( get_the_ID() ); ?>
		<h1 class="ljs-speaker__heading">
				<?php echo esc_html( get_the_title() ); ?>
		</h1>
		<div class="ljs-speaker__content">
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>
