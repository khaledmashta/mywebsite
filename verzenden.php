<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "khaledmashta8@gmail.com";
    $subject = "Nieuw bericht van jouw website";
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $email_body = "Naam: $name\n";
    $email_body .= "E-mailadres: $email\n\n";
    $email_body .= "Bericht:\n$message\n";

    if (mail($to, $subject, $email_body, $headers)) {
        echo "Bedankt! Je bericht is succesvol verzonden.";
    } else {
        echo "Er is iets misgegaan. Probeer het opnieuw.";
    }
} else {
    echo "Geen toegang tot dit bestand.";
}
?>
