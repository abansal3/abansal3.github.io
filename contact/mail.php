<?php

    if (count($_POST) > 0) {

        // Assign variables
        $name = $_POST["name"];
        $message = $_POST["message"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];

        // email config

        $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
          ->setUsername('barpit123@gmail.com')
          ->setPassword('vibgyor123');

        $mailer = Swift_Mailer::newInstance($transport);

        $message = Swift_Message::newInstance('Arpit Bansal - Reaching out')
          ->setFrom(array('barpit123@gmail.com' => 'Arpit Bansal'))
          ->setTo(array($email))
          ->setBody("Hi " . $name . ", \n\n" . "You had contacted me through my website. Just to verify, this is the information you had entered: \n\n" . "Name: $name\nEmail:$email\nPhone: $phone\nMessage: $message\n\nThank you so much for taking the time to explore my website! I will be reaching out to you personally to talk with you.");

        $result = $mailer->send($message);

    }

?>
