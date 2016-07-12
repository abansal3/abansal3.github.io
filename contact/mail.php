<?php

    if (count($_POST) > 0) {

        // Assign variables
        $name = $_POST["name"];
        $message = $_POST["message"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];

        // email config

        $gmail = 'smtp.gmail.com';

        $transport = Swift_SmtpTransport::newInstance($gmail, 587, "tls")
          ->setUsername('barpit123@gmail.com')
          ->setPassword('kvhncsdcbmckkhlo');

        $mailer = Swift_Mailer::newInstance($transport);

        $message = Swift_Message::newInstance('Arpit Bansal - Reaching out')
          ->setFrom(array('barpit123@gmail.com' => 'Arpit Bansal'))
          ->setTo(array($email,"abansal3@babson.edu"))
          ->setBody("Hi " . $name . ", \n\n" . "You had contacted me through my website. Just to verify, this is the information you had entered: \n\n" . "Name: $name\nEmail:$email\nPhone: $phone\nMessage: $message\n\nThank you so much for taking the time to explore my website! I will be reaching out to you personally to talk with you.");

        $result = $mailer->send($message);
    }

?>
