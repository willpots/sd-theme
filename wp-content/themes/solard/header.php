<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>InSite | Middlebury College</title>
	<meta name="author" content="" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link href="http://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet" type="text/css"> 	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo("stylesheet_url"); ?>" media="all" />
	
	<script type="text/javascript" src="<?php bloginfo("stylesheet_directory"); ?>/libs/jquery.js" ></script>
	<script type="text/javascript" src="<?php bloginfo("stylesheet_directory"); ?>/js/script.js" ></script>
	<script type="text/javascript">
	
	</script>
	<?php wp_head(); ?> 
</head>
<body <?php if(is_front_page()){ echo 'class="fp-body"';} ?>>
	<div id="header">
		<a id="header_logo_container" href="/">
			<img src="<?php bloginfo("stylesheet_directory"); ?>/img/logo.png" id="header_logo">
		</a>
		<div id="main_nav">
			<a id="donate-button" target="_blank" class="nav-button" href="http://go.middlebury.edu/givesd2013">
				<div id="donate-image" class="button-image" ></div>
				<div class="button-text">Donate Now</div>
			</a>
			<!--<a id="sr-button" target="_blank" class="nav-button" style="padding:10px 20px 10px 20px;width:100px;" href="http://solardecathlon.middlebury.edu">
				<div id="sr-image" class="button-image" ></div>
				<div class="button-text">Our 2011 Home</div>
			</a>-->
			<a id="sponsors-button" class="nav-button" href="/sponsors" >
				<div id="sponsors-image" class="button-image"></div>
				<div class="button-text">Sponsors</div>
			</a>
			<a id="news-button" class="nav-button" href="/news" >
				<div id="news-image" class="button-image"></div>
				<div class="button-text">News</div>
			</a>
			<a id="design-button" class="nav-button" href="/design" >
				<div id="design-image" class="button-image"></div>
				<div class="button-text">Design</div>
			</a>
			<a id="team-button" class="nav-button" href="/team">
				<div id="team-image" class="button-image"></div>
				<div class="button-text">Team</div>
			</a>
			<a id="mission-button" class="nav-button" href="/mission">
				<div id="mission-image" class="button-image"></div>
				<div class="button-text">Our Mission</div>
			</a>
			<a id="competition-button" class="nav-button" href="/competition">
				<div id="competition-image" class="button-image"></div>
				<div class="button-text">Competition</div>
			</a>
		</div><!-- main_nav -->
	</div><!-- header -->