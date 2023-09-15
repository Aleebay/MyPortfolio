<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "ali.abdulq@gmail.com"; // Replace with your actual email address
    $subject = "New contact form submission from $name";
    $headers = "From: $email\r\n";
    
    mail($to, $subject, $message, $headers);
    
    // Redirect to the thank you page
    header("Location: thank_you.html"); // Update the URL to your thank you page
    exit;
}
?>
