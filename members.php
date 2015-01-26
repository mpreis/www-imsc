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
							<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
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
		</nav> <!-- end navigation -->

		<!-- ************************************************************************************ -->
		<!-- * CONTENT -->
		<!-- ************************************************************************************ -->
		<div class="page-wrapper">

		<!-- ************************************************************************************ -->
		<!-- * MEMBERS -->
		<!-- ************************************************************************************ -->
		<section class="my_section" id="members">
			<div class="background">&nbsp;</div>
			<div class="container text-center" id="fb-feeds">

				<div class="col-sm-12 text-center">
					<h3 class="btn btn-danger">Vorstand</h3>
				</div>

				<!-- praesisent / obmann -->
				<div class="row">
					<div class="col-sm-6 ">
						<div class="col-sm-12">
							<h4 class="btn btn-default">Pr&auml;sident</h4>
							<br />&nbsp;
						</div>
						<div class="col-sm-6">
							<a href="./imgs/persons/kraxenberger_franz.jpg" data-toggle="lightbox" data-gallery="multiimages"
								data-title="Pr&auml;sident: Franz Kraxenberger">
								<img class="img-thumbnail img-responsive" src="imgs/persons/kraxenberger_franz.jpg"/>
							</a>
							<h6>Franz Kraxenberger</h6>
						</div>
						<div class="col-sm-6">
							<a href="./imgs/persons/anonym.jpg" data-toggle="lightbox" data-gallery="multiimages"
								data-title="Pr&auml;sident: Franz Kreuzhuber">
								<img class="img-thumbnail img-responsive" src="imgs/persons/anonym.jpg"/>
							</a>
							<h6>Franz Kreuzhuber</h6>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="col-sm-12">
							<h4 class="btn btn-default">Obmann | Stellvertreter</h4>
							<br />&nbsp;
						</div>
						<div class="col-sm-6">
							<a href="./imgs/persons/weilbold_guenter.jpg" data-toggle="lightbox" data-gallery="multiimages"
								data-title="Obmann: G&uuml;nter Weilbold">
								<img class="img-thumbnail img-responsive" src="imgs/persons/weilbold_guenter.jpg"/>
							</a>
							<h6>G&uuml;nter Weilbold</h6>
						</div>
						<div class="col-sm-6">
							<a href="./imgs/persons/preishuber_guenther.jpg" data-toggle="lightbox"
								data-gallery="multiimages" data-title="Obmann-Stellvertreter: G&uuml;nter Preishuber">
								<img class="img-thumbnail img-responsive" src="imgs/persons/preishuber_guenther.jpg"/>
							</a>
							<h6>G&uuml;nther Preishuber</h6>
						</div>
					</div>
				</div>

				<!-- amateursportleiter / kassier -->
				<div class="row">
					<div class="col-sm-6">
						<div class="col-sm-12">
							<h4 class="btn btn-default">Amateursportleiter | Stellvertreter</h4>
							<br />&nbsp;
						</div>
						<div class="col-sm-6">
							<a href="./imgs/persons/preishuber_mario.jpg" data-toggle="lightbox" data-gallery="multiimages"
								data-title="Amateursportleiter: Mario Preishuber">
								<img class="img-thumbnail img-responsive" src="imgs/persons/preishuber_mario.jpg"/>
							</a>
							<h6>Mario Preishuber</h6>
						</div>
						<div class="col-sm-6">
							<a href="./imgs/persons/zechmeister_markus.jpg" data-toggle="lightbox" data-gallery="multiimages"
								data-title="Amateursportleiter-Stellvertreter: Markus Zechmeister">
								<img class="img-thumbnail img-responsive" src="imgs/persons/zechmeister_markus.jpg"/>
							</a>
							<h6>Markus Zechmeister</h6>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="col-sm-12">
							<h4 class="btn btn-default">Kassier | Stellvertreter</h4>
							<br />&nbsp;
						</div>
						<div class="col-sm-6">
							<a href="./imgs/persons/preishuber_guenther.jpg" data-toggle="lightbox" data-gallery="multiimages"
								data-title="Kassier: G&uuml;nther Preishuber">
								<img class="img-thumbnail img-responsive" src="imgs/persons/preishuber_guenther.jpg"/>
							</a>
							<h6>G&uuml;nther Preishuber</h6>
						</div>
						<div class="col-sm-6">
							<a href="./imgs/persons/salomon_engelbert.jpg" data-toggle="lightbox" data-gallery="multiimages"
								data-title="Kassier-Stellvertreter: Engelbert Salomon">
								<img class="img-thumbnail img-responsive" src="imgs/persons/salomon_engelbert.jpg"/>
							</a>
							<h6>Engelbert Salomon</h6>
						</div>
					</div>
				</div>

				<!-- schriftfuehrer / zeugwert -->
				<div class="row">
					<div class="col-sm-6">
						<div class="col-sm-12">
							<h4 class="btn btn-default">Schriftf&uuml;hrer | Stellvertreter</h4>
							<br />&nbsp;
						</div>

						<div class="col-sm-6">
							<a href="./imgs/persons/salomon_erwin.jpg" data-toggle="lightbox" data-gallery="multiimages"
								data-title="Schriftf&uuml;hrer: Erwin Salomon">
								<img class="img-thumbnail img-responsive" src="imgs/persons/salomon_erwin.jpg"/>
							</a>
							<h6>Erwin Salomon</h6>
						</div>
						<div class="col-sm-6">
							<a href="./imgs/persons/wagner_roland.jpg" data-toggle="lightbox" data-gallery="multiimages"
								data-title="Schriftf&uuml;hrer-Stellvertreter: Roland Wagner">
								<img class="img-thumbnail img-responsive" src="imgs/persons/wagner_roland.jpg"/>
							</a>
							<h6>Roland Wagner</h6>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="col-sm-12">
							<h4 class="btn btn-default">Zeugwart | Stellvertreter</h4>
							<br />&nbsp;
						</div>
						<div class="col-sm-6">
							<a href="./imgs/persons/wagner_anton.jpg" data-toggle="lightbox" data-gallery="multiimages"
								data-title="Zeugwart: Anton Wagner">
								<img class="img-thumbnail img-responsive" src="imgs/persons/wagner_anton.jpg"/>
							</a>
							<h6>Anton Wagner</h6>
						</div>
						<div class="col-sm-6">
							<a href="./imgs/persons/gruber_horst.jpg" data-toggle="lightbox" data-gallery="multiimages"
								data-title="Zeugwart: Horst Gruber">
								<img class="img-thumbnail img-responsive" src="imgs/persons/gruber_horst.jpg"/>
							</a>
							<h6>Horst Gruber</h6>
						</div>
					</div>
				</div>

				<!-- honorary members -->
				<div class="col-sm-12 text-center top-space">
					<h3 class="btn btn-danger">Ehrenmitglieder</h3>
				</div>

				<div class="row">
					<div class="col-sm-3">
						<a href="./imgs/persons/hofinger_peter.jpg" data-toggle="lightbox" data-gallery="multiimages"
							data-title="Peter Hofinger">
							<img class="img-thumbnail img-responsive" src="imgs/persons/hofinger_peter.jpg"/>
						</a>
						<h6>Peter Hofinger</h6>
						<b>
							30 Jahre Obmann<br />
							von 1983 bis 2014
						</b><br />
						seit 1973 im Verein
						<br />&nbsp;
					</div>
					<div class="col-sm-3">
						<a href="./imgs/persons/berschl_johann.jpg" data-toggle="lightbox"
							data-gallery="multiimages" data-title="Johann Berschl">
							<img class="img-thumbnail img-responsive" src="imgs/persons/berschl_johann.jpg"/>
						</a>
						<h6>Johann Berschl</h6>
						<b>
							29 Jahre Amateursportleiter<br />
							von 1984 bis 2014
						</b><br />
						seit 1983 im Verein <br />
					</div>
				</div>

				<!-- drivers -->
				<div class="col-sm-12 text-center top-space">
					<h3 class="btn btn-danger">Fahrer</h3>
				</div>

				<div class="row">
					<!-- andreas preishuber -->
					<div class="col-sm-3">
						<a href="./imgs/persons/anonym.jpg"
							data-toggle="lightbox" data-gallery="multiimages"
							data-title="Andreas Preishuber">
							<img class="img-thumbnail" src="imgs/persons/anonym.jpg"/>
						</a>
						<h6>Andreas Preishuber</h6>
					</div>
					<!-- christoph preishuber -->
					<div class="col-sm-3">
						<a href="./imgs/persons/anonym.jpg"
							data-toggle="lightbox" data-gallery="multiimages"
							data-title="Christop Preishuber">
							<img class="img-thumbnail" src="imgs/persons/anonym.jpg"/>
						</a>
						<h6>Christoph Preishuber</h6>
					</div>
					<!-- mario preishuber -->
					<div class="col-sm-3">
						<a href="./imgs/persons/preishuber_mario.jpg"
							data-toggle="lightbox" data-gallery="multiimages"
							data-title="Mario Preishuber">
							<img class="img-thumbnail" src="imgs/persons/preishuber_mario.jpg"/>
						</a>
						<h6>Mario Preishuber</h6>
					</div>
					<!-- engelbert salomon -->
					<div class="col-sm-3">
						<a href="./imgs/persons/salomon_engelbert.jpg"
							data-toggle="lightbox" data-gallery="multiimages"
							data-title="Daniel Wiel&auml;nder">
							<img class="img-thumbnail" src="imgs/persons/salomon_engelbert.jpg"/>
						</a>
						<h6>Engelbert Salomon</h6>
					</div>
				</div>
				<div class="row">
					<!-- markus schwarz -->
					<div class="col-sm-3">
						<a href="./imgs/persons/schwarz_markus.jpg"
							data-toggle="lightbox" data-gallery="multiimages"
							data-title="Markus Schwarz">
							<img class="img-thumbnail" src="imgs/persons/schwarz_markus.jpg"/>
						</a>
						<h6>Markus Schwarz</h6>
					</div>
					<!-- roland wagner -->
					<div class="col-sm-3">
						<a href="./imgs/persons/wagner_roland.jpg"
							data-toggle="lightbox" data-gallery="multiimages"
							data-title="Roland Wagner">
							<img class="img-thumbnail" src="imgs/persons/wagner_roland.jpg"/>
						</a>
						<h6>Roland Wagner</h6>
					</div>
					<!-- daniel wielaender -->
					<div class="col-sm-3">
						<a href="./imgs/persons/anonym.jpg"
							data-toggle="lightbox" data-gallery="multiimages"
							data-title="Daniel Wiel&auml;nder">
							<img class="img-thumbnail" src="imgs/persons/anonym.jpg"/>
						</a>
						<h6>Daniel Wiel&auml;nder</h6>
					</div>
					<!-- markus zechmeister -->
					<div class="col-sm-3">
						<a href="./imgs/persons/zechmeister_markus.jpg"
							data-toggle="lightbox" data-gallery="multiimages"
							data-title="Markus Zechmeister">
							<img class="img-thumbnail" src="imgs/persons/zechmeister_markus.jpg"/>
						</a>
						<h6>Markus Zechmeister</h6>
					</div>
				</div>
			</div>
		</section>

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
/*
		function resizeSections() {
			if(window.screen.width > 480) {
				 document.getElementById('home').style.minHeight = window.screen.height + "px";
				 document.getElementById('calendar').style.minHeight = window.screen.height + "px";
			}
		}

		resizeSections();
*/
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