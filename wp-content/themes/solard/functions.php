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
function getHeaderImage($pagename) {

	switch($pagename) {
		case "team":
			$headerImage = "";
			break;
		case "competition":
			$headerImage = "";
			break;
		case "mission":
			$headerImage = "";
			break;
		default:
		
			break;
	}

}




?>