<?php

print_r($_POST);
print_r(file_get_contents("php://input"));

require_once('vendor/swiftmailer/swiftmailer/lib/swift_required.php');

    if (count($HTTP_RAW_POST_DATA) > 0) {
        // Convert from json to object
        $json = json_decode($HTTP_RAW_POST_DATA);
        //print_r($json);

        // Assign variables
        $name = $json->name;
        $message = $json->message;
        $phone = $json->phone;
        $email = $json->email;

        // email config

        $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 587, "tls")
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
