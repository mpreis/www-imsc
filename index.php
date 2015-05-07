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
		<link rel="stylesheet" href="//code.cdn.mozilla.net/fonts/fira.css">
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
		<!-- <div class="page-wrapper"> -->

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

				<div id="fb-feeds" class="row">

					<!-- important informations -->	
					<div class="col-sm-12">
						<div class="fb-feed-background">&nbsp;</div>
						<div class="my_section fb-feed">
							<div class="col-sm-6">
								<h3>Vorläufige Termin: SLM 2015</h3>
								<ol>
									<li>Lauf SA 02.05.2015	MSC Mühlbach am Hochkönig (Mühlbach)</li>
									<li>Lauf SO 07.06.2015	HC Motorsport (Geretsberg)</li>
									<li>Lauf SO 14.06.2015	MSC Schönau a. Königssee e.V. (Schönau)</li>
									<li>Lauf SO 19.07.2015	MSC Gastein (Wagrein)</li>
									<li>Lauf SO 02.08.2015	CUP-Slalom (Berndorf)</li>
									<li>Lauf SO 23.08.2015	MSC Flachgau (Obertrum)</li>
									<li>Lauf SO 06.09.2015	MSC Schlössl (Schlössl)</li>
									<li>Lauf SO 20.09.2015	MSC Lochen (noch offen)</li>
									<li>Lauf SO 11.10.2015	IMSC Ried (Wildenau)</li>
								</ol>
							</div>
							<div class="col-sm-6">
								<h6>Reglementänderungen (DIV 1):</h6>
								<ul>
									<li>Spurplatten sind nur noch mit ABE/EG-BE erlaubt</li>
									<li>
										Aufteilung der Klasse 4 in Klasse 4A (2001ccm bis 3000ccm) 
										und Klasse 4B (über 3001ccm)
									</li>
									<li>
										Die Spurbreite laut Typenschein/Fahrzeugbrief darf um maximal 7,5% überschritten werden, 
										ab der Saison 2016 sind keine Kotflügelverbreiterungen mehr erlaubt
									</li>
									<li>
										Fixe Startnummern gibt es nur für die ersten 3 Platzierten der Klassenwertung 
										der Vorsaison
									</li>
								</ul>

								<h6>Weitere Infos unter:</h6>
								<a href="http://www.slm-autoslalom.at" target="_blank" class="btn btn-info">http://www.slm-autoslalom.at</a>
								<br />
								<br />
								<br />
							</div>
						</div>
					</div>
				</div>

				<div id="fb-feeds" class="row">

					<!-- important informations -->	
					<div class="col-sm-12">
						<div class="fb-feed-background">&nbsp;</div>
						<div class="my_section fb-feed">
							<div class="col-sm-6">
								<h3>Vorläufige Termin: OÖ-Cup 2015</h3>
								Der Termin des MSC Rossenau hat sich von 13.06. auf 06.06. verschoben!
								<br />
								<ol>
									<li>Lauf SO 19.04.2015 Stolli Motorsport (Haag)</li>
									<li>Lauf SO 26.04.2015 PSV Linz (Grossraum Linz)</li>
									<li>Lauf SO 31.05.2015 IMSC Ried (Andorf)</li>
									<li>Lauf SO 06.06.2015 MSC Rosenau (Wurzeralm)</li>
									<li>Lauf SO 28.06.2015 AMS-Team Rottenmann (Rottenmann)</li>
									<li>Lauf SO 12.07.2015 Arbö Team Steyr / Stolli Motorsport (St. Valentin)</li>
									<li>Lauf SO 26.07.2015 SK Voest (Linz)</li>
									<li>Lauf SO 13.09.2015 Cup-Slalom (Pichling)</li>
									<li>Lauf SO 20.09.2015 SPÖ Power Team Wolfern (Wolfern) Ersatztermin: SO 04.10.</li>
								</ol>
							</div>
							<div class="col-sm-6">
								<h6>Reglementänderungen (DIV 1):</h6>
								In der Saison 2015 ist erstmals das verbauen von einem Gewindefahrwerk in der DIV 1 erlaubt.
								Jedoch muss dieses typisiert sein um an den Start gehen zu dürfen. 
								Im Zuge dieser Erweiterung wird auch der Sturz ALLER Division 1 Fahrzeuge vermehrt kontrolliert. 
								Selbiges gilt für die Bodenfreiheit.
								<br />

								<h6>Weitere Infos unter:</h6>
								<a href="http://www.ooe-cup.at" target="_blank" class="btn btn-info">http://www.ooe-cup.at</a>
								<br />
								(Die neue Homepage geht Ende Februar online)
								<br />
								<br />
								<br />
							</div>
						</div>
					</div>

					<!-- event calendar -->
					<!--
					<div class="col-sm-6 col-sm-offset-1 player-wrapper">
						<div class="player">
							<iframe 								src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;mode=AGENDA&amp;height=600&amp;wkst=2&amp;bgcolor=%23ffffff&amp;src=imsc.ried%40gmail.com&amp;color=%23182C57&amp;src=4lbippnpc3kecmdmlcfmu7c0b4%40group.calendar.google.com&amp;color=%23AB8B00&amp;src=1q0fnqg9mnib8nebph0d6aaop4%40group.calendar.google.com&amp;color=%23A32929&amp;ctz=Europe%2FVienna"
								style=" border-width:0;
								opacity: 60;
								filter: alpha(opacity=6000);
    							opacity: 0.6;
    							filter: alpha(opacity=60);"
								width="400"
								height="600"
								frameborder="0"
								scrolling="no" class="calendar">
							</iframe>
						</div>
					</div>
					-->

					<!-- player / youtube video -->
					<!--
					<div class="col-sm-6 col-sm-offset-1 player-wrapper">
						<div class="player">
							<iframe width="560" height="315" allowfullscreen frameborder="0"
								src="//www.youtube.com/embed/INdVRC2nqzM"></iframe>
						</div>
					</div>
					-->

					<!-- empty box -->
					<!--<div class="col-sm-6 col-sm-offset-1 player-wrappe">&nbsp;</div>-->
				</div>
				<div id="fb-feeds" class="row">
					<div class="col-sm-6">
						<div class="fb-feed-background">&nbsp;</div>
						<div class="my_section fb-feed">
							<h3>Ergebnisse 2014:</h3>
							<a href="./docs/erg_08_imsc_ried.pdf" target="_blank" class="btn btn-info">Ergebnis IMSC</a>
							<a href="./docs/ooe_gesamt.pdf" target="_blank" class="btn btn-info">Ergebnis O&Ouml;-Cup</a>
							<br />
							<br />
							<a href="./docs/slm_gesamt.pdf" target="_blank" class="btn btn-info">Ergebnis SLM (Division) </a>
							<a href="./docs/slm_gesamt_klassen.pdf" target="_blank" class="btn btn-info">Ergebnis SLM (Klassen) </a>
							<br />
							<br />
						</div>
					</div>

					<div class="col-sm-5 col-sm-offset-1">
						<?php if($detect->isMobile()) { ?>
							<div class="my_section fb-feed">
								<div class="fb-like" data-href="https://www.facebook.com/imsc.ried"
									data-layout="standard" data-action="like" data-show-faces="true"
									data-share="true" data-width="200">
								</div>
							</div>
						<?php } else { ?>
							<div class="my_section fb-feed">
								<div class="fb-like" data-href="https://www.facebook.com/imsc.ried"
									data-layout="standard" data-action="like" data-show-faces="true"
									data-share="true" data-width="300">
								</div>
							</div>
						<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</section><!-- end section home -->

		<!-- ************************************************************************************ -->
		<!-- * CONTACT / FOOTER -->
		<!-- ************************************************************************************ -->
		<div class="footer my_section" id="contact">
            <div class="container">

				<div class="row">
					<div class="col-sm-12 text-center top-space">
						<div class="btn btn-danger"><h3>Kontakt</h3></div>
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

		<!--</div> end content -->

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
				 //document.getElementById('calendar').style.minHeight = window.screen.height + "px";
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
