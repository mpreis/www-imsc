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
