<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'admin@ejasso.com';
    $email_subject = 'ejasso Contact Me';
    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                    "User Subject: $subject.\n.".
                    "User Message: $message.\n";
    
    $to = 'mosefeh943@agilekz.com';
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body, $headers);

    header("Location: ../index.html#contact");
?>