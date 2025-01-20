<?php
// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data using $_POST
    $name = htmlspecialchars($_POST['name']); // Sanitize input to prevent XSS
    $email = htmlspecialchars($_POST['email']); // Sanitize input to prevent XSS

    // Display the submitted data
    echo "<h2>Registration Successful</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
} else {
    echo "Invalid request.";
}
?>
