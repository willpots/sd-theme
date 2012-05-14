<?php 
/*
 * Template Name: Materials Page
 */
?>


<?php get_header(); ?>

<div id="banner">
	<img src="<?php getHeaderImage(get_the_title()); ?>" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>" />
</div>

<div id="content_background">
	<div id="container">

<div id="design_header">
	<p><i>Click on one of the links below to learn more</i></p>
</div>

<div id="design_links"> <!-- Links need to be updated before final push -->
	<a href="/design"><img src="http://www.test.middsd.com/wp-content/themes/solard/img/design/Header_design_BW.png" class="left"></a>
	<a href="/materials"><img src="http://www.test.middsd.com/wp-content/themes/solard/img/design/Header_Mats_Color.png" class="right"></a>
	<a href="/engineering"><img src="http://www.test.middsd.com/wp-content/themes/solard/img/design/Header_engineering_BW.png" class="middle"></a>
</div>

<div id="primary" class="full-page">
	<img src="http://www.test.middsd.com/wp-content/themes/solard/img/design/Design_Design%20Picture.png" id="design_left">
	<div id="design_right">
		<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
	</div>
</div><!-- #primary -->

<?php get_footer(); ?>