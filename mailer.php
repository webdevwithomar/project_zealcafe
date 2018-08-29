<?php

    // Get the form fields, removes html tags and whitespace.
    $name = strip_tags(trim($_POST["customerName"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["customerEmail"]), FILTER_SANITIZE_EMAIL);
    $phone = trim($_POST["customerTel"]);
    $message = trim($_POST["customerText"]);

    // Check the data.
    if (empty($name) OR empty($phone) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: contact.php?success=-1#form");
        exit;
    }

    // Set the recipient email address. Update this to YOUR desired email address.
    $recipient = "zealcafebd@gmail.com";

    // Set the email subject.
    $subject = "New contact from $name";

    // Build the email content.
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Phone: $phone\n\n";
    $email_content .= "Message:\n$message\n";

    // Build the email headers.
    $email_headers = "From: $name <$email>";

    // Send the email.
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Redirect to the index.html page with success code
    header("Location: contact.php?success=1#form");

?>