<?php 
/*
 * Template Name: Team Page
 */
?>


<?php get_header(); ?>

<div id="banner">
	<h2><i><?php wp_title($sep); ?></i></h2>
</div>

<div id="content_background">
	<div id="container">

<?php //get_sidebar(); ?>

		<div id="primary" class="full-page">
			<div id="team-photos">
			<?php foreach($people as $p) { ?>
			<a class="team-member">
				<img class="team-photo" src="<?php echo $p['path']; ?>" alt="" />
				<div class="team-text">
					<span class="team-name"><?php echo $p['name']; ?></span>
					<span class="team-subteam"><?php echo $p['team']; ?></span>
				</div>
			</a>
			<?php } ?>
			<?php foreach($faculty as $p) { ?>
			<a class="team-member">
				<img class="team-photo" src="<?php echo $p['path']; ?>" alt="" />
				<div class="team-text">
					<span class="team-name"><?php echo $p['name']; ?></span>
					<span class="team-subteam"><?php echo $p['role']; ?></span>
				</div>
			</a>
			<?php } ?>

			<div class="clear"></div>
			</div>
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>