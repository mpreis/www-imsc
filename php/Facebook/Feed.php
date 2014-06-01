<?php
namespace IMSC\php\Facebook;

/**
 *
 * @author	Mario Preishuber <preishuber.mario@gmail.com>
 */
class Feed
{
	private $backingData;
	
	private $object_id;
	private $title;
	private $cover_img;
	private $date;
	private $fb_link;
	
	private $author_id;
	private $author_name;
	private $author_img;
	
	private $source;
	
	private $likes;
	private $likes_count;
	
	private $comments;
	private $comments_count;
	
	private $message;
	
	private $valid;
		
	public function __construct($data) {
		$this->backingData = $data;
		
		date_default_timezone_set('Austria/Vienna');
		
		$this->object_id = $this->backingData->object_id;
		$this->title = $this->backingData->name;		
		$this->cover_img = array();
		if(strcmp($this->backingData->object_id, "") != 0)
		{
			$this->cover_img[] = Constants::$facebook_url_http . $this->backingData->object_id . "/picture?type=normal";
		}
		$this->date = date_format(date_create($this->backingData->updated_time), 'd.F');
		$this->fb_link = $this->backingData->link;
		
		$this->author_id = $this->backingData->from->id;
		$this->author_name = $this->backingData->from->name;
		$this->author_img = Constants::$facebook_url_http . $this->backingData->from->id . "/picture?type=square";
		
		$this->source = array();
		$this->source[] = str_replace("autoplay=1", "autoplay=0", $this->backingData->source);
		
		$this->likes = $this->backingData->likes;
		$this->likes_count = count($this->backingData->likes->data);
		
		$this->comments = $this->backingData->comments;
		$this->comments_count = count($this->backingData->comments);
		
		$this->message = $this->buildMsg();
		
		if( strcmp($this->message, "") == 0 
			&& strcmp($this->title, "") == 0) 
		{
			$this->valid = false;
		} 
		else 
		{
			$this->valid = true;
		}
	}
	
	private function buildMsg() 
	{
		$msg = preg_replace('"\b(http://\S+)"', '<a href="$1">$1</a>', $this->backingData->message);
		$cap = preg_replace('"\b(http://\S+)"', '<a href="$1">$1</a>', $this->backingData->caption);
		$des = preg_replace('"\b(http://\S+)"', '<a href="$1">$1</a>', $this->backingData->description);
		//$sty = preg_replace('"\b(http://\S+)"', '<a href="$1">$1</a>', $this->backingData->story);
		
		$msg = nl2br($msg);
		$cap = nl2br($cap);
		$des = nl2br($des);
		//$sty = nl2br($sty);
		
		$final_msg = $msg;
		
		if (strpos($final_msg, $cap) === false) $final_msg .= $cap;
		if (strpos($final_msg, $des) === false) $final_msg .= $des;
		//if (strpos($final_msg, $sty) === false) $final_msg .= $sty;
		
		return $final_msg;
	}
	
	public function isValid			() { return $this->valid; }
	public function getBackingData	() { return $this->backingData; }
	public function getObjectId		() { return $this->object_id; }
	public function getTitle		() { return $this->title; }
	public function getCoverImg		() { return $this->cover_img; }
	public function getDate			() { return $this->date; }
	public function getLink			() { return $this->fb_link; }
	public function getAuthorId		() { return $this->author_id; }
	public function getAuthorName	() { return $this->author_name; }
	public function getAuthorImg	() { return $this->author_img; }
	public function getSource		() { return $this->source; }
	public function getLikes		() { return $this->likes; }
	public function getLikesCount	() { return $this->likes_count; }
	public function getComments		() { return $this->comments; }
	public function getCommentsCount() { return $this->comments_count; }
	public function getMessage		() { return $this->message; }
	
	
	public function equals($otherFeed) 
	{
		return ( strcmp($this->title, $otherFeed->getTitle()) == 0 )
			&& ( strcmp($this->author_id, $otherFeed->getAuthorId()) == 0 )
			&& ( strcmp($this->message, $otherFeed->getMessage()) == 0 );
			//&& ( strcmp($this->date, $otherFeed->getDate()) == 0 );
	}
	
	public function merge($otherFeed)
	{
		foreach($otherFeed->getSource() as $src)
		{
			$this->source[] = $src;
		}
		foreach($otherFeed->getCoverImg() as $imgsrc)
		{
			$this->cover_img[] = $imgsrc;
		}
	}
}
?>