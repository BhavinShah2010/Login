<?php
include_once("googleConfig.php");
include_once ("src/controllers/userLoginController.php");
$user_data;
$userProfile;
error_reporting(0);

if(isset($_REQUEST['code'])){
	$gClient->authenticate();
	$_SESSION['token'] = $gClient->getAccessToken();
	header('Location: ' . filter_var($redirect_url, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
	$gClient->setAccessToken($_SESSION['token']);
}

if ($gClient->getAccessToken()) {
	$userProfile = $google_oauthV2->userinfo->get();
	//DB Insert	
	$controller = new userController();
	$user_data = $controller->getUser($userProfile['id'],$userProfile['first_name'],$userProfile['last_name'],"google",$userProfile['email'],$userProfile['picture']['data']['url']);
	$_SESSION['google_data'] = $userProfile; // Storing Google User Data in Session
	print_r($user_data); 
	if($user_data == null){
		$user_data = $controller -> save ($userProfile['id'],$userProfile['given_name'],$userProfile['family_name'],"google",$userProfile['email'],$userProfile['picture']);
	}
		$_SESSION ['userDetails'] = $user_data;		
		$output = '<h1>Google Profile Details </h1>';
		$output .= '<img src="'.$user_data->getProfilePicLink ().'">';
        $output .= '<br/>Facebook ID : ' . $user_data->getauthID ();
        $output .= '<br/>Name : ' . $user_data->getFirstName ().' '.$user_data->getLastName();
        $output .= '<br/>Email : ' . $user_data->getEmailId();
        $output .= '<br/>You are login with : Google';
        $output .= '<br/>Logout from <a href="googleLogout.php?logout">Logout</a>'; 
		echo $output;	
	
	
	$_SESSION['token'] = $gClient->getAccessToken();
} else {
	$authUrl = $gClient->createAuthUrl();
}

		

if(isset($authUrl)) {
	echo '<a href="'.$authUrl.'"><img src="images/glogin.png" alt=""/> Google LogIn</a>';
} else {

}


?>