<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];

    $emailFrom = 'sunvillebakerylv@gmail.com';

    $emailSubject = "New Form Submission";

    $emailBody = "User Name: $name.\n".
                    "User Email: $customerEmail.\n".
                        "User Message: $msg.\n";

    $to = "sunvillebakerylv#gmail.com"

    $headers = "From: $emailFrom \r\n";

    $hearders .= "Reply-to: $email \r\n";

    mail($to, $emailSubject, $emailBody, $headers);

    headers("Location: index.html")


?>