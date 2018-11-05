<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '1035916012942-2t49u7cvc1u1dqvdo121l86mi7kn7578.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'YS_Og8pE6tww6NEUbzSZaXmK'; //Google client secret
$redirectURL = 'http://localhost/impo/Fapore/view/admin/login/login_with_google_using_php/'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>