<?php
    $email_from = 'm8.alvarez.santy@alvarez.com';
    $headers = "From: $email_from \r\n";
    $email_subject = "New Form submission";

    $email_body = "pepep";
    mail('alexa@hit.cat',$email_subject, $email_body, $headers);
?>