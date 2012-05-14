<?php
/*
Template Name: Sponsors
*/
?>

<?php get_header(); ?>

<div id="banner">
	<img src="<?php getHeaderImage(get_the_title()); ?>" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>" />
</div>

<div id="content_background">
	<div id="container">

<?php get_sidebar(); ?>

		<div id="primary">
			<h2>Corporate Sponsors</h2>
			<div id="content" role="main">

				<?php $attachment_id=32; //attachment ID
				$image_attributes = wp_get_attachment_image_src($attachment_id); ?>
				<img class="sponsor_logo" src="<?php echo $image_attributes[0]; ?>" alt="overbrook">
				<img class="sponsor_logo" src="<?php echo get_attached_file(31); ?>">
				<img class="sponsor_logo" src="<?php echo get_attached_file(30); ?>">

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>