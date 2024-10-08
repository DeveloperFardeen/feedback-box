<?php

// Database connection setup
$servername = "localhost";
$username = "root";  // Change if necessary
$password = "";      // Change if necessary
$dbname = "feedback_db";  // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// include 'conn.php'; // If you have a separate database connection

// Validation of the input data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $mob = htmlspecialchars(trim($_POST['mob']));
    $feedback = htmlspecialchars(trim($_POST['feedback']));
    $rating = $_POST['rating'];

    // Basic validation
    if (empty($name) || empty($mob) || empty($feedback) || !in_array($rating, [1, 2, 3])) {
        echo "Invalid input! $rating";
        exit;
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO feedback (name, mob, feedback, rating) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $name, $mob, $feedback, $rating);

    // Execute and check
    if ($stmt->execute()) {
        echo "Thank you for your feedback! It helps us a lot to improve our services.";
    } else {
        echo "Failed to submit feedback!";
    }

    // Close connection
    $stmt->close();
    $conn->close();
}
?>
