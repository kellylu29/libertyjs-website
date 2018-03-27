<?php
/*
Template Name: Info
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<?php get_header(); ?>
	<?php if ( have_posts() ) : ?>
		<?php $count = 0; ?>
		<?php while ( have_posts() ) : ?>
			<h1 class="ljs-template-info__heading">
				<?php echo esc_html( get_the_title() ); ?>
			</h1>
			<div class="ljs-template-info__content">
				<?php the_post(); ?>
				<?php $count++; ?>
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
	<?php else : ?>
		<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
<?php get_footer(); ?>
