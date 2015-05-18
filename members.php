<?php
	/**
	 *
 	 * @author	Mario Preishuber <preishuber.mario@gmail.com>
 	 */
	namespace IMSC;
	use \IMSC\php\MobileDetect;
	require_once 'php/MobileDetect.php';
	$detect = new MobileDetect();
?>

<!DOCTYPE html>
<html lang="en" xmlns:fb="http://ogp.me/ns/fb#">
	<head>
		<title>IMSC | Mitglieder</title>
		<!-- ************************************************************************************ -->
		<!-- * META DATA / STYLES -->
		<!-- ************************************************************************************ -->
		<?php require_once 'headinc.php'; ?>
	</head>

	<body onresize="resizeSections()">
		<!-- ************************************************************************************ -->
		<!-- * NAVIGATION BAR -->
		<!-- ************************************************************************************ -->
		<?php require_once 'nav.php'; ?>

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
					<div class="btn btn-danger"><h3>Vorstand</h3></div>
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
					<div class="btn btn-danger"><h3>Ehrenmitglieder</h3></div>
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
					<div class="btn btn-danger"><h3>Fahrer</h3></div>
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
		<?php require_once 'footer.php'; ?>

		</div><!-- end content -->

		<!-- ************************************************************************************ -->
		<!-- * ADDITIONAL CONTENT -->
		<!-- ************************************************************************************ -->
		<?php require_once 'addcont.php'; ?>

	</body>
</html>
