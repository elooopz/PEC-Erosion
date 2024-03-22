<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $project = $_POST["project"];

    // Compose email message
    $to = "cresmoonel@gmail.com"; // Replace with your email address
    $subject = "New Quote Request";
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    $message .= "Project Details:\n$project";

    // Send email
    if (mail($to, $subject, $message)) {
        echo "Thank you for your quote request. We will get back to you soon.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>