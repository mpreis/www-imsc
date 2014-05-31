<?php
namespace IMSC\php\Facebook;

use \IMSC\php\Facebook\Feed;
use \IMSC\php\Facebook\Constants;

require_once 'Feed.php';
require_once 'Constants.php';

class Feeds
{
	private $backingData;
	private $feeds;
	
	public function __construct() 
	{
		/* get data from facebook */
		$request = Constants::$facebook_url_https . Constants::$page_id . '/posts?access_token=' . Constants::$access_token;
		$json_object = @file_get_contents($request);
		$this->backingData = json_decode($json_object);
		
		$feeds = array();
		$tmp_feeds = array();
		
		foreach ($this->backingData->data as $feed)
		{
			$tmp_feeds[] = new Feed($feed);
		}
		
		$tmp_feed = $tmp_feeds[1];
		for($i = 2; $i < count($tmp_feeds); $i++)
		{
			if($tmp_feed->equals($tmp_feeds[$i])) 
			{
				$tmp_feed->merge($tmp_feeds[$i]);
			} 
			else
			{
				$feeds[] = $tmp_feed;
				$tmp_feed = $tmp_feeds[$i];
			}
		}
		$this->feeds = $feeds;
		//$this->feeds = $tmp_feeds;
	}
	
	public function getFeeds() {
		return $this->feeds;
	}
}
?>