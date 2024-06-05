<?php

require_once 'vendor/autoload.php';

$client = new Google_Client();
$client->setAuthConfig(__DIR__ . '/credentials.json');
$client->addScope(Google_Service_Sheets::SPREADSHEETS);
$service = new Google_Service_Sheets($client);
$spreadsheetId = '1TOqIYC2Pc8TXpoU-rPwnAxs1TQaRseAIRFkc6EYDdGE';

if ('POST' === $_SERVER['REQUEST_METHOD']) {
    $row = [$_POST['email'], $_POST['category'], $_POST['title'], $_POST['description']];

    $range = 'Лист1!A1';
    $valueRange = new Google_Service_Sheets_ValueRange(['values' => [$row]]);
    try {
        $service->spreadsheets_values->append($spreadsheetId, $range, $valueRange, ['valueInputOption' => 'USER_ENTERED']);
    } catch (\Google\Service\Exception $e) {
    }

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    http_response_code(200);
} else {
    http_response_code(400);
}