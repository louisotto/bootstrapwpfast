<?php get_header(); ?>

<div class="col-md-8 col-md-offset-2">	
			
	<header class="page-header">
		<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'upbootwp' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<p>Oops! No page was found, <a href="<?php echo esc_url( home_url( '/' ) );?>">return to homepage?</a></p>
	</div><!-- .page-content -->
			
</div><!-- .col-md-8 -->

<?php get_footer(); ?>