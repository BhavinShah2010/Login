<?php
include_once("src/facebookSDK/facebook.php"); //include facebook SDK
######### Facebook API Configuration ##########
$appId = '1663750763913759'; //Facebook App ID
$appSecret = '53fc2fe6d9e7099a310a2bfb5fe754c5'; // Facebook App Secret
$homeurl = 'http://localhost/PHP/facebookLogin.php';  //return to home
$fbPermissions = 'email';  //Required facebook permissions

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret

));
$fbuser = $facebook->getUser();

?>