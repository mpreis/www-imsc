<?php
	/**
	 *
 	 * @author	Mario Preishuber <preishuber.mario@gmail.com>
 	 */
	namespace IMSC;

	use \IMSC\php\Content;
	use \IMSC\php\MobileDetect;

	require_once 'php/Content.php';
	require_once 'php/MobileDetect.php';

	$content = new Content();
	$detect = new MobileDetect();
?>

<!DOCTYPE html>
<html lang="en" xmlns:fb="http://ogp.me/ns/fb#">
	<head>
		<title>IMSC | Sponsoren</title>
		<!-- ************************************************************************************ -->
		<!-- * META DATA / STYLES -->
		<!-- ************************************************************************************ -->
		<?php require_once 'common/headinc.php'; ?>
	</head>

	<body>
		<!-- ************************************************************************************ -->
		<!-- * NAVIGATION BAR -->
		<!-- ************************************************************************************ -->
		<?php require_once 'common/nav.php'; ?>

		<!-- ************************************************************************************ -->
		<!-- * SPONSORS -->
		<!-- ************************************************************************************ -->
		<section class="my_section" id="sponsors">
			<?php
				$content->printBackground();
				$content->printContent(Content::SPONSORS); 
			?>
		</section><!-- end section news -->

		<!-- ************************************************************************************ -->
		<!-- * CONTACT / FOOTER -->
		<!-- ************************************************************************************ -->
		<?php require_once 'common/footer.php'; ?>

		</div><!-- end content -->

		<!-- ************************************************************************************ -->
		<!-- * ADDITIONAL CONTENT -->
		<!-- ************************************************************************************ -->
		<?php require_once 'common/addcont.php'; ?>

	</body>
</html>
