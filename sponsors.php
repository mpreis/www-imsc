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
							Innviertler<br>Motor Sport Club
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
						<br>
						<a href="./index.php" data-toggle="collapse" data-target=".nav-collapse">
							<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
							HOME
						</a>
					</li>
					<li>
						<br>
						<a href="./news.php" data-toggle="collapse" data-target=".nav-collapse">
							<span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
							NEWS
						</a>
					</li>
					<li>
						<br>
						<a href="./sponsors.php" data-toggle="collapse" data-target=".nav-collapse">
							<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
							SPONSOREN
						</a>
					</li>
					<li>
						<br>
						<a href="./calendar.php" data-toggle="collapse" data-target=".nav-collapse">
							<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
							KALENDER
						</a>
					</li>
					<li>
						<br>
						<a href="./members.php" data-toggle="collapse" data-target=".nav-collapse">
							<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
							MITGLIEDER
						</a>
					</li>
					<li>
						<br>
						<a href="#contact" data-toggle="collapse" data-target=".nav-collapse">
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
							KONTAKT
						</a>
					</li>
				</ul>
			</div>
		</nav> <!-- end navigation -->

		<!-- ************************************************************************************ -->
		<!-- * SPONSORS -->
		<!-- ************************************************************************************ -->
		<section class="my_section" id="sponsors">
			<?php print( $htmltags->getHomeBackground() ); ?>
			<div class="container">
				<div class="col-sm-12 text-center">
					<div class="btn btn-danger"><h3>Sponsoren</h3></div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-offset-3 col-sm-6 text-center">
						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.aichinger-haustechnik.at/'>http://www.aichinger-haustechnik.at/</a>" 
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Aichinger Haustechnik">
							Aichinger Haustechnik</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.autohaus-edinger.at/'>http://www.autohaus-edinger.at</a>" 
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Autohaus Edinger">
							Autohaus Edinger</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="" data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Autohaus Ford Destinger">
							Autohaus Ford Destinger</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.citroen-partner.at/forthuber'>http://www.citroen-partner.at/forthuber</a>"
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Autohaus Forthuber">
							Autohaus Forthuber</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.auto-deschberger.at/'>http://www.auto-deschberger.at/</a>"
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Autohaus Karl Deschberger GmbH">
							Autohaus Karl Deschberger GmbH</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.hyundai.at/Dealers/muehlbacher/Home.aspx'>Hyundai Mühlbacher</a>" data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Autohaus Mühlbacher">
							Autohaus Mühlbacher</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.auto-hatzmann.at/'>http://www.auto-hatzmann.at/</a>"
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Autohaus Opel Hatzmann">
							Autohaus Opel Hatzmann</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.kriegner.at/'>http://www.kriegner.at/</a>"
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Autohaus Renault Kriegner">
							Autohaus Renault Kriegner</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.schroecker.at/'>http://www.schroecker.at/</a>" 
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Autohaus Skoda Schröcker">
							Autohaus Skoda Schröcker</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.priewasserzentrum.at/'>http://www.priewasserzentrum.at/</a>" 
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Autohaus VW Priewasser">
							Autohaus VW Priewasser</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.baier-metall.at/'>http://www.baier-metall.at/<a>"
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Baier Erwin Metallverarbeitung">
							Baier Erwin Metallverarbeitung</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.huber-wimmer.at/'>http://www.huber-wimmer.at/</a>"
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Bauunternehmen Huber Wimmer">
							Bauunternehmen Huber Wimmer</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="" data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Berni's Backstube">
							Berni's Backstube</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.lavazza-braunau.at/'>http://www.lavazza-braunau.at/</a>"
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Cafe Lavazza">
							Cafe Lavazza</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.reich-kfz.at/'>http://www.reich-kfz.at/</a>"
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Christian Reich GmbH Nutzfahrzeug">
							Christian Reich GmbH Nutzfahrzeug</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="" data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Elektro Moser GmbH">
							Elektro Moser GmbH</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.esterermax.at/'>http://www.esterermax.at/</a>"
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Esterer Geräteverleih">
							Esterer Geräteverleih</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.etl-elektrotechnik.at/'>http://www.etl-elektrotechnik.at/</a>"
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									ETL">
							ETL</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="" data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									EUROL">
							EUROL</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom" data-html="true"
							data-content="
								<a href='http://www.event-techniker.at/'>http://www.event-techniker.at/</a><br>
								<br>
								Die Firma Event-Techniker aus Kirchheim im Innkreis bietet neben dem Verleih von Veranstaltungstechnik aus den Bereichen Ton, Licht, Video und Bühnenbau auch die dazugehörigen Dienstleistungen an. Vom Verleih einer kleinen Lautsprecherbox ab Lager bis hin  zur Komplettausstattung für Ihr Event inkl. Transport, Auf & Abbau sowie der Betreuung der Technik und der Künstler sind Sie hier genau richtig. Als Werkmeister für Veranstaltungs- und Eventtechnik berät Sie Wolfgang Danner gerne und erstellt Ihnen für Ihre Veranstaltung ein unverbindliches und individuelles  Angebot."
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Event-Techniker: Wolfgang Danner">
							Event-Techniker</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="" data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Fa. Brambeger Engelbert Transportunternehmen">
							Fa. Brambeger Engelbert Transportunternehmen</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.neonex.at/'>http://www.neonex.at/</a>"
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Fa. Neonex Werkzeuge, Maschienen, Arbeitsschutz">
							Fa. Neonex Werkzeuge, Maschienen, Arbeitsschutz</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.yo-yo.at/'>http://www.yo-yo.at/</a>"
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Fahrschule yo-yo">
							Fahrschule yo-yo</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="" data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Faschang Karl">
							Faschang Karl</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.faschang.at/'>http://www.faschang.at/</a>"
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Faschang Werkzeugbau GmbH">
							Faschang Werkzeugbau GmbH</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.wohnkeramik.at/'>http://www.wohnkeramik.at/</a>"
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Ferdinand Frauscher Wohnkeramik">
							Ferdinand Frauscher Wohnkeramik</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.fks.at/'>http://www.fks.at/</a>"
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									FKS Industrieböden">
							FKS Industrieböden</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.foxholz.at/'>http://www.foxholz.at/</a>"
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									FOX HOLZ Fußboden und Objektsysteme GesmbH">
							FOX HOLZ Fußboden und Objektsysteme GesmbH</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.fuehrer-holzbau.at/'>http://www.fuehrer-holzbau.at/</a>"
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Führer Holzbau GmbH">
							Führer Holzbau GmbH</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://blumen-irran.at/'>http://blumen-irran.at/</a>"
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Gärtnerrei Irran">
							Gärtnerrei Irran</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://katzlberger.at/'>http://katzlberger.at/</a>"
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Georg Katzlberger GmbH &amp; Co KG">
							Georg Katzlberger GmbH &amp; Co KG</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="" data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Haus der Frisur Gerlinde Kremser">
							Haus der Frisur Gerlinde Kremser</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.moser-holz.at/'>http://www.moser-holz.at/</a>" 
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Holzmarkt Moser">
							Holzmarkt Moser</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.kfz-hubinger.at/'>http://www.kfz-hubinger.at/</a>" data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									KFZ Hubinger">
							KFZ Hubinger</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.kfz-reisinger.at/'>http://www.kfz-reisinger.at/</a>"
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									KFZ Reisinger">
							KFZ Reisinger</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.kfz-brand.at/'>http://www.kfz-brand.at/</a>"
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									KFZ Zubehör Brand">
							KFZ Zubehör Brand</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.kfz-schrattenecker.at/'>http://www.kfz-schrattenecker.at/</a>" 
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									KFZ Zubehör Schrattenecker">
							KFZ Zubehör Schrattenecker</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.kletzl.at/'>http://www.kletzl.at/</a>"
							data-html="true"
							title="Kletzl Der Innviertler Metzger">
							Kletzl Der Innviertler Metzger</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.lagerhaus.at/'>http://www.lagerhaus.at/</a>" 
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Lagerhaus Aspach">
							Lagerhaus Aspach</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.landlebtauf.com/index.php?id=88'>http://www.landlebtauf.com/</a>"
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Land Lebt Auf Diermaier">
							Land Lebt Auf Diermaier</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.mode-mittermayr.at/'>http://www.mode-mittermayr.at/</a>"
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Moden Mittermayr">
							Moden Mittermayr</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.oeamtc.at/'>http://www.oeamtc.at/</a>"
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									ÖAMTC Ortsgruppe">
							ÖAMTC Ortsgruppe Aspach</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.priller.at/'>http://www.priller.at/</a>" 
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Priller Hermann Gas, Wasser, Heizung">
							Priller Hermann Gas, Wasser, Heizung</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.raiffeisen-ooe.at/aspach-wildenau'>http://www.raiffeisen-ooe.at/aspach-wildenau</a>" 
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Raiffeisen Bank Aspach">
							Raiffeisen Bank Aspach</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="" data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Reifen &amp; KFZ-Teile Johannes Lengauer">
							Reifen &amp; KFZ-Teile Johannes Lengauer</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.revital-aspach.at/'>http://www.revital-aspach.at/</a>" 
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Revital Aspach">
							Revital Aspach</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.wohlig-warm.at/'>http://www.wohlig-warm.at/</a>" 
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Schönberger Alternative Haustechnik">
							Schönberger Alternative Haustechnik</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.sparkasse.at/'>http://www.sparkasse.at/</a>" 
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Sparkasse Aspach">
							Sparkasse Aspach</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://xps-stranzinger.at/'>http://xps-stranzinger.at/</a>"
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Starzinger GmbH &amp; Co KG">
							Starzinger GmbH &amp; Co KG</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="" data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Stegmühl Baustoffhandel u. Baugeräteverleih">
							Stegmühl Baustoffhandel u. Baugeräteverleih</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.strabag.at/'>http://www.strabag.at/</a>" 
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Strabag">
							Strabag</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.tiefenthaler-landtechnik.at/'>http://www.tiefenthaler-landtechnik.at/</a>"
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Tiefenthaler Landtechnik">
							Tiefenthaler Landtechnik</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.tischlerei-leimhofer.at/'>http://www.tischlerei-leimhofer.at/</a>"
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Tischlerei Leimhofer">
							Tischlerei Leimhofer</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.toyota-innviertel.at/'>http://www.toyota-innviertel.at/</a>"
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Toyota Innviertel GmbH">
							Toyota Innviertel GmbH</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='https://de-de.facebook.com/pages/Turbo-Drive/149963855131985'>Turbo Drive (Facebook)</a>" 
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Turbo Drive">
							Turbo Drive</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.vbsab.at'>http://www.vbsab.at</a>" 
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Volksbank Aspach">
							Volksbank Aspach</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.weiermann.at/'>http://www.weiermann.at/</a>"
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Weiermann">
							Weiermann</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.creartiv-gufler.at/'>http://www.creartiv-gufler.at/</a>"
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Werbeagentur creartive Gufler">
							Werbeagentur creartive Gufler</a>

						<a tabindex="0" class="btn btn-sm btn-info" role="button" data-toggle="popover" 
							data-trigger="focus" data-placement="bottom"
							data-content="
								<a href='http://www.ginzinger.at/filialen/ried'>http://www.ginzinger.at/filialen/ried</a>" 
							data-html="true"
							title="<a href='#'onclick='togglePopover();'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
									Zweirad Ginzinger">
							Zweirad Ginzinger</a>

					</div>
				</div>
			</div>
		</section><!-- end section news -->

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
							<strong>Obmann<br>G&uuml;nter Weilbold</strong><br>
							<abbr title="Phone"><span class="glyphicon glyphicon-earphone"></span></abbr>
							&nbsp;+43 660 5793350<br>
							<span class="glyphicon glyphicon-envelope"></span>
							&nbsp;<a href="mailto:g.weilbold@aon.at">g.weilbold@aon.at</a>
						</address>
					</div>
					<div class="col-sm-2">
						<address>
							<strong>Obmann-Stellvertreter<br>G&uuml;nther Preishuber</strong><br>
							<abbr title="Phone"><span class="glyphicon glyphicon-earphone"></span></abbr>
							&nbsp;+43 650 2747445<br>
							<span class="glyphicon glyphicon-envelope"></span>
							&nbsp;<a href="mailto:g.preishuber@aon.at">g.preishuber@aon.at</a>
						</address>
					</div>
					<div class="col-sm-2">
						<address>
							<strong>Amateursportleiter<br>Mario Preishuber</strong><br>
							<abbr title="Phone"><span class="glyphicon glyphicon-earphone"></span></abbr>
							&nbsp;+43 650 6733007<br>
							<span class="glyphicon glyphicon-envelope"></span>
							&nbsp;<a href="mailto:imsc.ried@gmail.com">imsc.ried@gmail.com</a>
						</address>
					</div>
					<div class="col-sm-3">
						<address>
							<strong>Amateursportleiter-Stellverterter<br>Markus Zechmeister</strong><br>
							<abbr title="Phone"><span class="glyphicon glyphicon-earphone"></span></abbr>
							&nbsp;+43 664 5405475<br>
							<span class="glyphicon glyphicon-envelope"></span>
							&nbsp;<a href="mailto:meister@reich-kfz.at">meister@reich-kfz.at</a>
						</address>
					</div>
					<div class="col-sm-2">&nbsp;</div>
				</div>
				<div class="additional-links">
                    <!--Be sure to take a look to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a><br>-->
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

		<script> 
			$(function () { $('[data-toggle="popover"]').popover()})
			function togglePopover () { $('[data-toggle="popover"]').popover()}
		</script>

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
