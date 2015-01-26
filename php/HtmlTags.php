<?php
namespace IMSC\php;

use \IMSC\php\MobileDetect;
use \IMSC\php\Facebook\Feeds;

require_once 'MobileDetect.php';
require_once 'Facebook/Feeds.php';

/**
 *
 * @author	Mario Preishuber <preishuber.mario@gmail.com>
 */
class HtmlTags
{
	
	public function getCarouselControls($id) 
	{
		return
		'<!-- Controls -->
			<a class="left carousel-control" href="#' . $id . '" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#' . $id . '" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>';
	}
	
	public function getHomeBackground() 
	{	
		return '<div class="background" ' . $this->getHomeBackgroundImage() . ' >&nbsp;</div>';
	}
	
	public function getHomeBackgroundImage() 
	{	
		$bgImg = '';
		$detect = new MobileDetect();
		if(!$detect->isMobile()) {
		
			$path = './imgs/bg/home/';
			$imgs = array();
			
			if ($handle = opendir($path)) {
				while (false !== ($file = readdir($handle))) {
					if ($file != "." && $file != "..") {
						$imgs[] = $file;
					}
				}
				closedir($handle);
			}
			$bgImgIdx = rand(0, count($imgs)-1);
			$bgImg = 'style="background-image: url(\'' . $path . $imgs[$bgImgIdx] . '\');"';
		}
		return $bgImg ;
	}

	public function getFacebookFeedAsCarousel($id) 
	{ 
		$f = new Feeds();
		$data = $f->getFeeds();
		
		$detect = new MobileDetect();
		
		$slide_counter = -1;
		$row_items = 0;
	
		$carousel = '<div id="' . $id . '" class="carousel slide">';
		$carousel_inner = '<div class="carousel-inner">';
		$indicators = '<ol class="carousel-indicators">';

		foreach ($data as $feed)
		{
			
			if($slide_counter < 0)	{ $active = 'active'; } 
			else { $active = ''; }
			
			if($row_items == 0) 
			{
				$slide_counter++;
				
				$carousel_inner .= '<div id="fb-feeds" class="row item ' . $active . '">';
				$carousel_inner .= '<div class="col-sm-1">&nbsp;</div>';
				
				$indicators .= '<li data-target="#' . $id . '" data-slide-to="' . $slide_counter . '" ' 
							. 'class="' . $active . '"></li>';
			}
			
			$carousel_inner .= '<div class="col-sm-5">';
			$carousel_inner .= '<div class="my_section fb-feed">';
			$carousel_inner .= '<div class="fb-feed-background">&nbsp;</div>';
	
			$carousel_inner .= '<div class="container">';
	
			$carousel_inner .= '<div class="fb-feed-date pull-right">' . $feed->getDate() . '</div>';

			$carousel_inner .= '<br />';
			$carousel_inner .= '<h6 class="fb-feed-title">'
							. '<a href="' . $feed->getLink() .'" target=blank>' 
								. '<img src="' . $feed->getAuthorImg() . '" class="fb-feed-author-img" />' 
								. $feed->getAuthorName()
								. '<br />' 	
								. $feed->getTitle()
							. '</a>'
							. '</h6>';
			
			$carousel_inner .= '<div class="fb-feed-message">'. $feed->getMessage() . '<br /><br /></div>';
			
			$imgGallery = '';
			$imgCover = '';
			foreach($feed->getCoverImg() as $imgsrc)
			{
				if(strcmp($imgCover,'') == 0)
				{
					$imgCover .= '<a href="' . $imgsrc
								. '" data-toggle="lightbox" data-gallery="multiimages" data-title="' 
								. $feed->getAuthorName() . '">'
								. '<img src="' . $imgsrc . '" class="img-thumbnail img-responsive center-block" />'
							. '</a><br />';
				}
				else
				{
					$imgGallery .= '<div class="col-sm-4">';
					$imgGallery .= '<a href="' . $imgsrc
								. '" data-toggle="lightbox" data-gallery="multiimages" data-title="' 
								. $feed->getAuthorName() . '">'
								. '<img src="' . $imgsrc . '" class="img-thumbnail img-responsive center-block" />'
							. '</a>';
					$imgGallery .= '</div>';
					
				}
				
			}
			$imgGallery = '<div class="row">' . $imgGallery . '</div>';
			$imgGallery = '<div class="container">' . $imgGallery . '</div>';
			$carousel_inner .= $imgCover;
			$carousel_inner .= $imgGallery;
			
			foreach($feed->getSource() as $src)
			{
				if($src == null || strcmp($src, "") == 0) continue;
					
				$video_src = str_replace("autoplay=1", "autoplay=0", $src);
				$carousel_inner .= 
					'<object class="fb-feed-video center-block">
						<param name="movie" value="' . $video_src . '"></param>
						<param name="allowFullScreen" value="true"></param>
						<param name="allowscriptaccess" value="always"></param>
						<embed src="' . $video_src . '" 
							type="application/x-shockwave-flash" class="fb-feed-video center-block" 
							allowscriptaccess="always" 
							allowfullscreen="true">
						</embed>
					</object>';
				$carousel_inner .= '<br />';
			}
			
			$carousel_inner .= 
					'<div class="fb-feed-like">'
						. '<span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;' 
						. $feed->getLikesCount() 
					. '</div>';
			
			
			$carousel_inner .= '</div>';
			$carousel_inner .= '</div>';
			$carousel_inner .= '</div>';
				
			if($detect->isMobile()) { $row_items += 2; } 
			else { $row_items += 1; }
			if($row_items == 2) {
				$carousel_inner .= '<div class="col-sm-1">&nbsp;</div>';
				$carousel_inner .= '</div>';
				$row_items = 0;
			}
		}
		$indicators .= '</ol> <!-- end indicators -->';
			
		$carousel_controls .= '<div class="carousel-controls">';
		$carousel_controls .= $indicators;
		$carousel_controls .= '</div>';
			
		$carousel_inner .= '</div> <!-- end carousel inner -->';
		$carousel .= $carousel_controls;
		$carousel .= $carousel_inner;
		
		$carousel .= '</div> <!-- end ' . $id . ' -->';
	
		return $carousel;	
	}
	
	
	public function getFacebookFeed() 
	{ 
		$f = new Feeds();
		$data = $f->getFeeds();
		
		$row_items = 0;
	
		$feeds = '<div  class="container">';
		$inner = '';

		foreach ($data as $feed)
		{
			if($row_items == 0) 
			{
				$slide_counter++;
				$inner .= '<div id="fb-feeds" class="row item ' . $active . '">';
			}
			
			$inner .= '<div class="col-sm-6">';
			$inner .= '<div class="my_section fb-feed">';
			$inner .= '<div class="fb-feed-background">&nbsp;</div>';
	
			$inner .= '<div class="container">';
	
			$inner .= '<div class="fb-feed-date pull-right">' . $feed->getDate() . '</div>';

			$inner .= '<br />';
			$inner .= '<h6 class="fb-feed-title">'
							. '<a href="' . $feed->getLink() .'" target=blank>' 
								. '<img src="' . $feed->getAuthorImg() . '" class="fb-feed-author-img" />' 
								. $feed->getAuthorName()
								. '<br />' 	
								. $feed->getTitle()
							. '</a>'
							. '</h6>';
			
			$inner .= '<div class="fb-feed-message">'. $feed->getMessage() . '<br /><br /></div>';
			
			$imgGallery = '';
			$imgCover = '';
			foreach($feed->getCoverImg() as $imgsrc)
			{
				if(strcmp($imgCover,'') == 0)
				{
					$imgCover .= '<a href="' . $imgsrc . '" class="col-sm-8" '
								.'data-toggle="lightbox" data-gallery="multiimages" data-title="' 
								. $feed->getAuthorName() . '">'
								. '<img src="' . $imgsrc . '" class="img-thumbnail img-responsive center-block" />'
							. '</a>';
				}
				else
				{
					$imgGallery .= '<a href="' . $imgsrc . '" class="col-sm-2" '
								.'data-toggle="lightbox" data-gallery="multiimages" data-title="' 
								. $feed->getAuthorName() . '">'
								. '<img src="' . $imgsrc . '" class="img-thumbnail img-responsive center-block" />'
							. '</a>';
				}
				
			}
			$imgGallery = '<div class="row">' . $imgCover . $imgGallery . '</div>';
			$imgGallery = '<div class="container">' . $imgGallery . '</div>';
			$inner .= $imgGallery;
			
			foreach($feed->getSource() as $src)
			{
				if($src == null || strcmp($src, "") == 0) continue;
					
				$video_src = str_replace("autoplay=1", "autoplay=0", $src);
				$inner .= 
					'<object class="fb-feed-video center-block">
						<param name="movie" value="' . $video_src . '"></param>
						<param name="allowFullScreen" value="true"></param>
						<param name="allowscriptaccess" value="always"></param>
						<embed src="' . $video_src . '" 
							type="application/x-shockwave-flash" class="fb-feed-video center-block" 
							allowscriptaccess="always" 
							allowfullscreen="true">
						</embed>
						</object>';
				$inner .= '<br />';
			}
			
			/*
			$inner .= '<button type="button" 
						class="btn btn-default" 
						data-toggle="popover" 
						data-placement="bottom" 
						data-content="' . $feed->getMessage() . '">
						mehr
						</button>';
			*/

			$inner .= 
					'<div class="fb-feed-like">'
						. '<span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;' 
						. $feed->getLikesCount() 
					. '</div>';
			
			
			$inner .= '</div>';
			$inner .= '</div>';
			$inner .= '</div>';
				
			$row_items += 1;
			if($row_items == 2) {
				$inner .= '</div>';
				$row_items = 0;
			}
		}
			
		$feeds_controls .= '<div class="carousel-controls">';
		$feeds_controls .= $indicators;
		$feeds_controls .= '</div>';
			
		$inner .= '</div> <!-- end carousel inner -->';
		$feeds .= $feeds_controls;
		$feeds .= $inner;
		
		$feeds .= '</div> <!-- end ' . $id . ' -->';
	
		return $feeds;	
	}
}
?>