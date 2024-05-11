<?php

// Replace with your own API key
$apiKey = '17|LZys2hTTIIGiY90YI9y8Gkv1Ul3OlAGghoto2fV401882225';

// Function to shorten a URL using the Unelma API
function shortenUrl($longUrl, $apiKey)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://unelma.io/api/v1');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('url' => $longUrl, 'api_key' => $apiKey)));
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response)->short_url;
}

// Get the long URL from the form
$longUrl = $_POST['long-url'];

// Shorten the URL using the Unelma API 


//  17|LZys2hTTIIGiY90YI9y8Gkv1Ul3OlAGghoto2fV401882225
$shortUrl = shortenUrl($longUrl, $apiKey);

