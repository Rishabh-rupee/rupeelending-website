<?php
if (isset($_POST["submit"])) {
    $name = $_POST["fullname"];
    $message1 = $_POST["message"];
    $mobile = $_POST["mobile"];
    $project = $_POST["project"];
    $email = $_POST["email"];
    $subject1 = $_POST["subject"];

    $subject = "Rupeelending Contact Form";
    $message = "Subject: $subject\n";
    $message .= "Name: $name\n";
    $message .= "Mobile: $mobile\n";
    $message .= "Email: $email\n";
    $message .= "Project: $project\n"; // Make sure to define $person or remove it if not needed
    $message .= "Subject: $subject1\n";     // Same with $date
    $message .= "Message: $message1\n";

    $to_user = $email; // User's email address
    $from = "care@rupeelending.com";
    $headers = "From: $from";

    // Send the emails
    $ok = mail($to_user, $subject, $message, $headers);
    $ok = mail("care@rupeelending.com", $subject, $message, $headers);

    // Check if the mail was sent successfully
    if ($ok == true) {
        echo "<script>alert('Form Submitted Successfully');</script>";
        echo "<script>window.location.href='contact.php';</script>";
    } else {
        echo "<script>alert('Form Not Submitted. Please try again.');</script>";
        echo "<script>window.location.href='contact.php';</script>";
    }
}
