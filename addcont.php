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

<?php
if(!$detect->isMobile()) {
?>
<script>

function resizeSections(elemId) {
	if(window.screen.width > 480) {
		 document.getElementById(elemId).style.minHeight = window.screen.height + "px";
	}
}

resizeSections();
</script>
<?php } ?>