<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Compose the email message
    $to = "bestpixelarts4u@gmail.com"; // Your Gmail address
    $subject = "New Message from Pixels Art Website";
    $body = "First Name: $first_name\n";
    $body .= "Last Name: $last_name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message";
    
    // Send the email
    $headers = "From: $email";
    $success = mail($to, $subject, $body, $headers);
    
    if ($success) {
        echo "Your message has been sent successfully.";
    } else {
        echo "There was an error sending your message. Please try again later.";
        error_log("Error sending email: " . error_get_last()['message']);
    }
} else {
    // If the request method is not POST, redirect to the contact page
    header("Location: contact.html");
}
?>
