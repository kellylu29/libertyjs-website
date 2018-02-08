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
			<?php the_post(); ?>
			<?php $count++; ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	<?php else : ?>
		<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
<?php get_footer(); ?>
