<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Change these variables to your email and desired subject
    $to = "uditgoswami2020@gmail.com";
    $subject = "New message from your website I.S.P.T X";

    
    // Build the email message
$email_message = "Name: $name\n";  // Adds the name of the sender to the email message
$email_message .= "Email: $email\n\n";  // Adds the email of the sender to the email message
$email_message .= "Message:\n$message";  // Adds the message content to the email message


    // Set headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Thank you for your message. We will get back to you soon!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>

</body>
</html>