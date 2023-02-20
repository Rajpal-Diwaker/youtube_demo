<?php
    // OAUTH Configuration
    $oauthClientID = '830450807857-dnb3cpk06l2gausan7bcqrb2id0hh65s.apps.googleusercontent.com';
    $oauthClientSecret = 'swwjFlB8gOyXcdQnZzS7ENQh'; 
    // $oauthClientID = '{ClientID}';
    // $oauthClientSecret = '{Scereat Key}';
    $baseUri = 'http://localhost/youtube_demo/';
    $redirectUri = 'https://www.youtube.com/channel/UC7SnZNQFcnQqoGGVG8rxcVw';
    
    define('OAUTH_CLIENT_ID',$oauthClientID);
    define('OAUTH_CLIENT_SECRET',$oauthClientSecret);
    define('REDIRECT_URI',$redirectUri);
    define('BASE_URI',$baseUri);
    
    // Include google client libraries
    require_once 'src/autoload.php'; 
    require_once 'src/Client.php';
    require_once 'src/Service/YouTube.php';
    session_start();
    
    $client = new Google_Client();
    $client->setClientId(OAUTH_CLIENT_ID);
    $client->setClientSecret(OAUTH_CLIENT_SECRET);
    $client->setScopes('https://www.googleapis.com/auth/youtube');
    $client->setRedirectUri(REDIRECT_URI);
    
    // Define an object that will be used to make all API requests.
    $youtube = new Google_Service_YouTube($client);
    
?>