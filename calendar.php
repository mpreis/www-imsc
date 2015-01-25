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
		<meta charset="utf-8">
		<title>IMSC</title>
		<meta name="apple-mobile-web-app-capable" content="yes"/>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
		<meta name="apple-mobile-web-app-status-bar-style" content="black"/>

		<link rel="shortcut icon" href="../imgs/favicon.png">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<!-- <link rel="stylesheet" href="../css/bootstrap-theme.min.css"> -->

		<link href="../css/lightbox_dark.css" rel="stylesheet">

		<script type="text/javascript" src="../js/jquery.min.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../js/lightbox.js"></script>

		<link rel="stylesheet" href="../css/style.css">
	</head>

	<body onresize="resizeSections()">
		<!-- ************************************************************************************ -->
		<!-- * NAVIGATION BAR -->
		<!-- ************************************************************************************ -->
		<nav role="navigation" class="navbar navbar-default" id="header">
			<div class="navbar-header">
				<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand brand" href="./index.php">
					<?php  if(!$detect->isMobile()) { ?>
						<img src="imgs/favicon.png" class="navbar-brand-img my-brand-img" />
						<div class="navbar-brand-text my-brand-text">
							Innviertler<br />Motor Sport Club
						</div>
					<?php } else { ?>
						<img src="imgs/favicon_small.png" class="navbar-brand-img my-brand-img" />
						<div class="navbar-brand-text">
							IMSC
						</div>
					<?php } ?>
				</a>
			</div>
			<div id="navbarCollapse" class="collapse navbar-collapse pull-right">
				<ul class="nav navbar-nav">
					<li>
						<br />
						<a href="./index.php" data-toggle="collapse" data-target=".nav-collapse">
							<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
							HOME
						</a>
					</li>
					<li>
						<br />
						<a href="./news.php" data-toggle="collapse" data-target=".nav-collapse">
							<span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
							NEWS
						</a>
					</li>
					<li>
						<br />
						<a href="./sponsors.php" data-toggle="collapse" data-target=".nav-collapse">
							<span class="glyphicon glyphicon-gift" aria-hidden="true"></span>
							SPONSOREN
						</a>
					</li>
					<li>
						<br />
						<a href="./calendar.php" data-toggle="collapse" data-target=".nav-collapse">
							<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
							KALENDER
						</a>
					</li>
					<li>
						<br />
						<a href="./members.php" data-toggle="collapse" data-target=".nav-collapse">
							<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
							MITGLIEDER
						</a>
					</li>
					<li>
						<br />
						<a href="#contact" data-toggle="collapse" data-target=".nav-collapse">
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
							KONTAKT
						</a>
					</li>
				</ul>
			</div>
		</nav> <!-- end navigation -->bar navbar-default" id="header">
			<div class="navbar-header">
				<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand brand" href="./index.php">
					<?php  if(!$detect->isMobile()) { ?>
						<img src="imgs/favicon.png" class="navbar-brand-img my-brand-img" />
						<div class="navbar-brand-text my-brand-text">
							Innviertler<br />Motor Sport Club
						</div>
					<?php } else { ?>
						<img src="imgs/favicon_small.png" class="navbar-brand-img my-brand-img" />
						<div class="navbar-brand-text">
							IMSC
						</div>
					<?php } ?>
				</a>
			</div>
			<div id="navbarCollapse" class="collapse navbar-collapse pull-right">
				<ul class="nav navbar-nav">
					<li>
						<br />
						<a href="./news.php" data-toggle="collapse" data-target=".nav-collapse">
							NEWS
						</a>
					</li>
					<li>
						<br />
						<a href="./sponsors.php" data-toggle="collapse" data-target=".nav-collapse">
							SPONSOREN
						</a>
					</li>
					<li>
						<br />
						<a href="./calendar.php" data-toggle="collapse" data-target=".nav-collapse">
							KALENDER
						</a>
					</li>
					<li>
						<br />
						<a href="./members.php" data-toggle="collapse" data-target=".nav-collapse">
							MITGLIEDER
						</a>
					</li>
					<li>
						<br />
						<a href="#contact" data-toggle="collapse" data-target=".nav-collapse">
							KONTAKT
						</a>
					</li>
				</ul>
			</div>
		</nav> <!-- end navigation -->

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
					<h3 class="btn btn-danger">Kalender</h3>
				</div>
				<br /><br />
				<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23e3e9ff&amp;src=imsc.ried%40gmail.com&amp;color=%23182C57&amp;src=4lbippnpc3kecmdmlcfmu7c0b4%40group.calendar.google.com&amp;color=%23A32929&amp;src=1q0fnqg9mnib8nebph0d6aaop4%40group.calendar.google.com&amp;color=%23AB8B00&amp;ctz=Europe%2FVienna" class="cal_div cal_div_month cal" frameborder="0" scrolling="no"></iframe>

				<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;mode=AGENDA&amp;height=600&amp;wkst=2&amp;bgcolor=%23ffffff&amp;src=imsc.ried%40gmail.com&amp;color=%23182C57&amp;src=4lbippnpc3kecmdmlcfmu7c0b4%40group.calendar.google.com&amp;color=%23AB8B00&amp;src=1q0fnqg9mnib8nebph0d6aaop4%40group.calendar.google.com&amp;color=%23A32929&amp;ctz=Europe%2FVienna" class="cal_div cal_div_events cal_events" frameborder="0" scrolling="no"></iframe>


			</div> <!-- end container -->
		</section> <!-- end section calendar -->

		<!-- ************************************************************************************ -->
		<!-- * CONTACT / FOOTER -->
		<!-- ************************************************************************************ -->
		<div class="footer my_section" id="contact">
            <div class="container">

				<div class="row">
					<div class="col-sm-12 text-center top-space">
						<h3 class="btn btn-danger">Kontakt</h3>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-1">&nbsp;</div>
					<div class="col-sm-1">
						<div class="social-btns row">
							<a href="https://www.facebook.com/imsc.ried" target="blank">
								<div><img src="./imgs/social/fb.png" alt=""></div>
								<div><img src="./imgs/social/fb.png" alt=""></div>
							</a>
							<!--
							<a href="#">
								<div><img src="./imgs/social/g+.png" alt=""></div>
								<div><img src="./imgs/social/g+.png" alt=""></div>
							</a>
							-->
		                </div>
					</div>
					<div class="col-sm-2">
						<address>
							<strong>Obmann<br />G&uuml;nter Weilbold</strong><br>
							<abbr title="Phone"><span class="glyphicon glyphicon-earphone"></span></abbr>
							&nbsp;+43 660 5793350<br />
							<span class="glyphicon glyphicon-envelope"></span>
							&nbsp;<a href="mailto:g.weilbold@aon.at">g.weilbold@aon.at</a>
						</address>
					</div>
					<div class="col-sm-2">
						<address>
							<strong>Obmann-Stellvertreter<br />G&uuml;nther Preishuber</strong><br>
							<abbr title="Phone"><span class="glyphicon glyphicon-earphone"></span></abbr>
							&nbsp;+43 650 2747445<br />
							<span class="glyphicon glyphicon-envelope"></span>
							&nbsp;<a href="mailto:g.preishuber@aon.at">g.preishuber@aon.at</a>
						</address>
					</div>
					<div class="col-sm-2">
						<address>
							<strong>Amateursportleiter<br />Mario Preishuber</strong><br>
							<abbr title="Phone"><span class="glyphicon glyphicon-earphone"></span></abbr>
							&nbsp;+43 650 6733007<br />
							<span class="glyphicon glyphicon-envelope"></span>
							&nbsp;<a href="mailto:imsc.ried@gmail.com">imsc.ried@gmail.com</a>
						</address>
					</div>
					<div class="col-sm-3">
						<address>
							<strong>Amateursportleiter-Stellverterter<br />Markus Zechmeister</strong><br>
							<abbr title="Phone"><span class="glyphicon glyphicon-earphone"></span></abbr>
							&nbsp;+43 664 5405475<br />
							<span class="glyphicon glyphicon-envelope"></span>
							&nbsp;<a href="mailto:meister@reich-kfz.at">meister@reich-kfz.at</a>
						</address>
					</div>
					<div class="col-sm-2">&nbsp;</div>
				</div>
				<div class="additional-links">
                    <!--Be sure to take a look to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a><br />-->
                </div>
            </div>
		</div>

		</div><!-- end content -->

		<!-- ************************************************************************************ -->
		<!-- * ADDITIONAL CONTENT -->
		<!-- ************************************************************************************ -->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/de_DE/sdk.js#xfbml=1&appId=481834645275259&version=v2.0";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		<?php
		if(!$detect->isMobile()) {
		?>
		<script>

		function resizeSections() {
			if(window.screen.width > 480) {
				 document.getElementById('home').style.minHeight = window.screen.height + "px";
				 document.getElementById('calendar').style.minHeight = window.screen.height + "px";
			}
		}

		resizeSections();
		</script>
		<?php } ?>

		<!-- lightbox - images -->
		<script type="text/javascript">
			$(document).ready(function ($) {
				// delegate calls to data-toggle="lightbox"
				$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
					event.preventDefault();
					return $(this).ekkoLightbox({
						always_show_close: true
					});
				});
			});
		</script>

		<!-- navigation -->
		<script>
			$(function() {
				$('.nav a').on('click', function(){
					if($('.navbar-toggle').css('display') !='none')
					{
						$(".navbar-toggle").trigger( "click" );
					}
				});
			});
		</script>
	</body>
</html>
