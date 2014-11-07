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
				<a class="navbar-brand brand" href="#home">
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
						<a href="#news" data-toggle="collapse" data-target=".nav-collapse">
							NEWS
						</a>
					</li>
					<li>
						<br />
						<a href="#sponsoren" data-toggle="collapse" data-target=".nav-collapse">
							SPONSOREN
						</a>
					</li>
					<li>
						<br />
						<a href="#calendar" data-toggle="collapse" data-target=".nav-collapse">
							KALENDER
						</a>
					</li>
					<li>
						<br />
						<a href="#members" data-toggle="collapse" data-target=".nav-collapse">
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
		<!-- * HOME -->
		<!-- ************************************************************************************ -->
		<section class="my_section" id="home" >
			<?php print( $htmltags->getHomeBackground() ); ?>
			<div class="container">
				<div id="fb-feeds" class="row">
					<div class="col-sm-5">
						<div class="fb-feed-background">&nbsp;</div>
						<div class="my_section fb-feed">
							<h1>Innviertler Motor Sport Club</h1>
							<?php print($fb_infos->getAbout()); ?>
							<br />
						</div>
					</div>
					<!-- important informations -->

					<div class="col-sm-6 col-sm-offset-1">
						<div class="fb-feed-background">&nbsp;</div>
						<div class="my_section fb-feed">
							<div class="col-sm-12 text-center">
								<h2>Danke!</h2>
								<img src="./imgs/we.jpg" class="img-rounded" />
								<p>
									<h6>
										<a href="https://plus.google.com/photos/109124545640923797926/albums/6069379009484849441?banner=pwa&authkey=CLPIyu-2qsHawgE"
											target="_blank" class="btn btn-info">Hier</a>
										sind weitere Fotos vom Slalom zu finden. <br />
										<a href="./erg_08_imsc_ried.pdf" target="_blank" class="btn btn-info">Ergebnis IMSC</a>
										<a href="./ooe_gesamt.pdf" target="_blank" class="btn btn-info">Ergebnis O&Ouml;-Cup</a>
										<a href="./slm_gesamt.pdf" target="_blank" class="btn btn-info">Ergebnis SLM (Division) </a>
										<a href="./slm_gesamt_klassen.pdf" target="_blank" class="btn btn-info">Ergebnis SLM (Klassen) </a>
										<small>(Fotograf: Robert Kreuzer)</small>
									</h6><br />
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
					<div class="col-sm-6 col-sm-offset-1 player-wrappe">&nbsp;</div>
				</div>
				<div id="fb-feeds" class="row" style="margin-top:10px">
					<div class="col-sm-5 btn btn-default">
						<div class="my_section fb-feed">
							<div class="fb-like" data-href="https://www.facebook.com/imsc.ried"
								data-layout="standard" data-action="like" data-show-faces="true"
								data-share="true" data-width="300">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- end section home -->

		<!-- ************************************************************************************ -->
		<!-- * NEWS -->
		<!-- ************************************************************************************ -->
		<section class="my_section" id="news">
			<div class="background">&nbsp;</div>
			<div class="container">
				<div class="col-sm-12 text-center">
					<h3 class="btn btn-danger">News</h3>
				</div>
			</div>
			<?php print( $htmltags->getFacebookFeed() );  ?>
		</section><!-- end section news -->

		<!-- ************************************************************************************ -->
		<!-- * NEWS -->
		<!-- ************************************************************************************ -->
		<section class="my_section" id="sponsoren">
			<?php print( $htmltags->getHomeBackground() ); ?>
			<div class="container">
				<div class="col-sm-12 text-center">
					<h3 class="btn btn-danger">Sponsoren</h3>
					<br />
					<h3 class="btn btn-default">Ein herzliches Dankesch&ouml;n an alle die uns unterst&uuml;tzt haben!</h3>
					<br />
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						Aichinger Haustechnik<br />
						Autohaus Edinger<br />
						Autohaus Ford Destinger<br />
						Autohaus Forthuber<br />
						Autohaus Karl Deschberger GmbH<br />
						Autohaus Mühlbacher<br />
						Autohaus Opel Hatzmann<br />
						Autohaus Renault Kriegner<br />
						Autohaus Skoda Schröcker<br />
						Autohaus VW Priewasser<br />
						Baier Erwin Metallverarbeitung<br />
						Bauunternehmen Huber Wimmer<br />
						Berni's Backstube<br />
						Cafe Lavazza<br />
						Christian Reich GmbH Nutzfahrzeug<br />
						Elektro Moser GmbH<br />
						Esterer Geräteverleih<br />
						ETL<br />
						Fa. Brambeger Engelbert Transportunternehmen<br />
					</div>
					<div class="col-md-4">
						Fa. Neonex Werkzeuge, Maschienen, Arbeitsschutz<br />
						Fahrschule yo-yo<br />
						Faschang Karl<br />
						Faschang Werkzeugbau GmbH<br />
						Ferdinand Frauscher Wohnkeramik<br />
						FKS Industrieböden<br />
						FOX HOLZ Fußboden und Objektsysteme GesmbH<br />
						Führer Holzbau GmbH<br />
						Gärtnerrei Irran<br />
						Georg Katzlberger GmbH & Co KG<br />
						Haus der Frisur Gerlinde Kremser<br />
						Holzmarkt Moser<br />
						KFZ Hubinger<br />
						KFZ Reisinger Gottfied Reisinger<br />
						KFZ Zubehör Brand<br />
						KFZ Zubehör Schrattenecker<br />
						Kletzl Der Innviertler Metzger<br />
						Lagerhaus Aspach<br />
						Land Lebt Auf Diermaier<br />
					</div>
					<div class="col-md-4">
						Moden Mittermayr<br />
						ÖAMTC Ortsgruppe<br />
						Priller Hermann Gas, Wasser, Heizung<br />
						Raiffeisen Bank Aspach<br />
						Reifen & KFZ-Teile Johannes Lengauer<br />
						Revital Aspach<br />
						Schönberger Alternative Haustechnik<br />
						Sparkasse<br />
						Starzinger GmbH & Co KG<br />
						Stegmühl Baustoffhandel u. Baugeräteverleih<br />
						Strabag<br />
						Tiefenthaler Landtechnik<br />
						Tischlerei Leimhofer<br />
						Toyota Innviertel GmbH<br />
						Turbo Drive<br />
						Volksbank Aspach<br />
						Weiermann<br />
						Werbeagentur creartive Gufler<br />
						Zweirad Ginzinger<br />
					</div>
				</div>
			</div>
		</section><!-- end section news -->

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
