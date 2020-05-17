<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];

    $email_from = 'sunvillebakerylv@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $email.\n".
                        "User Message: $msg.\n";

    $to = "sunvillebakerylv@gmail.com";

    $headers = "From: $emailFrom \r\n";

    $hearders .= "Reply-to: $email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    headers("Location: index.html");


?>