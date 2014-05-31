<?php
namespace IMSC\php\Facebook;

use \IMSC\php\Facebook\Constants;

require_once 'Constants.php';

class Informations {

	function getAbout() {
		$json_object = @file_get_contents(Constants::$facebook_url_https . Constants::$page_id . '?fields=about');
		$fbdata = json_decode($json_object);
		return $fbdata->about;
	}
}

?>