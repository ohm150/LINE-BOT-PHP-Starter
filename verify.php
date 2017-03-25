<?php
$access_token = 'Cd1GhYdKmjyw9es/gAdkb8f2aNGnxbEzv0SZ1DYaJZe95PFnx5u710zkXL6Ym+sSQQNYDkKOoJqWeMC+45qzS1fCR0P09h5BOZ/wD8TY21kyi/QcdN9aSfrDk3W700UBu7p+hq5XrG4TMnCZJIHluwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
