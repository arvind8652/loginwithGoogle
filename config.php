
<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('265484551662-96aitnfr2mrt2l07ugkh5i4sotkltlba.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('j4DJHRrtQwMW2XOgPM7zMtkg');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/loginWithGoogleApi/index.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>