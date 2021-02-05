<?php
require_once('TwitterAPIExchange.php');

$hashtag = $_GET["q"];

$settings = array(
    'oauth_access_token' => "1283499122532552704-JwzCVOyaCLfhFIA482jsL0sLz9g7Nj",
    'oauth_access_token_secret' => "BnjO33SMkBjWQuTFVsEI7YzwdXHbKNhJpX4hFUW959pOG",
    'consumer_key' => "Qthota9AzQRrfJUtFKZduM0f9",
    'consumer_secret' => "4NRiHkhGXiQ08XDKTD1BRcvkgoQaLyZBLh0gd3F4QvnBvykYc0"
);

$url = 'https://api.twitter.com/1.1/search/tweets.json';
$getfield = '?q=#'.$hashtag.' AND -filter:retweets AND -filter:replies&lang=en&count=20&tweet_mode=extended';
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($settings);
$response = $twitter->setGetfield($getfield)
     ->buildOauth($url, $requestMethod)
     ->performRequest();

echo $response;
?>