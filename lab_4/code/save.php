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

    $service = new Google_Service_Sheets($client);
    $spreadsheetId = "1YeNI8xotFVyIHogk2qFDNXspg5n_FjCiH93H7kLeREI";
    $listName = "List1";

    $listing = [[$category, $email, $title, $desc]];
    $body = new Google_Service_Sheets_ValueRange(['values' => $listing]);
    $opts = array('valueInputOption' => 'USER_ENTERED');

    $service->spreadsheets_values->append($spreadsheetId, $listName, $body, $opts);
}
header('Location: /index.php');
exit();