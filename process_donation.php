<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


$host = 'localhost'; 
$db = 'church'; 
$user = 'root'; 
$pass = 'password'; 

$mysqli = new mysqli($host, $user, $pass, $db);


if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = filter_input(INPUT_POST, 'amount', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $donation_type = filter_input(INPUT_POST, 'donation_type', FILTER_SANITIZE_STRING);
    $donor_name = filter_input(INPUT_POST, 'donor_name', FILTER_SANITIZE_STRING);
    $donor_email = filter_input(INPUT_POST, 'donor_email', FILTER_SANITIZE_EMAIL);
    $donor_phone_number = filter_input(INPUT_POST, 'donor_phone_number', FILTER_SANITIZE_STRING);

    // Validate input
    if (empty($amount) || $amount <= 0) {
        echo "Please enter a valid amount.";
        exit;
    }

    if (empty($donation_type)) {
        echo "Please select a donation type.";
        exit;
    }

    if (empty($donor_name)) {
        echo "Please enter your name.";
        exit;
    }

    // Prepare and bind
    $stmt = $mysqli->prepare("INSERT INTO donations (amount, donation_type, donor_name, donor_email, donor_phone_number) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("dssss", $amount, $donation_type, $donor_name, $donor_email, $donor_phone_number);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to a thank-you page or show a success message
        header("Location: thank_you.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
} else {
    echo "Invalid request.";
}

$mysqli->close();
?>
