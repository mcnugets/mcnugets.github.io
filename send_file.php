<?php
$name = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "sultan.yergaliyev@outlook.com"; // Replace with your email address
$subject = "New Contact Form Submission";
$headers = "From: $email";

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email. Please try again later.";
}
