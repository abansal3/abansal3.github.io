<?php 

if (isset($_POST["contact_submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    
    mysqli_query($connection,"INSERT INTO contact ('Name' , 'Email' , 'Phone' , 'Message') VALUES ('$name' , '$email', '$phone', '$message')");

}

?>