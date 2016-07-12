<?php
	/**
	 *
 	 * @author	Mario Preishuber <preishuber.mario@gmail.com>
 	 */
	namespace IMSC;
	use \IMSC\php\Content;

	require_once 'php/Content.php';

	$content = new Content();
?>

<!DOCTYPE html>
<html lang="en" xmlns:fb="http://ogp.me/ns/fb#">
	<head>
		<title>IMSC | Mitglieder</title>
		<!-- ************************************************************************************ -->
		<!-- * META DATA / STYLES -->
		<!-- ************************************************************************************ -->
		<?php require_once './common/headinc.php'; ?>
	</head>

	<body onresize="resizeSections()">
		<!-- ************************************************************************************ -->
		<!-- * NAVIGATION BAR -->
		<!-- ************************************************************************************ -->
		<?php require_once './common/nav.php'; ?>

		<!-- ************************************************************************************ -->
		<!-- * MEMBERS -->
		<!-- ************************************************************************************ -->
		<section class="my_section" id="members">
			<?php $content->printBackground(); ?>
						
			<div class="container text-center">
        <div id="fb-feeds" class="row">
          <div class="col-sm-12">
            <div class="fb-feed-background">&nbsp;</div>
            <div class="my_section fb-feed text-center">
              <h1>Vorstand</h1>
              <p></p>
            </div>
          </div>
        </div>



      	<!-- content -->
        <div id="fb-feeds" class="row">
          
          <div class="col-sm-5">
          	<div class="fb-feed-background">&nbsp;</div>
          	<div class="my_section fb-feed"> 
        			<!-- left box -->
        			<h2>Pr&auml;sident</h2>
        			<div class="col-sm-6">
								<a href="https://raw.githubusercontent.com/mpreis/www-imsc/master/imgs/persons/kraxenberger_franz.jpg" 
									data-toggle="lightbox" data-gallery="multiimages"
									data-title="Pr&auml;sident: Franz Kraxenberger">
									<img class="img-rounded img-responsive" 
										src="https://raw.githubusercontent.com/mpreis/www-imsc/master/imgs/persons/kraxenberger_franz.jpg"/>
								</a>
								<h6>Franz Kraxenberger</h6>
							</div>
							<div class="col-sm-6">
								<a href="https://raw.githubusercontent.com/mpreis/www-imsc/master/imgs/persons/anonym.jpg" 
									data-toggle="lightbox" data-gallery="multiimages"
									data-title="Pr&auml;sident: Franz Kreuzhuber">
									<img class="img-rounded img-responsive" 
										src="https://raw.githubusercontent.com/mpreis/www-imsc/master/imgs/persons/anonym.jpg"/>
								</a>
								<h6>Franz Kreuzhuber</h6>
							</div>
          	</div>
          </div>  
        	
        	<div class="col-sm-5 col-sm-offset-2">
        		<div class="fb-feed-background">&nbsp;</div>
          	<div class="my_section fb-feed"> 
        			<!-- right box -->
        			<h2>Obmann | Stellvertreter</h2>
        			<div class="col-sm-6">
								<a href="https://raw.githubusercontent.com/mpreis/www-imsc/master/imgs/persons/weilbold_guenter.jpg" 
									data-toggle="lightbox" data-gallery="multiimages"
									data-title="Obmann: G&uuml;nter Weilbold">
									<img class="img-rounded img-responsive" 
										src="https://raw.githubusercontent.com/mpreis/www-imsc/master/imgs/persons/weilbold_guenter.jpg"/>
								</a>
								<h6>G&uuml;nter Weilbold</h6>
							</div>
							<div class="col-sm-6">
								<a href="https://raw.githubusercontent.com/mpreis/www-imsc/master/imgs/persons/preishuber_guenther.jpg" 
									data-toggle="lightbox" data-gallery="multiimages" 
									data-title="Obmann-Stellvertreter: G&uuml;nter Preishuber">
									<img class="img-rounded img-responsive" 
										src="https://raw.githubusercontent.com/mpreis/www-imsc/master/imgs/persons/preishuber_guenther.jpg"/>
								</a>
								<h6>G&uuml;nther Preishuber</h6>
							</div>
          	</div>
        	</div>
        </div>







        <div id="fb-feeds" class="row">
          
          <div class="col-sm-5">
          	<div class="fb-feed-background">&nbsp;</div>
          	<div class="my_section fb-feed"> 
        			<!-- left box -->
        			<h2>Amateursportleiter | Stellvertreter</h2>
        			<div class="col-sm-6">
								<a href="https://raw.githubusercontent.com/mpreis/www-imsc/master/imgs/persons/preishuber_mario.jpg" 
									data-toggle="lightbox" data-gallery="multiimages"
									data-title="Amateursportleiter: Mario Preishuber">
									<img class="img-rounded img-responsive" 
										src="https://raw.githubusercontent.com/mpreis/www-imsc/master/imgs/persons/preishuber_mario.jpg"/>
								</a>
								<h6>Mario Preishuber</h6>
							</div>
							<div class="col-sm-6">
								<a href="https://raw.githubusercontent.com/mpreis/www-imsc/master/imgs/persons/zechmeister_markus.jpg" 
									data-toggle="lightbox" data-gallery="multiimages"
									data-title="Amateursportleiter-Stellvertreter: Markus Zechmeister">
									<img class="img-rounded img-responsive" 
										src="https://raw.githubusercontent.com/mpreis/www-imsc/master/imgs/persons/zechmeister_markus.jpg"/>
								</a>
								<h6>Markus Zechmeister</h6>
							</div>
          	</div>
          </div>  
        	
        	<div class="col-sm-5 col-sm-offset-2">
        		<div class="fb-feed-background">&nbsp;</div>
          	<div class="my_section fb-feed"> 
        			<!-- right box -->
        			<h2>Kassier | Stellvertreter</h2>
        			<div class="col-sm-6">
								<a href="https://raw.githubusercontent.com/mpreis/www-imsc/master/imgs/persons/preishuber_guenther.jpg" 
									data-toggle="lightbox" data-gallery="multiimages"
									data-title="Kassier: G&uuml;nther Preishuber">
									<img class="img-rounded img-responsive" 
										src="https://raw.githubusercontent.com/mpreis/www-imsc/master/imgs/persons/preishuber_guenther.jpg"/>
								</a>
								<h6>G&uuml;nther Preishuber</h6>
							</div>
							<div class="col-sm-6">
								<a href="https://raw.githubusercontent.com/mpreis/www-imsc/master/imgs/persons/salomon_engelbert.jpg" 
									data-toggle="lightbox" data-gallery="multiimages"
									data-title="Kassier-Stellvertreter: Engelbert Salomon">
									<img class="img-rounded img-responsive" 
										src="https://raw.githubusercontent.com/mpreis/www-imsc/master/imgs/persons/salomon_engelbert.jpg"/>
								</a>
								<h6>Engelbert Salomon</h6>
							</div>
          	</div>
        	</div>
       
        </div>







        <div id="fb-feeds" class="row">
          <div class="col-sm-5">
          	<div class="fb-feed-background">&nbsp;</div>
          	<div class="my_section fb-feed"> 
        			<!-- left box -->
        			<h2>Schriftf&uuml;hrer | Stellvertreter</h2>
							<div class="col-sm-6">
								<a href="https://raw.githubusercontent.com/mpreis/www-imsc/master/imgs/persons/salomon_erwin.jpg" 
									data-toggle="lightbox" data-gallery="multiimages"
									data-title="Schriftf&uuml;hrer: Erwin Salomon">
									<img class="img-rounded img-responsive" 
										src="https://raw.githubusercontent.com/mpreis/www-imsc/master/imgs/persons/salomon_erwin.jpg"/>
								</a>
								<h6>Erwin Salomon</h6>
							</div>
							<div class="col-sm-6">
								<a href="https://raw.githubusercontent.com/mpreis/www-imsc/master/imgs/persons/wagner_roland.jpg" 
									data-toggle="lightbox" data-gallery="multiimages" 
									data-title="Schriftf&uuml;hrer-Stellvertreter: Roland Wagner">
									<img class="img-rounded img-responsive" 
										src="https://raw.githubusercontent.com/mpreis/www-imsc/master/imgs/persons/wagner_roland.jpg"/>
								</a>
								<h6>Roland Wagner</h6>
							</div>     			
          	</div>
          </div>  
        	<div class="col-sm-5 col-sm-offset-2">
        		<div class="fb-feed-background">&nbsp;</div>
          	<div class="my_section fb-feed"> 
        			<!-- right box -->
        			<h2>Zeugwart | Stellvertreter</h2>
        			<div class="col-sm-6">
								<a href="https://raw.githubusercontent.com/mpreis/www-imsc/master/imgs/persons/wagner_anton.jpg" 
									data-toggle="lightbox" data-gallery="multiimages" data-title="Zeugwart: Anton Wagner">
									<img class="img-rounded img-responsive" 
										src="https://raw.githubusercontent.com/mpreis/www-imsc/master/imgs/persons/wagner_anton.jpg"/>
								</a>
								<h6>Anton Wagner</h6>
							</div>
							<div class="col-sm-6">
								<a href="https://raw.githubusercontent.com/mpreis/www-imsc/master/imgs/persons/gruber_horst.jpg" 
									data-toggle="lightbox" data-gallery="multiimages" data-title="Zeugwart: Horst Gruber">
									<img class="img-rounded img-responsive" 
										src="https://raw.githubusercontent.com/mpreis/www-imsc/master/imgs/persons/gruber_horst.jpg"/>
								</a>
								<h6>Horst Gruber</h6>
							</div>
          	</div>
        	</div>
        </div>








        <div id="fb-feeds" class="row">
          <div class="col-sm-6 col-sm-offset-3">
          	<div class="fb-feed-background">&nbsp;</div>
          	<div class="my_section fb-feed"> 
          		<h2>Ehrenmitglieder</h2>

          		<div class="col-sm-6">
								<a href="https://raw.githubusercontent.com/mpreis/www-imsc/master/imgs/persons/hofinger_peter.jpg" 
									data-toggle="lightbox" data-gallery="multiimages" data-title="Peter Hofinger">
									<img class="img-rounded img-responsive" 
										src="https://raw.githubusercontent.com/mpreis/www-imsc/master/imgs/persons/hofinger_peter.jpg"/>
								</a>
								<h6>Peter Hofinger</h6>
								<b>
									30 Jahre Obmann<br />
									von 1983 bis 2014
								</b><br />
								seit 1973 im Verein
								<br />&nbsp;
							</div>

							<div class="col-sm-6">
								<a href="https://raw.githubusercontent.com/mpreis/www-imsc/master/imgs/persons/berschl_johann.jpg" 
									data-toggle="lightbox" data-gallery="multiimages" data-title="Johann Berschl">
									<img class="img-rounded img-responsive" 
										src="https://raw.githubusercontent.com/mpreis/www-imsc/master/imgs/persons/berschl_johann.jpg"/>
								</a>
								<h6>Johann Berschl</h6>
								<b>
									29 Jahre Amateursportleiter<br />
									von 1984 bis 2014
								</b><br />
								seit 1983 im Verein <br />
							</div>
	          </div>  
	        </div>
	      </div>

      </div>
		</section>
		
		<!-- ************************************************************************************ -->
		<!-- * CONTACT / FOOTER -->
		<!-- ************************************************************************************ -->
		<?php require_once './common/footer.php'; ?>

		<!-- ************************************************************************************ -->
		<!-- * ADDITIONAL CONTENT -->
		<!-- ************************************************************************************ -->
		<?php require_once './common/addcont.php'; ?>

	</body>
</html>
