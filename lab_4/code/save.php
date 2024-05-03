<?php
require 'vendor/autoload.php';
if(true === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    $category = $_POST['category'];
    $email = $_POST['email'];
    $title = $_POST['title'];
    $desc = $_POST['description'];

    $client = new Google_Client();
    $client->setApplicationName('lab-4-php');
    $client->setScopes(['https://www.googleapis.com/auth/spreadsheets']);
    $client->setAccessType('offline');
    $client->setAuthConfig('credentials.json');

    
}
header('Location: /index.php');
exit();