<?php
	/**
	 *
 	 * @author	Mario Preishuber <preishuber.mario@gmail.com>
 	 */
	namespace IMSC;

	use \IMSC\php\HtmlTags;
	use \IMSC\php\MobileDetect;

	require_once 'php/HtmlTags.php';
	require_once 'php/MobileDetect.php';

	$htmltags = new HtmlTags();
	$detect = new MobileDetect();
?>

<!DOCTYPE html>
<html lang="en" xmlns:fb="http://ogp.me/ns/fb#">
	<head>
		<title>IMSC | Kalendar</title>
		<!-- ************************************************************************************ -->
		<!-- * META DATA / STYLES -->
		<!-- ************************************************************************************ -->
		<?php require_once 'headinc.php'; ?>
	</head>

	<body onresize="resizeSections('calendar')">
		<!-- ************************************************************************************ -->
		<!-- * NAVIGATION BAR -->
		<!-- ************************************************************************************ -->
		<?php require_once 'nav.php'; ?>

		<!-- ************************************************************************************ -->
		<!-- * CONTENT -->
		<!-- ************************************************************************************ -->
		<div class="page-wrapper">

		<!-- ************************************************************************************ -->
		<!-- * CALENDAR -->
		<!-- ************************************************************************************ -->
		<section class="my_section" id="calendar">
			<?php print( $htmltags->getHomeBackground() ); ?>
			<div class="container">
				<div class="col-sm-12 text-center">
					<div class="btn btn-danger"><h3>Kalendar</h3></div>
				</div>
				<br /><br />
				<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23e3e9ff&amp;src=imsc.ried%40gmail.com&amp;color=%23182C57&amp;src=4lbippnpc3kecmdmlcfmu7c0b4%40group.calendar.google.com&amp;color=%23A32929&amp;src=1q0fnqg9mnib8nebph0d6aaop4%40group.calendar.google.com&amp;color=%23AB8B00&amp;ctz=Europe%2FVienna" class="cal_div cal_div_month cal" frameborder="0" scrolling="no"></iframe>

				<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;mode=AGENDA&amp;height=600&amp;wkst=2&amp;bgcolor=%23ffffff&amp;src=imsc.ried%40gmail.com&amp;color=%23182C57&amp;src=4lbippnpc3kecmdmlcfmu7c0b4%40group.calendar.google.com&amp;color=%23AB8B00&amp;src=1q0fnqg9mnib8nebph0d6aaop4%40group.calendar.google.com&amp;color=%23A32929&amp;ctz=Europe%2FVienna" class="cal_div cal_div_events cal_events" frameborder="0" scrolling="no"></iframe>


			</div> <!-- end container -->
		</section> <!-- end section calendar -->

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
