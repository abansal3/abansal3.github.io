<?php
    require_once('../swift/lib/swift_required.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Arpit Bansal</title>

        <link href="../css/contact.css" type="text/css" rel="stylesheet"/>

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


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="../js/contact.js" type="application/javascript"></script>
    </head>

    <body>

        <header>
            <h3><a href="../#">Arpit Bansal | <span>Designer. Developer. Entrepreneur.</span></a></h3>
            <i class="fa fa-bars"></i>
                <div class="dropdown">
                    <ul>
                        <li><a href="../">Home</a></li>
                        <li><a href="https://greatmindsthinkdifferent.wordpress.com/" target="_blank">Blog</a></li>
                        <li>Portflio</li>
                        <li><a href="/contact">Contact Me</a></li>
                    </ul>
                </div>
        </header>

        <section id="main">
            <section id="contact_form" class="sections">
                <form method="post" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <td>Name:</td>
                            <td><input name="name" type="text" value=""/></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><input name="email" type="email" value=""/></td>
                        </tr>
                        <tr>
                            <td>Phone Number:</td>
                            <td><input name="phone" type="text" value=""/></td>
                        </tr>
                        <tr>
                            <td>Message:</td>
                            <td><textarea name="message" value=""></textarea></td>
                        </tr>
                    </table>
                    <button name="contact_submit" type="submit">Contact Me!</button>
                </form>
            </section>

            <?php include('mail.php'); ?>

            <section id="social_network" class="sections">
                <h2>Connect with me:</h2>
                <div id="icons">
                    <a target="_blank" href="https://www.facebook.com/arpit.678"><img src="../images/Facebook%20Round.png"/></a>
                    <a target="_blank" href="https://twitter.com/arpitbansa1"><img src="../images/Twitter%20round.png"/></a>
                    <a target="_blank" href="https://in.linkedin.com/in/arpit-bansal-a6397876"><img src="../images/linkedin-round.png"/></a>
                    <a target="_blank" href="https://medium.com/@arpitbansal"><img src="../images/medium.png"/></a>
                </div>
            </section>
        </section>
    </body>

</html>
