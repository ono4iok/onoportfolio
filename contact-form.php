<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "onofiokekong1993@gmail.com";
    $subject = "Message from $name";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Your message has been sent successfully!</p>";
    } else {
        echo "<p>There was an error sending your message. Please try again later.</p>";
    }
}
?>
