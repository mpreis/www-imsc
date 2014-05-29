<?php

	require_once 'mobile_detect.php';

	$page_id = 'imsc.ried';
	$access_token = '481834645275259|X1QFk691UCnNGJOP8GYadDU_l8w';
	$facebook_url_http = 'http://graph.facebook.com/';
	$facebook_url_https = 'https://graph.facebook.com/';
	$number_of_feeds = 100;
	$detect = new Mobile_Detect;
		
	function getFacebookAbout(){
		global $page_id, $access_token, $facebook_url_https;
		$json_object = @file_get_contents($facebook_url_https . $page_id . '?fields=about');
		$fbdata = json_decode($json_object);
		return $fbdata->about;
	}
	
	function buildFacebookFeedMsg($post) {
		
		$msg = preg_replace('"\b(http://\S+)"', '<a href="$1">$1</a>', $post->message);
		$cap = preg_replace('"\b(http://\S+)"', '<a href="$1">$1</a>', $post->caption);
		$des = preg_replace('"\b(http://\S+)"', '<a href="$1">$1</a>', $post->description);
		$sty = preg_replace('"\b(http://\S+)"', '<a href="$1">$1</a>', $post->stroy);
		
		$msg = nl2br($msg);
		$cap = nl2br($cap);
		$des = nl2br($des);
		$sty = nl2br($sty);
		
		$final_msg = $msg;
		
		if (strpos($final_msg, $cap) === false) $final_msg .= $cap;
		if (strpos($final_msg, $des) === false) $final_msg .= $des;
		if (strpos($final_msg, $sty) === false) $final_msg .= $sty;
		
		return $final_msg;
	}
	
	function getFacebookFeedAsCarousel($id) {
		global $detect, $page_id, $access_token, $facebook_url_http, $facebook_url_https, $number_of_feeds;
		$request = $facebook_url_https . $page_id . '/posts?access_token=' . $access_token;
		$json_object = @file_get_contents($request);
		//Interpret data
		$fbdata = json_decode($json_object);
		
		// build posts string
		$slide_counter = -1;
		$row_items = 0;
		
		$carousel = '<div id="' . $id . '" class="carousel slide">';
		$carousel_inner = '<div class="carousel-inner">';
		$indicators = '<ol class="carousel-indicators">';
	
		foreach ($fbdata->data as $post)
		{
			if($slide_counter < 0)	{ $active = 'active'; } 
			else { $active = ''; }
			
			$msg = buildFacebookFeedMsg($post);
			if (strcmp($msg, "") == 0) continue;
			
			if($row_items == 0) {
				$slide_counter++;
				
				$carousel_inner .= '<div id="fb-feeds" class="row item ' . $active . '">';
				$carousel_inner .= '<div class="col-sm-1">&nbsp;</div>';
				
				$indicators .= '<li data-target="#' . $id . '" data-slide-to="' . $slide_counter . '" ' 
								. 'class="' . $active . '"></li>';
			}
			
			$user_img_src = $facebook_url_http . $post->from->id . "/picture?type=square";
			$post_img_src = $facebook_url_http . $post->object_id . "/picture?type=normal";


			date_default_timezone_set('Austria/Vienna');
			$feed_date = date_format(date_create($post->updated_time), 'd.F');
			
			$carousel_inner .= '<div class="col-sm-5">';
			$carousel_inner .= '<div class="my_section fb-feed">';
			$carousel_inner .= '<div class="fb-feed-background">&nbsp;</div>';
			
			$carousel_inner .= '<div class="container">';
			
			$carousel_inner .= '<div class="fb-feed-date pull-right">' . $feed_date . '</div>';
			
			$carousel_inner .= '<br />';
			$carousel_inner .= '<h6 class="fb-feed-title">'
						. '<a href="' . $post->link .'" target=blank>' 
							. '<img src="' . $user_img_src . '" class="fb-feed-author-img" />' 
							. $post->from->name 
							. '<br />' 	
							. $post->name 
						. '</a>'
						. '</h6>';
			 
			if($post->object_id != null && strcmp($post->object_id,"") != 0) { 
				$carousel_inner .= '<a href="' . $post_img_src .'" data-toggle="lightbox" data-gallery="multiimages" data-title="' 
							. $post->from->name . '">'
							. '<img src="' . $post_img_src . '" class="img-thumbnail img-responsive center-block" />'
							. '</a><br />';
			}
			if($post->source != null && strcmp($post->source,"") != 0 && strcmp($post->type,"video") == 0) {
				$video_src = str_replace("autoplay=1", "autoplay=0", $post->source);
				$carousel_inner .= '<object class="fb-feed-video center-block">
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
			
			$carousel_inner .= '<div class="fb-feed-message">'. $msg . '</div>';
			$carousel_inner .= '<div class="fb-feed-like">'
						. '<span class="glyphicon glyphicon glyphicon-thumbs-up">' 	
							. count($post->likes->data) 
							. '</span> ' 
						. '<span class="glyphicon glyphicon-comment"></span>' 
							. count($post->comments)
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
	
	
	
	
	function getFacebookFeed() {
		global $page_id, $access_token, $facebook_url_http, $facebook_url_https, $number_of_feeds;
		$request = $facebook_url_https . $page_id . '/posts?access_token=' . $access_token;
		$json_object = @file_get_contents($request);
		//Interpret data
		$fbdata = json_decode($json_object);
		
		// build posts string
		$i = 0;
		$row_items = 0;
		//$posts = '<div id="fb-feeds" class="row">';
	
		foreach ($fbdata->data as $post)
		{
			$msg = buildFacebookFeedMsg($post);
			
			if($i == $number_of_feeds) break;
			else if (strcmp($msg, "") != 0) $i++;
			else continue;
			
			if($row_items == 0)
				$posts .= '<div id="fb-feeds" class="row">';

			
			$user_img_src = $facebook_url_http . $post->from->id . "/picture?type=square";
			$post_img_src = $facebook_url_http . $post->object_id . "/picture?type=normal";


			date_default_timezone_set('Austria/Vienna');
			$feed_date = date_format(date_create($post->updated_time), 'd.F');

			$posts .= '<div class="my_section fb-feed col-sm-5">';
			$posts .= '<div class="fb-feed-background">&nbsp;</div>';
			
			$posts .= '<div class="container">';
			
			$posts .= '<div class="fb-feed-date pull-right">' . $feed_date . '</div>';
			
			$posts .= '<br />';
			$posts .= '<h6 class="fb-feed-title">'
						. '<a href="' . $post->link .'" target=blank>' 
							. '<img src="' . $user_img_src . '" class="fb-feed-author-img" />' 
							. $post->from->name 
							. '<br />' 	
							. $post->name 
						. '</a>'
						. '</h6>';
			 
			if($post->object_id != null && strcmp($post->object_id,"") != 0) { 
				$posts .= '<a href="' . $post_img_src .'" data-toggle="lightbox" data-gallery="multiimages" data-title="' 
							. $post->from->name . '">'
							. '<img src="' . $post_img_src . '" class="img-thumbnail img-responsive" />'
							. '</a>';
			}
			
			$posts .= '<div class="fb-feed-message">'. $msg . '</div>';
			$posts .= '<div class="fb-feed-like">'
						. '<span class="glyphicon glyphicon glyphicon-thumbs-up">' 	
							. count($post->likes->data) 
							. '</span> ' 
						. '<span class="glyphicon glyphicon-comment"></span>' 
							. count($post->comments)
						. '</div>';
			$posts .= '</div>';
			$posts .= '</div>';
			
			$row_items++;
			
			if($row_items == 2) {
				$posts .= '</div>';
				$row_items = 0;
			}
		}
		//$posts .= '</div>';
		return $posts;
	}
	
?>