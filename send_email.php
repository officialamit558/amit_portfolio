<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sender = $_POST["sender"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    // Set the recipient email address
    $to = "your-email@example.com";
    
    // Set email headers
    $headers = "From: $sender\r\n";
    $headers .= "Reply-To: $sender\r\n";
    
    // Send the email
    $success = mail($to, $subject, $message, $headers);
    
    if ($success) {
        echo "Your message has been sent successfully!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
