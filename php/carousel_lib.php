<?php
$cars_dir = './imgs/cars/';
$persons_dir = './imgs/persons/';

function getControls($id) {
    return
		'<!-- Controls -->
		<a class="left carousel-control" href="#' . $id . '" data-slide="prev">
			<span class="icon-prev"></span>
		</a>
		<a class="right carousel-control" href="#' . $id . '" data-slide="next">
			<span class="icon-next"></span>
		</a>';
}

function getDriverCarousel() {
	global $cars_dir, $persons_dir;
	
	$carousel = '<div id="carousel-example-generic" class="carousel slide">';
	$carousel_inner = '<div class="carousel-inner">';
	$indicators = '<ol class="carousel-indicators hidden-xs">';
	
	/*
	$carousel_inner .= '<div class="container">';
	$carousel_inner .= '<div id="fb-feeds" class="row">';
	$carousel_inner .= '<div class="col-sm-2">&nbsp;</div>';
	$carousel_inner .= '<div class="my_section fb-feed col-sm-8">';
	$carousel_inner .= '<div class="fb-feed-background">&nbsp;</div>';
	*/
	
	if ($handle = opendir($cars_dir)) {

		$indicator_counter = 0;
	    while( false !== ($file = readdir($handle)) ) {
	        if($file == '.' || $file == '..') continue;
			
			$filename_arr = explode('.', $file);
			$names = explode('_', $filename_arr[0]);
		
			if($indicator_counter == 0)	{
				$active = 'active';
			} else {
				$active = '';
			}
			
			$indicators .= '<li data-target="#carousel-example-generic" data-slide-to="' . $indicator_counter . '" ' 
							. 'class="' . $active . '"></li>';
			
			$item  = '<div class="item ' . $active . '">';
			//$item .= '<div class="container">';
			//$item .= '<div id="fb-feeds" class="row">';
			$item .= '<!-- driver: ' . $names[0] .' ' . $names[1] .' -->';
			//$item .= '<div class="col-sm-2">&nbsp;</div>';
			//$item .= '<div class="my_section fb-feed col-sm-12">';
			//$item .= '<div class="fb-feed-background">&nbsp;</div>';
			//$item .= '<div class="container">';
			$item .= '<h6 class="fb-feed-title">'. $names[0] . ' ' . $names[1] . '</h6>';
			$item .= '<div class="fb-feed-message">';
			$item .= '<a href="' . $persons_dir . $file . '" ' 
						. 'data-toggle="lightbox" data-gallery="multiimages" ' 
						. 'data-title="' . $names[0] . ' ' . $names[1] . '"> '
						. '<img class="img-thumbnail" src="' . $persons_dir . $file . '"/> '
					. '</a>';
			$item .= '<a href="' . $cars_dir . $file . '" '
						. 'data-toggle="lightbox" data-gallery="multiimages" ' 
						. 'data-title="' . $names[0] . '\'s Slalomauto"> '
						. '<img class="img-thumbnail img-responsive" src="' . $cars_dir . $file . '"/> '
					. '</a>';
			$item .= '</div>';
			//$item .= '</div>';
			//$item .= '</div>';
			//$item .= '<div class="col-sm-2">&nbsp;</div>';
			//$item .= '</div>';
			//$item .= '</div>';
			$item .= '</div>';	
				
			$carousel_inner .= $item;	

			$indicator_counter++;
	    }
		closedir($handle);
	}
	
	/*
	$carousel_inner .= '</div>';
	$carousel_inner .= '<div class="col-sm-2">&nbsp;</div>';
	$carousel_inner .= '</div>';
	$carousel_inner .= '</div>';
	$carousel_inner .= '</div>';
	*/
	$indicators .= '</ol> <!-- end indicators -->';
	$carousel_inner .= getControls();
	$carousel_inner .= '</div> <!-- end carousel inner -->';
	$carousel .= $indicators;
	$carousel .= $carousel_inner;
	$carousel .= '</div> <!-- end carousel-example-generic -->';
	
	return $carousel;
}
	
?>