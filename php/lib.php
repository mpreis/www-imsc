<?php
	$page_id = 'imsc.ried';
	$access_token = '481834645275259|X1QFk691UCnNGJOP8GYadDU_l8w';
	$facebook_url_http = 'http://graph.facebook.com/';
	$facebook_url_https = 'https://graph.facebook.com/';
	$number_of_feeds = 6;
		
	function getFacebookAbout(){
		global $page_id, $access_token, $facebook_url_https;
		$json_object = @file_get_contents($facebook_url_https . $page_id . '?fields=about');
		$fbdata = json_decode($json_object);
		return $fbdata->about;
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
							. '<img src="' . $post_img_src . '" class="img-border fb-feed-img" />'
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
?>