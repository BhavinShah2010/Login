<?php
session_start();
include_once("src/googleSDK/Google_Client.php");
include_once("src/googleSDK/contrib/Google_Oauth2Service.php");

/*Edit Details*/
$clientId = '1087694829994-r6idiv98n6pkeh1qtg72ef1pcg4b18v5.apps.googleusercontent.com'; //Google CLIENT ID
$clientSecret = 'DdzdrQeWiLqOb9wB_1GqvBOY'; //Google CLIENT SECRET
$redirectUrl = 'https://localhost/PHP/googleLogin.php';  //return url (url to script)
$homeUrl = 'http://localhost/PHP';  //return to home




$gClient = new Google_Client();
$gClient->setApplicationName('Login to googleplus');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectUrl);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>