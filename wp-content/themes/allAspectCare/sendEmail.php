<?php

//send email function here

 if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = htmlspecialchars(trim($_POST['YourName']), ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars(trim($_POST['email']), ENT_QUOTES, 'UTF-8');
        $subject = htmlspecialchars(trim($_POST['subject']), ENT_QUOTES, 'UTF-8');
        $message = htmlspecialchars(trim($_POST['message']), ENT_QUOTES, 'UTF-8');
    
        $to = "info@allaspects-care.com.au";

        $headers = "From: $name <$email>";
        $subject = "New message from $name about $subject";
        $message = "Name: $name\n\nEmail: $email\n\nMessage: $message";

        if (mail($to, $subject, $message, $headers)) {
            echo "Success";
        } else {
            echo "Failed";
        }

}
?>