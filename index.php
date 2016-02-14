<?php
	/**
	 *
 	 * @author	Mario Preishuber <preishuber.mario@gmail.com>
 	 */
	namespace IMSC;

	use \IMSC\php\HtmlTags;
	use \IMSC\php\MobileDetect;
	use \IMSC\php\Facebook\Informations;

	require_once 'php/HtmlTags.php';
	require_once 'php/MobileDetect.php';
	require_once 'php/Facebook/Informations.php';

	$htmltags = new HtmlTags();
	$fb_infos = new Informations();
	$detect = new MobileDetect();
?>

<!DOCTYPE html>
<html lang="en" xmlns:fb="http://ogp.me/ns/fb#">
	<head>
		<title>IMSC | Home</title>
		<!-- ************************************************************************************ -->
		<!-- * META DATA / STYLES -->
		<!-- ************************************************************************************ -->
		<?php require_once 'headinc.php'; ?>

		<style>
		    .google-maps {
		        position: relative;
		        padding-bottom: 50%; // This is the aspect ratio
		        height: 0;
		        overflow: hidden;
		    }
		    .google-maps iframe {
		        position: absolute;
		        top: 0;
		        left: 0;
		        width: 100% !important;
		        height: 75% !important;
		    }
		</style>

	</head>

	<body onresize="resizeSections('home')">
		<!-- ************************************************************************************ -->
		<!-- * NAVIGATION BAR -->
		<!-- ************************************************************************************ -->
		<?php require_once 'nav.php'; ?>

		<!-- ************************************************************************************ -->
		<!-- * HOME -->
		<!-- ************************************************************************************ -->
		<section class="my_section" id="home" >
			<?php print( $htmltags->getHomeBackground() ); ?>
			<div class="container">
				<div id="fb-feeds" class="row">
					<div class="col-sm-12">
						<div class="fb-feed-background">&nbsp;</div>
						<div class="my_section fb-feed text-center">
							<h1>Innviertler Motor Sport Club</h1>
							<?php print($fb_infos->getAbout()); ?>
							<br />
						</div>
					</div>
				</div>
				<?php require_once 'content_home.php'; ?>
		</section><!-- end section home -->
		
		<!-- ************************************************************************************ -->
		<!-- * CONTACT / FOOTER -->
		<!-- ************************************************************************************ -->
		<?php require_once 'footer.php'; ?>

		<!-- ************************************************************************************ -->
		<!-- * ADDITIONAL CONTENT -->
		<!-- ************************************************************************************ -->
		<?php require_once 'addcont.php'; ?>
	</body>
</html>
