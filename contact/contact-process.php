<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    // Add your email address where you want to receive the contact form submissions
    $to = 'rehman9788@gmail.com';
    $subject = 'New Contact Form Submission';
    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";
    if (mail($to, $subject, $body, $headers)) {
        echo 'Thank you for your message. We will get back to you soon.';
    } else {
        echo 'Sorry, there was an error sending your message. Please try again later.';
    }
}
?>
