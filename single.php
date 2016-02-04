<?php get_header(); ?>

<div class="row single-page">

	<div class="col-md-4 sidebar">
		<?php get_sidebar('blog'); ?>
	</div>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class="col-md-8">

			<h2><?php the_title(); ?></h2>

			<?php the_content(); ?>

		</div>

	<?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>