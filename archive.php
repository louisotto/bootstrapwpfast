<?php get_header(); ?>


<div class="row single-page">

	<div class="col-md-12 archive">
		<h1><?php wp_title(''); ?> Blog Posts</h1>
	</div>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class="col-md-6">

			<a href="<?php the_permalink();?>" class="title">
				<h2><?php the_title(); ?></h2>

				<?php the_content(); ?>
			</a>

		</div>

	<?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>