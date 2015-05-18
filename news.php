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
		<title>IMSC | News</title>
		<!-- ************************************************************************************ -->
		<!-- * META DATA / STYLES -->
		<!-- ************************************************************************************ -->
		<?php require_once 'headinc.php'; ?>
	</head>

	<body>
		<!-- ************************************************************************************ -->
		<!-- * NAVIGATION BAR -->
		<!-- ************************************************************************************ -->
		<?php require_once 'nav.php'; ?>

		<!-- ************************************************************************************ -->
		<!-- * CONTENT -->
		<!-- ************************************************************************************ -->
		<div class="page-wrapper">

		<!-- ************************************************************************************ -->
		<!-- * NEWS -->
		<!-- ************************************************************************************ -->
		<section class="my_section" id="news">
			<div class="background">&nbsp;</div>
			<div class="container">
				<div class="col-sm-12 text-center">
					<div class="btn btn-danger"><h3>News</h3></div>

					<div id="fb-feeds" class="row">
						<div class="col-sm-4 col-sm-offset-4">
							<div class="fb-feed-background">&nbsp;</div>
							<div class="my_section fb-feed text-center">
								Weitere Infos, Fotos und viels mehr unter<br />
								<a href="https://www.facebook.com/imsc.ried">
									https://www.facebook.com/imsc.ried
								</a>
								<br />
								<br />
								<a href="https://www.facebook.com/imsc.ried">
									<img src="./imgs/social/fb.png" width="50em" class="img-rounded" />
								</a>
								<br /><br />
								(Auch ohne Facebook-Account!!!).
								<br />
							</div>
						</div>
					</div>
					
				</div>
			</div>
			<?php print( $htmltags->getFacebookFeed() );  ?>
		</section><!-- end section news -->
		
		<!-- ************************************************************************************ -->
		<!-- * CONTACT / FOOTER -->
		<!-- ************************************************************************************ -->
		<?php require_once 'footer.php'; ?>

		
		</div><!-- end content -->

		<!-- ************************************************************************************ -->
		<!-- * ADDITIONAL CONTENT -->
		<!-- ************************************************************************************ -->
		<?php require_once 'addcont.php'; ?>

	</body>
</html>
