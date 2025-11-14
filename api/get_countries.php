<?php
header('Content-Type: application/json');

$apiUrl = 'https://restcountries.com/v3.1/all?fields=name,flags,idd';

// cURLでAPI取得
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);
$err = curl_error($ch);
curl_close($ch);

if ($err) {
  echo json_encode(['error' => $err]);
} else {
  echo $response;
}
