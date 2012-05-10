<?php 
/*
 * Template Name: Competition Page
 */
?>


<?php get_header(); ?>

<div id="banner">
	<h2><i><?php wp_title($sep); ?></i></h2>
</div>

<div id="content_background">
	<div id="container">

<?php get_sidebar(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>