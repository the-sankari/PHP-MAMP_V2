<?php

require_once "DBConnect.php";
require_once 'config.php';

$short_url = '';

// Initialize cURL session
$ch = null;

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    // URL to the Unelma.IO API
    $url = 'https://unelma.io/api/v1/link';

    // Access token for the Unelma.IO API
    $accessToken = $accessToken;

    // Collect the long URL from the form input
    $longUrl = $_POST['longUrl'];

    // Prepare the data to be sent in the POST request
    $data = [
        "type" => "direct",
        "password" => null,
        "active" => true,
        "expires_at" => "2024-06-06",
        "activates_at" => "2024-03-25",
        "utm" => "utm_source=google&utm_medium=banner",
        "domain_id" => null,
        "long_url" => $longUrl,
    ];

    // Initialize cURL session
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'accept: application/json',
        'Content-Type: application/json',
        'Authorization: Bearer ' . $accessToken,
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    // Execute the POST request
    $response = curl_exec($ch);

    // Check for errors
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    } else {
        // Decode the response
        $responseDecoded = json_decode($response, true);

        // Check if the 'link' key and 'short_url' subkey exist before trying to access it
        if (isset($responseDecoded['link']) && isset($responseDecoded['link']['short_url'])) {
            // Output the shortened URL
            $short_url = $responseDecoded['link']['short_url'];

        } else {
            // Handle the case where 'short_url' key doesn't exist
            echo 'The key "short_url" does not exist in the response.';
        }
    }

    // Validate and sanitize user input
    $longUrl = htmlspecialchars(strip_tags($longUrl));

    // Prepare the database statement
    $stmt = $conn->prepare("INSERT INTO url (long_url, short_url) VALUES(?,?) ");

    if (!$stmt) {
        echo "Prepare failed: " . $conn->error;
    }

    // Bind parameters and execute the statement
    $stmt->bind_param("ss", $longUrl, $short_url);
    if ($stmt->execute()) {
        // Redirect the user to a new page
        header('location:success.php');
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
}

// Close cURL session
if ($ch !== null) {
    curl_close($ch);
}
