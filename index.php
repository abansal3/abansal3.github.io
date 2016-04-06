<?php

    ob_start();
    require_once("database_connection.php");

    session_start();
//session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Arpit Bansal</title>
        
        <link href="css/index.css" type="text/css" rel="stylesheet"/>
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
        
        <!-- Favicons -->
        
        <link rel="apple-touch-icon" sizes="57x57" href="/images/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/images/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/images/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/images/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/images/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/images/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/images/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/images/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/images/favicons/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="/images/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/images/favicons/favicon-194x194.png" sizes="194x194">
        <link rel="icon" type="image/png" href="/images/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="/images/favicons/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="/images/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/images/favicons/manifest.json">
        <link rel="mask-icon" href="/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="/images/favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-TileImage" content="/images/favicons/mstile-144x144.png">
        <meta name="msapplication-config" content="/images/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="js/index.js" type="application/javascript"></script>
    </head>
    
    <body>
        
        <header>
            <h3><a href="index.php">Arpit Bansal | <span>Designer. Developer. Entrepreneur.</span></a></h3>
            <i class="fa fa-bars"></i>
                <div class="dropdown">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="https://greatmindsthinkdifferent.wordpress.com/" target="_blank">Blog</a></li>
                        <li><a href="https://www.freelancer.com/u/barpit123.html" target="_blank">Portflio</a></li>
                        <li><a href="contact/">Contact Me</a></li>
                    </ul>
                </div>
        </header>

        <section id="page">
            <section class="slide active-slide">
                <div class="slideImg" style="background-image: url('images/1-1.png');
    background-size: 400px 400px;
    background-repeat: no-repeat;
    background-position: center">
                </div>
                <div class="slideText">
                    <form action="index.php" enctype="text/plain" method="get">
                    <p style="font-size: 15pt">
                    
                    <?php
                    
                    if (isset($_SESSION["Name"])) {                 
                        if (isset($_SESSION["Message"])) {
                            if (isset($_SESSION["Info"])) {
                                if ($_SESSION["Info"] == 1) {
                                    if (isset($_SESSION["Complete"])) {
                                        echo "You're awesome. I will get in touch with you shortly! I promise!";
                                    } else {
                                        echo "Perfect! Enter your details below:<br /><br />" . "<input name='Phone' placeholder='Phone Number' class='info' value=''></input><br /><input name='Email' placeholder='Email' class='info' value=''></input><br /><br /><button name='contact_submit' type='submit' value='1'>Submit</button";
                                    }
                                } else if ($_SESSION["Info"] == 0) {
                                    echo "Oh, that's alright. I'm glad you chose to visit my website. I hope to see you again!";
                                }
                            } else {
                                echo "That's awesome! Would you like to leave your phone number and email with me so I can get in touch with you?<br /><br />" . "<button id='yes_button' name='Info' type='submit' value='1'>Yes</button><button id='no_button'  name='Info' type='submit' value='0'>No</button>";
                            }
                        } else {
                             echo "Hi " . $_SESSION["Name"] .  ", What made you come to my website?<br /><br />" . "<input id='message' name='message' value=''></input>";
                        }
                    } else {
                        echo "<span>" . htmlentities("Hey,") . "</span><br /><br />" . htmlentities("My name is Arpit. What's yours?") . "<br />" . "<input id='name' name='guestName' type='text' onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter Name'\" placeholder=
                    'Enter Name' value=''></input>.";
                    }
                    ?></p>
                    </form>
                    
                    <?php 

                    $contactInfo = array();    
                    
                        if (isset($_GET["guestName"])) {
                            $name = $_GET["guestName"];
                            
                            $_SESSION["Name"] = $name;
                            
                            $contactInfo[0] = $name;
                                                
                            header("Location: index.php");
                        }
                                        
                        if (isset($_GET["message"])) {
                            $message = $_GET["message"];
                            
                            $_SESSION["Message"] = $message;
                            
                            array_push($contactInfo,$message);
                            
                            header("Location: index.php");
                        }
                    
                        if (isset($_GET["Info"])) {
                            $info = $_GET["Info"];
                            
                            $_SESSION["Info"] = $info;
                                        
                            header("Location: index.php");
                        }
                    
                        if (isset($_SESSION["Info"])) {
                                
                                if ($_SESSION["Info"] == 1 && isset($_GET["Phone"]) && isset($_GET["Email"])) {
                                    $phone = $_GET["Phone"];

                                    $email = $_GET["Email"];
                                    
                                    $sessionName = $contactInfo[0];
                                    
                                    $sessionMessage = $contactInfo[1];

                                    mysqli_query($connection,"INSERT INTO contact (Name,Email,Phone,Message) VALUES ('$sessionName','$email','$phone','$sessionMessage')");

                                    $_SESSION["Complete"] = "";
                                    
                                    header("Location: index.php");
                                }
                                
                            }

                    ?>
                    
                </div>
            </section>
            <section class="slide">
                <div class="slideImg" style="background-image: url('images/apple-iphone-books-desk.jpg');
    background-size: cover;
    background-repeat: no-repeat;">
                </div>
                <div class="slideText">
                    <p><?php echo htmlentities("I am an 18 years old self taught programmer with a keen interest in design and entrepreneurship. If you have a project you'd like help with or just wish to get in touch, feel free to explore my website!"); ?></p>
                </div>
            </section>
            <section class="slide">
                <div class="slideImg" style="background-image: url('images/hitch.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: -200px 0px">
                </div>
                <div class="slideText">
                    <p><span>About Me</span><br /><br />I go to school at Babson College in Boston, MA and am studying Technology, Entrepreneurship and Design.<br /><br />Find my portfolio in the dropdown on the top right!</p>
                </div>
            </section>
        </section>
        
        <footer>
            <p>Press the <span>arrow keys</span> to explore the page</p>
        </footer>
    
    </body>
</html>

<?php
    require_once("database_connection_close.php");
    ob_end_flush();
?>