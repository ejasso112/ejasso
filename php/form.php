<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'admin@ejasso.com';
    $email_subject = 'ejasso.com - Contact Me Form';
    $email_body = "User Name: $name\n".
                    "User Email: $visitor_email\n".
                    "User Subject: $subject\n".
                    "User Message: $message\n";
    
    $to = 'eduardo.jasso.web@gmail.com';
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body, $headers);

    header("Location: ../index.html#contact");
?>