<?php
include_once("fbConfig.php");
include_once ("src/controllers/userLoginController.php");
$user_data;
$user_profile;
$output;
if(!$fbuser)
{
	$fbuser = null;
	$loginUrl = $facebook->getLoginUrl(array('redirect_uri'=>$homeurl,'scope'=>$fbPermissions));
	echo'<a href="'.$loginUrl.'"><img src="images/fb_logo.jpg" width="30" height="30">facebook Login</a>'; 	
}
else
{
	$user_profile = $facebook->api('/me?fields=id,first_name,last_name,email,picture');
	$controller = new userController();
	$user_data = $controller->getUser($user_profile['id'],$user_profile['first_name'],$user_profile['last_name'],"facebook",$user_profile['email'],$user_profile['picture']['data']['url']);
	if($user_data == null)
	{
		$user_data = $controller -> save ($user_profile['id'],$user_profile['first_name'],$user_profile['last_name'],"facebook",$user_profile['email'],$user_profile['picture']['data']['url']);
	}

		$output = '<h1>Facebook Profile Details </h1>';
		$output .= '<img src="'.$user_data->getProfilePicLink ().'">';
        $output .= '<br/>Facebook ID : ' . $user_data->getauthID ();
        $output .= '<br/>Name : ' . $user_data->getFirstName ().' '.$user_data->getLastName();
        $output .= '<br/>Email : ' . $user_data->getEmailId();
        $output .= '<br/>You are login with : Facebook';
        $output .= '<br/>Logout from <a href="FBlogout.php?logout">Facebook</a>'; 
		echo $output;		
		
//		$_SESSION ['userDetails'] = $output;
//		header ('Location:index.php');	
}

?>