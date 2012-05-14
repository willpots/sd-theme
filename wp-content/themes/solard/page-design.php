<?php 
/*
 * Template Name: Design Page
 */
?>


<?php get_header(); ?>

<div id="banner">
	<img src="<?php getHeaderImage(get_the_title()); ?>" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>" />
</div>

<div id="content_background">
	<div id="container">


<?php get_sidebar(); ?>

<div id="design_header">
	<p><i>Click on one of the links below to learn more</i></p>
</div>

<div id="primary" class="full-page">
	<div id="page_row">
		<div id="page_left">
			
		</div>
		<div id="page_right">

		</div>
	</div>
</div><!-- #primary -->

<?php get_footer(); ?>