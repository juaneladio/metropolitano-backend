<?php
header('content-type: application/json; charset=utf-8');
header("access-control-allow-origin: *");
require_once ('codebird-php-2.4.1src'.DIRECTORY_SEPARATOR.'codebird.php');
\Codebird\Codebird::setConsumerKey("API key", "API secret"); // static, see 'Using multiple Codebird instances'
//For API key and API secret you need to create an application at https://apps.twitter.com
//and then generate a token. FYI: https://dev.twitter.com/docs/auth/tokens-devtwittercom
$cb = \Codebird\Codebird::getInstance();
$cb->setReturnFormat(CODEBIRD_RETURNFORMAT_JSON);
$twitterAccount = "MetropolitanoPT";
$reply = $cb->search_tweets('q=from:'.$twitterAccount, true);
//echo $_GET['callback2'] . '(' . print_r($reply,true) . ');';
echo print_r($reply,true);
