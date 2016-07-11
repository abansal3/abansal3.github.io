<!DOCTYPE html>
<html lang="en" ng-app="arpit">
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

        <!-- Angular -->
        <script src="https://code.angularjs.org/1.5.7/angular.min.js"></script>
        <script src="https://code.angularjs.org/1.5.7/angular-route.min.js"></script>
        <script src="https://code.angularjs.org/1.5.7/angular-resource.min.js"></script>
        <script src="js/app.js" type="application/javascript"></script>
    </head>

    <body ng-controller="mainController">

        <header>
            <h3><a href="#/">Arpit Bansal | <span>Designer. Developer. Entrepreneur.</span></a></h3>
            <i class="fa fa-bars"></i>
                <div class="dropdown">
                    <ul>
                        <li><a href="#/">Home</a></li>
                        <li><a href="https://greatmindsthinkdifferent.wordpress.com/" target="_blank">Blog</a></li>
                        <li><a href="https://www.freelancer.com/u/barpit123.html" target="_blank">Portflio</a></li>
                        <li><a href="contact/">Contact Me</a></li>
                    </ul>
                </div>
        </header>

        <section id="page">
            <section class="slide active-slide">
                <div class="slideImg" style="background-image: url('images/3.png');
    background-size: 400px 400px;
    background-repeat: no-repeat;
    background-position: center">
                </div>
                <div class="slideText">
                    <div class="form" my-enter="submit()" ng-view>

                    </div>
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
