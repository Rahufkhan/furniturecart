<?php 

    $name = $_Post['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];


    $email_from = "rahufkhan1895@gmail.com";
    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                    "user Email: $visitor_email.\n".
                        "user Message: $message.\n";

    $to = "khan9902371388@gmail.com";
    $headers = "From: $emial_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
?>