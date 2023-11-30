<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Email configuration
    $to = "jad.elsoufi@skema.edu"; // Replace with your email address
    $subject = "New Message from $nom";
    $headers = "From: $email";

    // Send email
    mail($to, $subject, $message, $headers);
}
?>
