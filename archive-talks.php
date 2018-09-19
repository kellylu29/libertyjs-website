<?php
/*
Template Name: Talks
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<?php get_header(); ?>
<h1 class="ljs-template-info__heading">
	Talks
</h1>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : ?>
			<div class="ljs-template-info__content">
				<?php the_post(); ?>
				<h3>
					<a href="<?php echo esc_url( get_permalink() ); ?>">
						<?php the_title(); ?>
					</a>
				</h3>
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
	<?php else : ?>
		<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
<?php get_footer(); ?>
