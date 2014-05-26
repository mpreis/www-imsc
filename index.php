<!DOCTYPE html>
<html lang="en" xmlns:fb="http://ogp.me/ns/fb#">
	<head>
		<meta charset="utf-8">
		<title>IMSC</title>

		<meta name="apple-mobile-web-app-capable" content="yes"/>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
		<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
		
		<link rel="shortcut icon" href="./imgs/favicon.png">
		<link rel="stylesheet" href="./css/bootstrap.min.css">
		<link rel="stylesheet" href="./css/bootstrap-theme.min.css">
		
        <link href="./css/lightbox_dark.css" rel="stylesheet">
    	
		<script type="text/javascript" src="./js/jquery.min.js"></script>
		<script type="text/javascript" src="./js/bootstrap.min.js"></script>
		<script type="text/javascript" src="./js/lightbox.js"></script>
		
		<link rel="stylesheet" href="./css/style.css">
		
		<?php include './php/fb_lib.php'; ?>
		<?php include './php/carousel_lib.php'; ?>
	</head>

	<body>
				
		<!-- ************************************************************************************ -->
		<!-- * NAVIGATION BAR -->
		<!-- ************************************************************************************ -->
		<nav role="navigation" class="navbar navbar-default bg-midnight-blue" id="header">
			<div class="navbar-header">
	            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <a class="navbar-brand brand" href="#home">
					<img src="imgs/favicon.png" class="navbar-brand-img my-brand-img" />
					<div class="navbar-brand-text my-brand-text">
						Innviertler<br />
						Motor Sport Club
					</div>
				</a>
			</div>
			<div id="navbarCollapse" class="collapse navbar-collapse pull-right">
				<ul class="nav navbar-nav">
					<li>
						<a href="#news" data-toggle="collapse" data-target=".nav-collapse">
							NEWS
						</a>
					</li>
					<li>
						<a href="#calendar" data-toggle="collapse" data-target=".nav-collapse">
							KALENDAR
						</a>
					</li>
					<li>
						<a href="#management" data-toggle="collapse" data-target=".nav-collapse">
							VORSTAND
						</a>
					</li>
					<li>
						<a href="#honorary_members" data-toggle="collapse" data-target=".nav-collapse">
							EHRENMITGLIEDER
						</a>
					</li>
					<li>
						<a href="#drivers" data-toggle="collapse" data-target=".nav-collapse">
							FAHRER
						</a>
					</li>
					<li>
						<a href="#contact" data-toggle="collapse" data-target=".nav-collapse">
							KONTAKT
						</a>
					</li>					
				</ul>
			</div>
		</nav>
		                             		
		<!-- ************************************************************************************ -->
		<!-- * CONTENT -->
		<!-- ************************************************************************************ -->
		<div class="page-wrapper">

		<!-- ************************************************************************************ -->
		<!-- * HOME -->
		<!-- ************************************************************************************ -->
		<section class="my_section" id="home">
			<div class="background">&nbsp;</div>
			<div class="container">
				<div id="fb-feeds" class="rows">
					<div class="col-sm-4">
						<h1>Innviertler Motor Sport Club</h1>
						<p>
							<?php print(getFacebookAbout()); ?>
							<br /><br />
							...Motorsport f&uuml;r Jedermann und Jedefrau
							<br />
							<div class="fb-like" 
								data-href="http://imsc-ried.com/" 
								data-layout="button_count" 
								data-action="like" 
								data-show-faces="true" 
								data-share="true">
							</div>

						</p>
					</div>
					<!-- important informations -->
					<div class="col-sm-7 col-sm-offset-1">
						<div class="fb-feed-background">&nbsp;</div>
						<div class="my_section fb-feed">
							<h3>WICHTIG</h3>
							Der f&uuml;r <b>01. Juni 2014</b> geplante Autoslalom (O&Ouml;-Cup) findet <b>nicht</b> statt! 
							<h5>Ersatztermin</h5> ist der <b>12. Oktober 2014</b>. 
							Der Slalom findet in Wildenau am Badesee Parkplatz statt. 
						</div>
					</div>
					
					<!-- event calendar -->
					<!--
					<div class="col-sm-7 col-sm-offset-1 player-wrapper">
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
					<div class="col-sm-7 col-sm-offset-1 player-wrapper">
						<div class="player">
							<iframe width="560" height="315" allowfullscreen frameborder="0"
								src="//www.youtube.com/embed/INdVRC2nqzM"></iframe>
						</div>
					</div>
					-->
				</div>
			</div>
		</section><!-- end section home -->
		
		<!-- ************************************************************************************ -->
		<!-- * NEWS -->
		<!-- ************************************************************************************ -->
		<section class="my_section" id="news">
			<div class="background">&nbsp;</div>
			<div class="container">
				<h2>News</h2>
				<?php print(getFacebookFeed()); ?>
			</div> 
		</section><!-- end section news -->
		
        <!-- ************************************************************************************ -->
		<!-- * CALENDAR -->
		<!-- ************************************************************************************ -->
		<section class="my_section" id="calendar">
			<div class="background">&nbsp;</div>
			<div class="container">
				<h2>
					Kalendar 
					<!--
					<a href="https://www.google.com/calendar/ical/imsc.ried%40gmail.com/public/basic.ics">
						<img src="./imgs/icallogo.png" width="50px" />
					</a>
					-->
				</h2>
				<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23e3e9ff&amp;src=imsc.ried%40gmail.com&amp;color=%23182C57&amp;src=4lbippnpc3kecmdmlcfmu7c0b4%40group.calendar.google.com&amp;color=%23A32929&amp;src=1q0fnqg9mnib8nebph0d6aaop4%40group.calendar.google.com&amp;color=%23AB8B00&amp;ctz=Europe%2FVienna" class="cal_div cal_div_month cal" frameborder="0" scrolling="no"></iframe>
			 	
				<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;mode=AGENDA&amp;height=600&amp;wkst=2&amp;bgcolor=%23ffffff&amp;src=imsc.ried%40gmail.com&amp;color=%23182C57&amp;src=4lbippnpc3kecmdmlcfmu7c0b4%40group.calendar.google.com&amp;color=%23AB8B00&amp;src=1q0fnqg9mnib8nebph0d6aaop4%40group.calendar.google.com&amp;color=%23A32929&amp;ctz=Europe%2FVienna" class="cal_div cal_div_events cal_events" frameborder="0" scrolling="no"></iframe>
			
			
			</div> <!-- end container -->
		</section> <!-- end section calendar -->
		
		<!-- ************************************************************************************ -->
		<!-- * MANAGEMENT -->
		<!-- ************************************************************************************ -->
		<section class="my_section" id="management">
			<div class="background">&nbsp;</div>
			<div  id="fb-feeds" class="container">
				<h2>Vorstand</h2>
				
				<!-- praesident -->
				<div class="row my_section fb-feed">
					<h3>Pr&auml;sident</h3>
					<div class="fb-feed-background">&nbsp;</div>
					<div class="col-sm-4">
						<div>
							<h6>Franz Kraxenberger</h6>
						</div>
						<div>
							<h6>Franz Kreuzhuber</h6>
						</div>
					</div>
					<div class="col-sm-4">
						<a href="./imgs/persons/kraxenberger_franz.jpg" data-toggle="lightbox" data-gallery="multiimages" 
							data-title="Pr&auml;sident: Franz Kraxenberger">
							<img class="img-thumbnail img-responsive" src="imgs/persons/kraxenberger_franz.jpg"/>
						</a>
					</div>
					<div class="col-sm-4">
						<a href="./imgs/persons/anonym.jpg" data-toggle="lightbox" data-gallery="multiimages" 
							data-title="Pr&auml;sident: Franz Kreuzhuber">
							<img class="img-thumbnail img-responsive" src="imgs/persons/anonym.jpg"/>
						</a>
					</div>
				</div>
				
				<!-- obmann -->
				<div class="row my_section fb-feed">
					<h3>Obmann</h3>
					<div class="fb-feed-background">&nbsp;</div>
					<div class="col-sm-4">
						<div>
							<h6>G&uuml;nter Weilbold</h6>
							g.weilbold@aon.at<br />
							+43 660 5793350
						</div>
						<div>
							<h6>G&uuml;nther Preishuber<br />(Stellvertreter)</h6>
							g.preishuber@aon.at<br />
							+43 650 2747445
						</div>
					</div>
					<div class="col-sm-4">
						<a href="./imgs/persons/weilbold_guenter.jpg" data-toggle="lightbox" data-gallery="multiimages" 
							data-title="Obmann: G&uuml;nter Weilbold">
							<img class="img-thumbnail img-responsive" src="imgs/persons/weilbold_guenter.jpg"/>
						</a>
					</div>
					<div class="col-sm-4">
						<a href="./imgs/persons/preishuber_guenther.jpg" data-toggle="lightbox" 
							data-gallery="multiimages" data-title="Obmann-Stellvertreter: G&uuml;nter Preishuber">
							<img class="img-thumbnail img-responsive" src="imgs/persons/preishuber_guenther.jpg"/>
						</a>
					</div>
				</div>
				
				<!-- amerteursportleiter -->
				<div class="row my_section fb-feed">
					<h3>Amateursportleiter</h3>
					<div class="fb-feed-background">&nbsp;</div>
					<div class="col-sm-4">
						<div>
							<h6>Mario Preishuber</h6>
							imsc.ried@gmail.com <br />
							+43 650 6733007
						</div>
						<div>
							<h6>Markus Zechmeister <br />(Stellvertreter)</h6>
							meister@reich-kfz.at <br />
							+43 664 5405475
						</div>
					</div>
					<div class="col-sm-4">
						<div class="crop">
						<a href="./imgs/persons/preishuber_mario.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Amateursportleiter: Mario Preishuber">
							<img class="img-thumbnail img-responsive" src="imgs/persons/preishuber_mario.jpg"/>
						</a>
						</div>
					</div>
					<div class="col-sm-4">
						<a href="./imgs/persons/zechmeister_markus.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Amateursportleiter-Stellvertreter: Markus Zechmeister">
							<img class="img-thumbnail img-responsive" src="imgs/persons/zechmeister_markus.jpg"/>
						</a>
					</div>
				</div>
				
				<!-- kassier -->
				<div class="row my_section fb-feed">
					<h3>Kassier</h3>
					<div class="fb-feed-background">&nbsp;</div>
					<div class="col-sm-4">
						<div>
							<h6>G&uuml;nther Preishuber</h6>
						</div>
						<div>
							<h6>Engelbert Salomon <br />(Stellvertreter)</h6>
						</div>
					</div>
					<div class="col-sm-4">
						<a href="./imgs/persons/preishuber_guenther.jpg" data-toggle="lightbox" data-gallery="multiimages" 
							data-title="Kassier: G&uuml;nther Preishuber">
							<img class="img-thumbnail img-responsive" src="imgs/persons/preishuber_guenther.jpg"/>
						</a>
					</div>
					<div class="col-sm-4">
						<a href="./imgs/persons/salomon_engelbert.jpg" data-toggle="lightbox" data-gallery="multiimages"
							data-title="Kassier-Stellvertreter: Engelbert Salomon">
							<img class="img-thumbnail img-responsive" src="imgs/persons/salomon_engelbert.jpg"/>
						</a>
					</div>
				</div>
				
				<!-- schriftfuehrer -->
				<div class="row my_section fb-feed">
					<h3>Schriftf&uuml;hrer</h3>
					<div class="fb-feed-background">&nbsp;</div>
					<div class="col-sm-4">
						<div>
							<h6>Erwin Salomon</h6>
						</div>
						<div>
							<h6>Roland Wagner<br />(Stellvertreter)</h6>
						</div>
					</div>
					<div class="col-sm-4">
						<a href="./imgs/persons/salomon_erwin.jpg" data-toggle="lightbox" data-gallery="multiimages" 
							data-title="Schriftf&uuml;hrer: Erwin Salomon">
							<img class="img-thumbnail img-responsive" src="imgs/persons/salomon_erwin.jpg"/>
						</a>
					</div>
					<div class="col-sm-4">
						<a href="./imgs/persons/wagner_roland.jpg" data-toggle="lightbox" data-gallery="multiimages" 
							data-title="Schriftf&uuml;hrer-Stellvertreter: Roland Wagner">
							<img class="img-thumbnail img-responsive" src="imgs/persons/wagner_roland.jpg"/>
						</a>
					</div>
				</div>
				
				<!-- zeugwart -->
				<div class="row my_section fb-feed">
					<h3>Zeugwart</h3>
					<div class="fb-feed-background">&nbsp;</div>
					<div class="col-sm-4">
						<div><h6>Anton Wagner</h6></div>
						<div><h6>Horst Gruber</h6></div>
					</div>
					<div class="col-sm-4">
						<a href="./imgs/persons/wagner_anton.jpg" data-toggle="lightbox" data-gallery="multiimages" 
							data-title="Zeugwart: Anton Wagner">
							<img class="img-thumbnail img-responsive" src="imgs/persons/wagner_anton.jpg"/>
						</a>
					</div>
					<div class="col-sm-4">
						<a href="./imgs/persons/gruber_horst.jpg" data-toggle="lightbox" data-gallery="multiimages" 
							data-title="Zeugwart: Horst Gruber">
							<img class="img-thumbnail img-responsive" src="imgs/persons/gruber_horst.jpg"/>
						</a>
					</div>
				</div>
				
				<!-- kassapruefer -->
				<div class="row my_section fb-feed">
					<h3>Kassakontrolle</h3>
					<div class="fb-feed-background">&nbsp;</div>
					<div class="col-sm-4">
						<div><h6>Markus Preishuber</h6></div>
						<div><h6>Georg Wimplinger</h6></div>
					</div>
					<div class="col-sm-4">
						<a href="./imgs/persons/preishuber_markus.jpg" data-toggle="lightbox" data-gallery="multiimages" 
							data-title="Kassakontrolle: Markus Preishuber">
							<img class="img-thumbnail img-responsive" src="imgs/persons/preishuber_markus.jpg"/>
						</a>
					</div>
					<div class="col-sm-4">
						<a href="./imgs/persons/wimplinger_georg.jpg" data-toggle="lightbox" data-gallery="multiimages" 
							data-title="Kassakontrolle-Stellvertreter: Georg Wimplinger">
							<img class="img-thumbnail img-responsive" src="imgs/persons/wimplinger_georg.jpg"/>
						</a>
					</div>
				</div>
				
			</div>
		</section><!-- end section drivers -->
		
		<!-- ************************************************************************************ -->
		<!-- * HONORARY MEMBERS  -->
		<!-- ************************************************************************************ -->
		<section class="my_section" id="honorary_members">
			<div class="background">&nbsp;</div>
			<div class="container">
			<h2>Ehrenmitglieder</h2>
				<div id="fb-feeds" class="rows">
					
					<div class="my_section fb-feed col-sm-4">
						<div class="fb-feed-background">&nbsp;</div>
						<div class="container">
							<h3 class="fb-feed-title">Peter Hofinger</h3>
							<div class="fb-feed-message">
								<b>30 Jahre Obmann</b> <br />
								von 1983 bis 2013 <br />
								seit 1973 im Verein <br />
								<a href="./imgs/persons/anonym.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Peter Hofinger">
									<img class="img-thumbnail img-responsive" src="imgs/persons/anonym.jpg"/>
								</a>
							</div>
						</div>
					</div>
					
					<div class="my_section fb-feed col-sm-4">
						<div class="fb-feed-background">&nbsp;</div>
						<div class="container">
							<h3 class="fb-feed-title">Johann Berschl</h3>
							<div class="fb-feed-message">
								<b>29 Jahre Amateursportleiter</b><br />
								von 1984 bis 2013 <br />
								seit 1983 im Verein <br />
								<a href="./imgs/persons/berschl_johann.jpg" data-toggle="lightbox" 
									data-gallery="multiimages" data-title="Johann Berschl">
									<img class="img-thumbnail img-responsive" src="imgs/persons/berschl_johann.jpg"/>
								</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</section><!-- end section honorary members -->
		
		<!-- ************************************************************************************ -->
		<!-- * DRIVERS -->
		<!-- ************************************************************************************ -->
		<section class="my_section" id="drivers">
			<div class="background">&nbsp;</div>
				<div class="container">
					<h2>Fahrer</h2>
					<div class="row">
						<div class="box">
							<div id="fb-feeds" class="row">	
								<div class="col-sm-2">&nbsp;</div>
								<div class="my_section fb-feed col-sm-12">
									<div class="fb-feed-background">&nbsp;</div>
									<div class="container">
										<?php print(getDriverCarousel()); ?>
									</div>
								</div>
								<div class="col-sm-2">&nbsp;</div>
							</div>
						</div>
					</div>
				</div>
		</section>
		
		<!-- ************************************************************************************ -->
		<!-- * DRIVERS -->
		<!-- ************************************************************************************ -->
		<section class="my_section" id="drivers">
			<div class="background">&nbsp;</div>
			<div class="container">
				<h2>Fahrer</h2>
				
				<div id="fb-feeds" class="row">	
					<!-- driver: andreas preishuber -->
					<div class="my_section fb-feed col-sm-4">
						<div class="fb-feed-background">&nbsp;</div>
						<div class="container">
							<h6 class="fb-feed-title">Andreas Preishuber</h6>
							<div class="fb-feed-message">
								<a href="./imgs/persons/preishuber_andreas.jpg" 
									data-toggle="lightbox" data-gallery="multiimages" 
									data-title="Andreas Preishuber">
									<img class="img-thumbnail" src="imgs/persons/preishuber_andreas.jpg"/>
								</a>
								<a href="./imgs/cars/preishuber_andreas.jpg" 
									data-toggle="lightbox" data-gallery="multiimages" 
									data-title="Andreas's Suzuki Swift GTi">
									<img class="img-thumbnail img-responsive" src="imgs/cars/preishuber_andreas.jpg"/>
								</a>
							</div>
						</div>
					</div>
					
					<!-- driver: christoph preishuber -->
					<div class="my_section fb-feed col-sm-4">
						<div class="fb-feed-background">&nbsp;</div>
						<div class="container">
							<h6 class="fb-feed-title">Christoph Preishuber</h6>
							<div class="fb-feed-message">
								<a href="./imgs/persons/preishuber_christoph.jpg" 
								data-toggle="lightbox" data-gallery="multiimages" 
									data-title="Christop Preishuber">
									<img class="img-thumbnail" src="imgs/persons/preishuber_christoph.jpg"/>
								</a>
								<a href="./imgs/cars/preishuber_christoph.jpg" 
									data-toggle="lightbox" data-gallery="multiimages" 
									data-title="Christoph's Suzuki Swift GTi">
									<img class="img-thumbnail img-responsive" src="imgs/cars/preishuber_christoph.jpg"/>
								</a>
							</div>
						</div>
					</div>
				</div>
					
				<div id="fb-feeds" class="row">	
					<!-- driver: mario preishuber -->
					<div class="my_section fb-feed col-sm-4">
						<div class="fb-feed-background">&nbsp;</div>
						<div class="container">
							<h6 class="fb-feed-title">Mario Preishuber</h6>
							<div class="fb-feed-message">
								<a href="./imgs/persons/preishuber_mario.jpg" 
									data-toggle="lightbox" data-gallery="multiimages" 
									data-title="Mario Preishuber">
									<img class="img-thumbnail" src="imgs/persons/preishuber_mario.jpg"/>
								</a>
								<a href="./imgs/cars/preishuber_mario.jpg"
									 data-toggle="lightbox" data-gallery="multiimages" 
									data-title="Mario's Suzuki Swift GTi">
									<img class="img-thumbnail img-responsive" src="imgs/cars/preishuber_mario.jpg"/>
								</a>
							</div>
						</div>
					</div>
					
					<!-- driver: engelbert salomon -->
					<div class="my_section fb-feed col-sm-4">
						<div class="fb-feed-background">&nbsp;</div>
						<div class="container">
							<h6 class="fb-feed-title">Engelbert Salomon</h6>
							<div class="fb-feed-message">
								<a href="./imgs/persons/salomon_engelbert.jpg" 
									data-toggle="lightbox" data-gallery="multiimages" 
									data-title="Daniel Wiel&auml;nder">
									<img class="img-thumbnail" src="imgs/persons/salomon_engelbert.jpg"/>
								</a>
								<a href="./imgs/cars/salomon_engelbert.jpg" 
									data-toggle="lightbox" data-gallery="multiimages" 
									data-title="Engelberts's Lotus Elise">
									<img class="img-thumbnail img-responsive" src="imgs/cars/salomon_engelbert.jpg"/>
								</a>
							</div>
						</div>
					</div>
					
				</div>
				
				<div id="fb-feeds" class="row">	
					<!-- driver: markus schwarz -->
					<div class="my_section fb-feed col-sm-4">
						<div class="fb-feed-background">&nbsp;</div>
						<div class="container">
							<h6 class="fb-feed-title">Markus Schwarz</h6>
							<div class="fb-feed-message">
								<a href="./imgs/persons/schwarz_markus.jpg"
									data-toggle="lightbox" data-gallery="multiimages" 
									data-title="Markus Schwarz">
									<img class="img-thumbnail" src="imgs/persons/schwarz_markus.jpg"/>
								</a>
								<a href="./imgs/cars/schwarz_markus.jpg" data-toggle="lightbox" 
									data-gallery="multiimages" 
									data-title="Markus's Suzuki Swift GTi">
									<img class="img-thumbnail img-responsive" src="imgs/cars/schwarz_markus.jpg"/>
								</a>
							</div>
						</div>
					</div>
					
					<!-- driver: roland wagner -->
					<div class="my_section fb-feed col-sm-4">
						<div class="fb-feed-background">&nbsp;</div>
						<div class="container">
							<h6 class="fb-feed-title">Roland Wagner</h6>
							<div class="fb-feed-message">
								<a href="./imgs/persons/wagner_roland.jpg" 
									data-toggle="lightbox" data-gallery="multiimages" 
									data-title="Roland Wagner">
									<img class="img-thumbnail" src="imgs/persons/wagner_roland.jpg"/>
								</a>
								<a href="./imgs/cars/wagner_roland.jpg" data-toggle="lightbox" 
									data-gallery="multiimages" 
									data-title="Roland's Suzuki Swift GTi">
									<img class="img-thumbnail img-responsive" src="imgs/cars/wagner_roland.jpg"/>
								</a>
							</div>
						</div>
					</div>
				</div>
				
				
				<div id="fb-feeds" class="row">	
					<!-- driver: daniel wielaender -->
					<div class="my_section fb-feed col-sm-4">
						<div class="fb-feed-background">&nbsp;</div>
						<div class="container">
							<h6 class="fb-feed-title">Daniel Wiel&auml;nder</h6>
							<div class="fb-feed-message">
								<a href="./imgs/persons/wielaender_daniel.jpg" 
									data-toggle="lightbox" data-gallery="multiimages" 
									data-title="Daniel Wiel&auml;nder">
									<img class="img-thumbnail" src="imgs/persons/wielaender_daniel.jpg"/>
								</a>
								<a href="./imgs/cars/wielaender_daniel.jpg" 
									data-toggle="lightbox" data-gallery="multiimages" 
									data-title="Daniel's Suzuki Swift GTi">
									<img class="img-thumbnail img-responsive" src="imgs/cars/wielaender_daniel.jpg"/>
								</a>
							</div>
						</div>
					</div>
					
					<!-- driver: markus zechmeister -->
					<div class="my_section fb-feed col-sm-4">
						<div class="fb-feed-background">&nbsp;</div>
						<div class="container">
							<h6 class="fb-feed-title">Markus Zechmeister</h6>
							<div class="fb-feed-message">
								<a href="./imgs/persons/zechmeister_markus.jpg" 
									data-toggle="lightbox" data-gallery="multiimages" 
									data-title="Markus Zechmeister">
									<img class="img-thumbnail" src="imgs/persons/zechmeister_markus.jpg"/>
								</a>
								<a href="./imgs/cars/zechmeister_markus.jpg" 
									data-toggle="lightbox" data-gallery="multiimages" 
									data-title="Markuszechmeister_markus's Suzuki Swift GTi">
									<img class="img-thumbnail img-responsive" src="imgs/cars/zechmeister_markus.jpg" />
								</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</section><!-- end section drivers -->
		
		<!-- ************************************************************************************ -->
		<!-- * CONTACT / FOOTER -->
		<!-- ************************************************************************************ -->
        <div class="footer" id="contact">
            <div class="container">
				<h2>Kontakt</h2>
				<div class="pull-left row">
					<div class="col-sm-3">
						<div>
							<h5>Obmann</h5>
							<h6>G&uuml;nter Weilbold</h6>
							g.weilbold@aon.at<br />
							+43 660 5793350
						</div>
					</div>
					<div class="col-sm-3">
						<div>
							<h5>Obmann-Stellvertreter</h5>
							<h6>G&uuml;nther Preishuber</h6>
							g.preishuber@aon.at<br />
							+43 650 2747445
						</div>
					</div>
					<div class="col-sm-3">
						<div>
							<h5>Amateursportleiter</h5>
							<h6>Mario Preishuber</h6>
							imsc.ried@gmail.com <br />
							+43 650 6733007
						</div>						
					</div>
					<div class="col-sm-3">
						<div>
							<h5>Amateursportleiter-Stellverterter</h5>
							<h6>Markus Zechmeister</h6>
							meister@reich-kfz.at <br />
							+43 664 5405475
						</div>
					</div>
				</div>
				<div class="social-btns pull-right row">
					<a href="https://www.facebook.com/imsc.ried" target="blank">
						<div><img src="./imgs/social/fb.png" alt=""></div>
						<div><img src="./imgs/social/fb.png" alt=""></div>
					</a>
                    <a href="#">
						<div><img src="./imgs/social/g+.png" alt=""></div>
						<div><img src="./imgs/social/g+.png" alt=""></div>
					</a>
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
		  js.src = "//connect.facebook.net/de_DE/all.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<script type="text/javascript">$(document).ready(function ($) {
				// delegate calls to data-toggle="lightbox"
				$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
					event.preventDefault();
					return $(this).ekkoLightbox({
						always_show_close: true
					});
				});
			});</script>
		<script>$(function() {
		    	$('.nav a').on('click', function(){ 
		        	if($('.navbar-toggle').css('display') !='none'){
		            	$(".navbar-toggle").trigger( "click" );
		        	}
		    	});
			});</script>
	
		
		<!-- ************************************************************************************ -->
		<!-- * NOT USED -->
		<!-- ************************************************************************************ -->
		
		<!-- ************************************************************************************ -->
		<!-- * PARTNER -->
		<!-- ************************************************************************************ -->
        <!-- <section id="partner" class="logos">
			<div class="container">
				<div>
					<a href="http://www.autoslalom.at/">
						<img src="./imgs/partner/autoslalom.gif" alt="">
					</a>
            	</div>
				<div>
					<a href="http://www.ooe-cup.at/">
						<img src="./imgs/partner/ooe_cup/ooe_cup.jpg" alt="">
					</a>
            	</div>
				<div>
					<a href="http://www.slm-autoslalom.at/">
						<img src="./imgs/partner/slm/slm.jpg" alt="">
					</a>
            	</div>
				<div>
					<a href="http://www.msc-rosenau.com/">
						<img src="./imgs/partner/ooe_cup/msc_rosenau.jpg" alt="">
					</a>
            	</div>
			</div>
		</div> -->
        
		<!-- ************************************************************************************ -->
		<!-- * SOCIAL -->
		<!-- ************************************************************************************ -->
		<!-- <section id="social" class="logos">
			<div class="container">
				<div>
					<a href="http://www.stolli-motorsport.at/">
						<img src="./imgs/partner/ooe_cup/stolli_motorsport.jpg" alt="">
					</a>
            	</div>
				<div>
					<a href="http://www.hc-motorsport.at/">
						<img src="./imgs/partner/slm/hc_motorsport.jpg" alt="">
					</a>
            	</div>
				<div>
					<a href="">
						<img src="./imgs/partner/slm/msc_flachgau.jpg" alt="">
					</a>
            	</div>
				<div>
					<a href="">
						<img src="./imgs/partner/slm/msc_gastein.jpg" alt="">
					</a>
            	</div>
				<div>
					<a href="http://www.geomix.at/verein/msc-muehlbach-hkg/">
						<img src="./imgs/partner/slm/msc_muehlbach.jpg" alt="">
					</a>
            	</div>
				<div>
					<a href="http://www.msc-schloessl.at/">
						<img src="./imgs/partner/slm/msc_schloessel.jpg" alt="">
					</a>
            	</div>
				<div>
					<a href="https://www.facebook.com/pages/Motorsportclub-Sch%C3%B6nau-am-K%C3%B6nigssee/462970823806957">
						<img src="./imgs/partner/slm/msc_schoenau.jpg" alt="">
					</a>
            	</div>
			</div>
        </section> -->
		
	</body>
</html>