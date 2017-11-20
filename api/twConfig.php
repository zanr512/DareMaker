<?php
include_once("db_config.php");
include_once("src/twitter/twitteroauth.php");

define('CONSUMER_KEY', 'Consumer Key');  // Your Consumer Key
define('CONSUMER_SECRET', 'Consumer Secret Key');  // Your Consumer Secret Key
define('OAUTH_CALLBACK', 'http://discussdesk.com');


$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);
$request_token = $connection->getRequestToken(OAUTH_CALLBACK);

	//Received token info from twitter
$_SESSION['token']          = $request_token['oauth_token'];
$_SESSION['token_secret']   = $request_token['oauth_token_secret'];

    //Any value other than 200 is failure, so continue only if http code is 200
if($connection->http_code == '200')
{
	    //redirect user to twitter
	$twitter_url = $connection->getAuthorizeURL($request_token['oauth_token']);
	header('Location: ' . $twitter_url);
}else{
    die("error connecting to twitter! try again later!");
}

?>