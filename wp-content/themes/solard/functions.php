<?php
/**
 * Embeds Google Analytics into the page.
 *
 */
function analytics() { 

?>
	<script type="text/javascript">	
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-20023247-14']);
		_gaq.push(['_trackPageview']);
		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
<?php 
}

/**
 * Pulls the source for a header image depending on the page name. Also supports a default image with no name.
 *
 */
function getHeaderImage($pagename,$print=true) {
	$pagename=strtolower($pagename);
	switch($pagename) {
		case "team":
			$headerImage = get_template_directory_uri()."/img/headers/header_team.png";
			break;
		case "competition":
			$headerImage = get_template_directory_uri()."/img/headers/header_competition.png";
			break;
		case "mission":
			$headerImage = get_template_directory_uri()."/img/headers/header_mission.png";
			break;
		case "contact":
			$headerImage = get_template_directory_uri()."/img/headers/header_contact.png";
			break;
		case "design":
			$headerImage = get_template_directory_uri()."/img/headers/header_design.png";
			break;
		case "materials":
			$headerImage = get_template_directory_uri()."/img/headers/header_design.png";
			break;
		case "engineering":
			$headerImage = get_template_directory_uri()."/img/headers/header_design.png";
			break;
		case "home":
			$headerImage = get_template_directory_uri()."/img/headers/header_mission.png";
			break;
		case "news":
			$headerImage = get_template_directory_uri()."/img/headers/header_news.png";
			break;
		case "sponsors":
			$headerImage = get_template_directory_uri()."/img/headers/header_sponsors.png";
			break;
	}
	if($print) {
		echo $headerImage;
	}
	return $headerImage;
}

/**
 *
 *
 */
$people = array();
$people[] = array('name'=>'Ally Silberkleit',		'team'=>'Design',			'path'=>get_template_directory_uri().'/headshots/asilberkleit-small.png');
$people[] = array('name'=>'Becky Wasserman',		'team'=>'Outreach',			'path'=>get_template_directory_uri().'/headshots/rwasserman-small.png');
$people[] = array('name'=>'Bree Baccaglini',		'team'=>'Construction',		'path'=>get_template_directory_uri().'/headshots/bbaccaglini-small.png');
$people[] = array('name'=>'Camille Seyler',			'team'=>'Outreach',			'path'=>get_template_directory_uri().'/headshots/cseyler-small.png');
$people[] = array('name'=>'Cordelia Newbury',		'team'=>'Design',			'path'=>get_template_directory_uri().'/headshots/cnewbury-small.png');
$people[] = array('name'=>'Danny Nigh',				'team'=>'Outreach',			'path'=>get_template_directory_uri().'/headshots/dnigh-small.png');
$people[] = array('name'=>'Ethan Galiette',			'team'=>'Finance',			'path'=>get_template_directory_uri().'/headshots/egaliette-small.png');
$people[] = array('name'=>'Eliza Margolin',			'team'=>'Design',			'path'=>get_template_directory_uri().'/headshots/emargolin-small.png');
$people[] = array('name'=>'Ellie Krause',			'team'=>'Design',			'path'=>get_template_directory_uri().'/headshots/ekrause-small.png');
$people[] = array('name'=>'Emily Roach',			'team'=>'Design',			'path'=>get_template_directory_uri().'/headshots/eroach-small.png');
$people[] = array('name'=>'Evan Gallagher',			'team'=>'Outreach',			'path'=>get_template_directory_uri().'/headshots/evang-small.png');
$people[] = array('name'=>'Jack Peisch',			'team'=>'Outreach',			'path'=>get_template_directory_uri().'/headshots/jpeisch-small.png');
$people[] = array('name'=>'Jordan Collins',			'team'=>'Outreach',			'path'=>get_template_directory_uri().'/headshots/jcollins-small.png');
$people[] = array('name'=>'Jillian Mock',			'team'=>'Outreach',			'path'=>get_template_directory_uri().'/headshots/jmock-small.png');
$people[] = array('name'=>'Lizzie Durkin',			'team'=>'Outreach',			'path'=>get_template_directory_uri().'/headshots/edurkin-small.png');
$people[] = array('name'=>'Maddy Lawler',			'team'=>'Outreach',			'path'=>get_template_directory_uri().'/headshots/mlawler-small.png');
$people[] = array('name'=>'Mollie Young',			'team'=>'Outreach',			'path'=>get_template_directory_uri().'/headshots/myoung-small.png');
$people[] = array('name'=>'Patrick Li',				'team'=>'Design',			'path'=>get_template_directory_uri().'/headshots/pli-small.png');
$people[] = array('name'=>'Robbie Carpenter-Israel','team'=>'Finance',			'path'=>get_template_directory_uri().'/headshots/rcarpenterisrael-small.png');
$people[] = array('name'=>'Rita Croce',				'team'=>'Outreach',			'path'=>get_template_directory_uri().'/headshots/rcroce-small.png');
$people[] = array('name'=>'Sam Collins',			'team'=>'Construction',		'path'=>get_template_directory_uri().'/headshots/scollins-small.png');
$people[] = array('name'=>'Sofia Silverglass',		'team'=>'Outreach',			'path'=>get_template_directory_uri().'/headshots/ssilverglass-small.png');
$people[] = array('name'=>'Sean Willerford',		'team'=>'Outreach',			'path'=>get_template_directory_uri().'/headshots/swillerford-small.png');
$people[] = array('name'=>'Teddy Knox',				'team'=>'Outreach',			'path'=>get_template_directory_uri().'/headshots/ejknox-small.png');
$people[] = array('name'=>'Tommy Hyde',				'team'=>'Outreach',			'path'=>get_template_directory_uri().'/headshots/thyde-small.png');
$people[] = array('name'=>'Will Potter',			'team'=>'Outreach',			'path'=>get_template_directory_uri().'/headshots/wspotter-small.png');

$faculty = array();
$faculty[] = array('name'=>'Andrea Murray', 	'role'=>'Faculty',		'path'=>get_template_directory_uri().'/headshots/akmurray-small.png');
$faculty[] = array('name'=>'Ashar Nelson', 		'role'=>'Faculty',		'path'=>get_template_directory_uri().'/headshots/jnelson-small.png');
$faculty[] = array('name'=>'Sarah Franco',	 	'role'=>'Administration',		'path'=>get_template_directory_uri().'/headshots/sfranco-small.png');
?>