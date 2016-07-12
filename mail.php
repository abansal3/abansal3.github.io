<?php

try {

    require_once('vendor/swiftmailer/swiftmailer/lib/swift_required.php');

        // Convert from json to object
        $obj = json_decode(file_get_contents("php://input"));

        print_r($obj);

        // Assign variables
        $name = $obj->name;
        $message = $obj->message;
        $phone = $obj->phone;
        $email = $obj->email;

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

catch (Exception $e) {
    echo 'Message' . $e->getMessage();
}

?>
