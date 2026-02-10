<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Find easily a doctor and book online an appointment">
    <meta name="author" content="Ansonika">
    <title>PrimeCare - Find easily a doctor and book online an appointment</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="doctor-appointment/img2/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="doctor-appointment/img2/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="doctor-appointment/img2/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="doctor-appointment/img2/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css2/bootstrap.min.css" rel="stylesheet">
    <link href="css2/style.css" rel="stylesheet">
    <link href="css2/menu.css" rel="stylesheet">
    <link href="css2/vendors.css" rel="stylesheet">
    <link href="css2/all_icons_min.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>

    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->

   
    <!-- End Preload -->

    <header class="header_sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div id="logo_home">
                    <img src="img2/logo.png" alt="" width="163" height="36" class="img-fluid">
                      
                    </div>
                </div>
                <nav class="col-lg-9 col-6">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="#0"><span>Menu mobile</span></a>
                    
                    <div class="main-menu">
                        <ul>
                            <li class="submenu">
                                <a href="index.html" class="show-submenu">Home</a>
                            </li>
                            <li class="submenu">
                                <a href="about.html" class="show-submenu">About Us</a>
                            </li>
                            <li class="submenu">
                                <a href="index.html" class="show-submenu">Contact Us</a>
                            </li>
                            <li class="submenu">
                                <a href="http://localhost/html_menu_1/pc-pat-login.php" class="show-submenu">Patient Login</a>
                            </li>
                            <li class="submenu">
                                <a href="index.html" class="show-submenu">Doctor's Portal</a>
                        
                        </ul>
                    </div>
                    <!-- /main-menu -->
                </nav>
            </div>
        </div>
        <!-- /container -->
    </header>
    <!-- /header -->

    <main>
    <br><br><br><br>
<?php
include('register.php');
?>
    <br><br><br><br>
    </main>
    <!-- /main content -->

    <footer>
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <p>
                        <a href="index.html" title="Findoctor">
                            <img src="img2/logo.png" alt="" width="163" height="36" class="img-fluid">
                        </a>
                    </p>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h5>About</h5>
                    <ul class="links">
                        <li><a href="about.html">About us</a></li>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="register.html">Register</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4">
                    <h5>Contact with Us</h5>
                    <ul class="contacts">
                        <li><a href="#"><i class="icon_mobile"></i> +91 8459 1929 79</a></li>
                        <li><a href="mailto:info@findoctor.com"><i class="icon_mail_alt"></i> junaid@apv.com</a></li>
                    </ul>
                    <div class="follow_us">
                        <h5>Follow us</h5>
                        <ul>
                            <li><a href="#0"><i class="social_facebook"></i></a></li>
                            <li><a href="#0"><i class="social_twitter"></i></a></li>
                            <li><a href="#0"><i class="social_linkedin"></i></a></li>
                            <li><a href="#0"><i class="social_instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/row-->
            <hr>
            <div class="row">
                <div class="col-md-8">
                    <ul id="additional_links">
                        <li><a href="#0">Terms and conditions</a></li>
                        <li><a href="#0">Privacy</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div id="copy">© 2022</div>
                </div>
            </div>
        </div>
    </footer>
    <!--/footer-->

    <div id="toTop"></div>
    <!-- Back to top button -->

    <!-- COMMON SCRIPTS -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/common_scripts.min.js"></script>
    <script src="js/functions.js"></script>

</body>

</html>