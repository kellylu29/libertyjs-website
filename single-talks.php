<?php
/*
Template Name: Talks
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<?php get_header(); ?>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : ?>
			<div class="ljs-template-info__content">
				<?php the_post(); ?>
				<h3>
					<?php the_title() ?>
				</h3>
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
	<?php else : ?>
		<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
<?php get_footer(); ?>
