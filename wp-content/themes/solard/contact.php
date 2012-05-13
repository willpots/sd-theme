<?php
/*
Template Name: Contact
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
			<h2>Contact Us</h2>
			<div id="content" role="main">

				<div id="contact_left">
					<p>Shoot us an Email</p>
					<p>Your Name:</p>
					<p>Your Email:</p>
					<p>Your Message:</p>
				</div>
				<div id="contact_right">
					<p>Thanks for your interest in contacting Team Middlebury!  Please use the form below to place an inquiry, or contact us the old-fashioned way.  We do get a lot of mail, so it may take a while for us to reply to your message</p>
					<br/>
					<br/>
					<form>
						<input type="text" name="name">
						<br/>
						<br/>
						<input type="text" name="email">
						<br/>
						<br/>
						<input type="text" name="message">
					</form>
				</div>
				

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>