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

				<div id="fb-feeds" class="row">
					<div class="col-sm-12">
						<div class="fb-feed-background">&nbsp;</div>
						<div class="my_section fb-feed text-center">
							<h1>Autoslalom: 11. Oktober 2015</h1>
							
							<div class="col-sm-12">
								<a href="https://drive.google.com/file/d/0B654bLSSYZ6GVEVtN01pUUp0VDA/view?usp=sharing"
									target="_blank" class="btn btn-warning">ERGEBNISLISTE</a>
							</div>

							<div class="col-sm-6">
								<h2>DANKE</h2>
								an alle Sponsoren für ihre Unterstützung.

								<h2>DANKE</h2>
								an alle Vereinsmitglieder, die heuer mit 2 IMSC-Slalom viel zu tun hatten.
								
								<h2>DANKE</h2>
								an alle nicht Vereinsmitglieder die uns tatkräftig unterstützt haben.
							</div>

							<div class="col-sm-6">
								<h2>DANKE</h2>
								an alle Teilnehmer, wir hoffen ihr hattet Spass :)

								<h2>DANKE</h2>
								an alle Zuschauer für's vorbei schauen.

								<h2>DANKE</h2>
								an alle die auch heuer wieder zum Erfolg dieser Veranstaltung beigetragen haben.
							</div>

							<div class="col-sm-12">
								<br>
								<h2>Wir sehen uns nächstes Jahr hoffentlich wieder <i class="fa fa-smile-o"></i></h2>
								<br>
							</div>
						</div>
					</div>
				</div>

				<div id="fb-feeds" class="row">
					<div class="col-sm-12">
						<div class="fb-feed-background">&nbsp;</div>
						<div class="my_section fb-feed">

							<div class="col-sm-6">
								<h2>Finale der SLM</h2>
								Verpasst auf keinen Fall das Finale der Salzburger Landesmeisterschaft im Autoslalom!
								<br>
								
								Infos für Teilnehmer
								<a href="https://drive.google.com/file/d/0B654bLSSYZ6GNVhOempxX0VfZTg/view?usp=sharing" 
										target="_blank" class="btn btn-info">Ausschreibung</a>
								<br>
								
								Infos zur SLM
								<a href="http://www.slm-autoslalom.at" target="_blank" class="btn btn-info">http://www.slm-autoslalom.at</a>
								<br>
								
								Fernsehbericht 2014
								<a href="http://www.ht1.at/mediathek/5052/Autoslalom_des_Motorsport_Club_Ried.html"
									target="_blank" class="btn btn-warning">HT1</a>
								
							</div>
							<div class="col-sm-6">
								<h3>Hier noch ein kleiner Vorgeschmack:</h3>
								<br>
								Mehr unter <a href="https://www.youtube.com/watch?v=SzupxQkW8U4&list=PLfsGuj3jVLl3uqSXn1_OM3VDfFLPseZ2t" 
										target="_blank" class="btn btn-info"><h5><i class="fa fa-youtube" alt="YouTube"></i></h5></a>
								<br>
								<br>
								<iframe class="img-thumbnail img-responsive" width="560" height="315" src="https://www.youtube.com/embed/MIHvKbwef84?list=PLfsGuj3jVLl3uqSXn1_OM3VDfFLPseZ2t&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
								<br>
								<br>
							</div>
						</div>
					</div>
				</div>

				<div id="fb-feeds" class="row">
					<div class="col-sm-6">
						<div class="fb-feed-background">&nbsp;</div>
						<div class="my_section fb-feed">
							<h3>An alle Vereinsmitglieder: AUSFLUG 2015</h3>
							Auf der letzten Sitzung, Freitag 10. Juli 2015, wurde das Thema Ausflug angesprochen.
							Unser Obmann hat folgendes vorgeschlagen:
							<ul>
								<li><span class="btn btn-warning">DTM Finale in Hockenheim</span></li>
								<li><span class="btn btn-warning">Termin: Sa. 17. - So. 18. Oktober</span></li>
								<li>Anreise via gemieteten 9-Sitzer</li>
								<li>Grober Ablauf: 
									<ul>
										<li>Am Samstag reisen wir an. 
											Dabei könnten wir auf dem Weg nach Hockenheim noch etwas unternehmen, 
											im Moment ist noch nichts konkretes geplant. Nach der Ankunft im Hotel,
											folgt das übliche Abendprogramm mit essen gehen und gemütlichem Beisammensein. 
										</li>
										<li>Am Sontag steht, dann das DTM Finale an. 
											Im Anschluss daran machen wir uns wieder auf den Heimweg.
										</li> 
									</ul>
								</li>
							</ul>
							<br>
							
							Damit wir auch sicher Tickets und ein Hotel bekommen, müssen wir bis zur
							<strong>NÄCHSTEN SITZUNG</strong> wissen wer mitfahren möchte. 
							
							Sollte jemand mit dem Datum ein Problem haben: <strong>WICHTIG BESCHEID GEBEN!</strong>
							Wir möchten natürlich, dass so viele wie nur möglich am Ausflug teilnehmen können. 
							<br>
							
							<span class="btn btn-warning">Bitte meldet euch bei unserem Obmann Günter Weilbold.</span>
							<br>
						</div>
					</div>

					<div class="col-sm-5 col-sm-offset-1">
						<div class="fb-feed-background">&nbsp;</div>
						<div class="my_section fb-feed">
							<h3>WICHTIG:</h3>
							<ul>
								<li>Die September-Sitzung, Freitag 11.09.2015, 20:00 Uhr, findet im Gasthaus Danzer statt.</li>
								<li>Der Slalom des MSC Lochen wurde vorverlegt von 20.09. auf 13.09.!</li>	
								<li>Der Slalom des MSC Gastein in Wagrain ist vorerst ABGESAGT!
										(Es wird nach einem Ersatztermin gesucht.)
								</li>
							</ul>
							<br>
						</div>
					</div>
				</div>

				<div id="fb-feeds" class="row">
					<!-- important informations -->	
					<div class="col-sm-12">
						<div class="fb-feed-background">&nbsp;</div>
						<div class="my_section fb-feed">
							<div class="col-sm-6 text-center">
								<h1>Autoslalom: 31. Mai 2015</h1>
								<h2>3. Lauf zum OÖ-Cup</h2>
								<a href="https://drive.google.com/file/d/0B654bLSSYZ6GdG51dWQ5VnkzU1k/view?usp=sharing" 
									target="_blank" class="btn btn-info">Ausschreibung</a>
								
								<a href="https://drive.google.com/file/d/0B654bLSSYZ6GQkVDWEN3MXF2VkU/view?usp=sharing" 
									target="_blank" class="btn btn-info">Streckenplan</a>
								
								<a href="https://drive.google.com/file/d/0Byem0W0PppU-dlBzMU02TGhocGM/view?usp=sharing" 
									target="_blank" class="btn btn-info">Streckenplan mit Toren</a>
								
								<a href="https://www.youtube.com/watch?v=6WVxooyTIPM" 
									target="_blank" class="btn btn-info">Streckenvideo (YouTube)</a>
								
								<a href="https://plus.google.com/photos/109124545640923797926/albums/6155115986562509649?banner=pwa&amp;authkey=CNbEsdbv68_E-QE" 
									target="_blank" class="btn btn-info">Fotos</a>
								
								<a href="https://drive.google.com/file/d/0Byem0W0PppU-VklqMC1GWk1rTzA/view?usp=sharing" 
									target="_blank" class="btn btn-warning">Ergebnis Andorf</a>
								
								<br>
								<br>
							</div>

							<div class="col-sm-6 text-center">
								<img src="https://lh5.googleusercontent.com/-_DMv9SIwqMw/VWu2XONalvI/AAAAAAAArqE/ICChnZSzR58/w1702-h1134-no/ZR1G1761.JPG"
									width="500" alt="Foto von Robert Kreuzer" class="img-thumbnail img-responsive">
								<br>
								Foto von Robert Kreuzer
								<br>
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
								<h3>Vorläufige Termin: SLM 2015</h3>
								<ol>
									<li>Lauf SA 02.05.2015	MSC Mühlbach am Hochkönig (Mühlbach)</li>
									<li>Lauf SO 07.06.2015	HC Motorsport (Geretsberg)</li>
									<li>Lauf SO 14.06.2015	MSC Schönau a. Königssee e.V. (Schönau)</li>
									<li><strike>Lauf SO 19.07.2015	MSC Gastein (Wagrein)</strike></li>
									<li>Lauf SO 02.08.2015	CUP-Slalom (Berndorf)</li>
									<li>Lauf SO 23.08.2015	MSC Flachgau (Obertrum)</li>
									<li>Lauf SO 06.09.2015	MSC Schlössl (Schlössl)</li>
									<li><b>Lauf SO 13.09.2015	MSC Lochen (Anthering)</b></li>
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
							<a href="https://drive.google.com/file/d/0B654bLSSYZ6GZVhxaVBId2pBY3M/view?usp=sharing" 
								target="_blank" class="btn btn-info">Ergebnis IMSC</a>
							
							<a href="https://drive.google.com/file/d/0B654bLSSYZ6GYjFDTjF1b3FlbUk/view?usp=sharing" 
								target="_blank" class="btn btn-info">Ergebnis O&Ouml;-Cup</a>
							
							<br />
							<br />
							<a href="https://drive.google.com/file/d/0B654bLSSYZ6GSG1xS1lqMmllWGM/view?usp=sharing" 
								target="_blank" class="btn btn-info">Ergebnis SLM (Division) </a>
							<a href="https://drive.google.com/file/d/0B654bLSSYZ6GMkxnV2ItNEZadlU/view?usp=sharing" 
								target="_blank" class="btn btn-info">Ergebnis SLM (Klassen) </a>
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
		<?php require_once 'footer.php'; ?>

		<!-- ************************************************************************************ -->
		<!-- * ADDITIONAL CONTENT -->
		<!-- ************************************************************************************ -->
		<?php require_once 'addcont.php'; ?>
	</body>
</html>
