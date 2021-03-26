<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta-data -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- title -->
    <title>Home | Notes Marketplace</title>

    <!-- Favicon-->
    <link rel="shortcut icon" href="../images/favicon.ico">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">

    <style>
        /* head */
        #head-content {
            width: 100%;
            height: 620px;
            position: relative;
            background-image: url('../images/banner-with-overlay-home.jpg');
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }

        #head-content-inner {
            position: absolute;
            top: 60%;
            transform: translateY(-60%);
            -webkit-transform: translateY(-60%);
            -moz-transform: translateY(-60%);
            -ms-transform: translateY(-60%);
            -o-transform: translateY(-60%);
        }

        #head-heading p {
            color: white;
            font-size: 40px;
            line-height: 54px;
            font-weight: 700;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container p-0">
                <div class="row">

                    <!-- Logo -->
                    <div class="col-md-3 navbar-header">
                        <a class="navbar-brand text-left" href="HomePage.php">
                            <img src="../images/logo.png" alt="logo">
                        </a>
                    </div>

                    <!-- Link -->
                    <div class="text-right col-md-9 collapse navbar-collapse p-0" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="Search.php">Search Notes</a></li>
                            <li class="nav-item"><a class="nav-link " href="AddNotes.php">Sell Your Notes</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="BuyerRequest.php">Buyer Requests</a></li>
                            <li class="nav-item"><a class="nav-link" href="FAQ.php">FAQ</a></li>
                            <li class="nav-item"><a class="nav-link" href="ContactUs.php">Contact Us</a></li>
                            <li class="nav-item">
                                <div class="dropdown">
                                    <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <img src="../images/reviewer-1.png" width="30" height="30" alt="user-image"
                                            class="d-inline-block align-top avatar-header rounded-circle">
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="UserProfile.php">My Profile</a>
                                        <a class="dropdown-item " href="MyDownload.php">My Download</a>
                                        <a class="dropdown-item" href="MySoldNote.php">My Sold Notes</a>
                                        <a class="dropdown-item" href="MyRejectedNote.php">My Rejected Notes</a>
                                        <a class="dropdown-item" href="ChangePassword.php">Change Password</a>
                                        <a class="dropdown-item btn-logout" href="Login.php">LogOut</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="Login.php">LogOut</a></li>
                        </ul>
                    </div>

                    <!-- Mobile link -->
                    <div class="mobile-nav col-md-8 text-right">
                        <img src="../images/menu.png" alt="menu" id="mobile-nav-open-btn" class="text-right">
                    </div>

                    <div id="mobile-nav" class="text-left">
                        <span id="mobile-nav-close-btn">
                            <img src="../images/xmark.png" alt="close-image">
                        </span>
                        <div id="mobile-nav-content">
                        <ul class="nav navig">
                                <li class="nav-item"><a class="nav-link" href="Search.php">Search Notes</a></li>
                                <li class="nav-item"><a class="nav-link" href="AddNotes.php">Sell Your Notes</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="BuyerRequest.php">Buyer Requests</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="FAQ.php">FAQ</a></li>
                                <li class="nav-item"><a class="nav-link" href="ContactUs.php">Contact Us</a></li>
                                <li class="nav-item">
                                    <div class="dropdown">
                                        <a href="#collapseExample3" data-toggle="collapse" role="button"
                                            aria-expanded="false" aria-controls="collapseExample3"
                                            class="nav-link nav-link-custom">
                                            <img src="../images/reviewer-1.png" width="30" height="30" alt="user-image"
                                                class="d-inline-block align-top avatar-header rounded-circle">
                                        </a>

                                        <div id="collapseExample3" class="collapse">
                                            <a class="dropdown-item" href="UserProfile.php">My Profile</a>
                                            <a class="dropdown-item" href="MyDownload.php">My Download</a>
                                            <a class="dropdown-item" href="MySoldNote.php">My Sold Notes</a>
                                            <a class="dropdown-item" href="MyRejectedNote.php">My Rejected Notes</a>
                                            <a class="dropdown-item" href="ChangePassword.php">Change Password</a>
                                            <a class="dropdown-item btn-logout" href="Login.php">LogOut</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="Login.php">LogOut</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- End Navigation -->

    <!-- preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <!-- Head -->
    <section id="head">
        <div id="head-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6" id="head-content-inner">
                        <div id="head-heading">
                            <p>Download Free/Paid Notes <br> or Sale your Book</p>
                        </div>
                        <div id="head-text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur <br> distinctio magni!
                                Excepturi adipisicing elit.</p>
                        </div>
                        <div id="head-button">
                            <a class="btn btn-head" href="#" title="Learn More" role="button">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Head -->

    <!-- About -->
    <section id="about">
        <div class="content-box">
            <div class="container">
                <div class="row">
                    <!-- Left -->
                    <div class="col-md-4">
                        <div id="about-left">
                            <div class="heading-1">
                                <h3>About <br>NoteMarketPlace</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Right -->
                    <div class="col-md-8">
                        <div id="about-right">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore, modi minima vitae fugit
                                magnam amet voluptatum corrupti quo inventore, quam alias voluptas et voluptates autem
                                itaque tempore perspiciatis! Nisi nulla esse qui exercitationem vitae corrupti delectus
                                quo inventore numquam nesciunt architecto!</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime asperiores repellat,
                                architecto consequatur animi exercitationem ab commodi. Sunt consequatur animi rerum
                                tempora officia iure cupiditate vitae magnam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About -->

    <!-- Work -->
    <section id="work">
        <div class="content-box">
            <div class="container">
                <!-- Heading -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="heading-1">
                            <h3>How it Works</h3>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <!-- Download -->
                    <div class="col-md-6">
                        <div class="work-item text-center">
                            <div class="work-image">
                                <img src="../images/download.png" alt="download">
                            </div>
                            <h5>Download Free/Paid Notes</h5>
                            <p>Get Material for your <br>Course etc.</p>
                            <div id="work-button">
                                <a class="btn btn-work" href="#" title="Download" role="button">Download</a>
                            </div>
                        </div>
                    </div>
                    <!-- Seller -->
                    <div class="col-md-6">
                        <div class="work-item text-center">
                            <div class="work-image">
                                <img src="../images/seller.png" alt="download">
                            </div>
                            <h5>Seller</h5>
                            <p>Upload and Download Course <br>and Material etc.</p>
                            <div id="work-button">
                                <a class="btn btn-work" href="#" title="Sell Book" role="button">Sell Book</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Work -->

    <!-- Testimonials -->
    <section id="testimonials">
        <div class="content-box">
            <div class="container">
                <!-- Heading -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="heading-1">
                            <h3>What our Customers are Saying</h3>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <!-- Testimonial - 01 -->
                        <div class="testimonial">
                            <div class="row">
                                <div class="col-md-3 col-sm-3">
                                    <img src="../images/customer-1.png" alt="">
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <div class="test-name-desc">
                                        <h5>Walter Meller</h5>
                                        <p>Founder & CEO, Matrix Group</p>
                                    </div>
                                </div>
                            </div>
                            <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt accusamus molla odio
                                toanditiis, iure moleas asperiores elit consectetur unde in deserunt."</p>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <!-- Testimonial - 02 -->
                        <div class="testimonial">
                            <div class="row">
                                <div class="col-md-3 col-sm-3">
                                    <img src="../images/customer-2.png" alt="">
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <div class="test-name-desc">
                                        <h5>Jonnie Riley</h5>
                                        <p>Employee, Curious Snakcs</p>
                                    </div>
                                </div>
                            </div>
                            <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt accusamus molla odio
                                toanditiis, iure moleas asperiores elit consectetur unde in deserunt."</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Testimonial - 03 -->
                        <div class="testimonial">
                            <div class="row">
                                <div class="col-md-3 col-sm-3">
                                    <img src="../images/customer-3.png" alt="">
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <div class="test-name-desc">
                                        <h5>Amilia Luna</h5>
                                        <p>Teacher, Saint joseph High School</p>
                                    </div>
                                </div>
                            </div>
                            <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt accusamus molla odio
                                toanditiis, iure moleas asperiores elit consectetur unde in deserunt."</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Testimonial - 04 -->
                        <div class="testimonial">
                            <div class="row">
                                <div class="col-md-3 col-sm-3">
                                    <img src="../images/customer-4.png" alt="">
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <div class="test-name-desc">
                                        <h5>Danial Cardos</h5>
                                        <p>Software engineer, Infinitum Company</p>
                                    </div>
                                </div>
                            </div>
                            <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt accusamus molla odio
                                toanditiis, iure moleas asperiores elit consectetur unde in deserunt."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonials -->

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <!-- Copyright -->
                <div class="col-md-6 col-sm-8 foot-text text-left">
                    <p>Copyright &copy; TatvaSoft All Rights Reserved.</p>
                </div>
                <!-- Social Icon -->
                <div class="col-md-6 col-sm-4 foot-icon col-sm-4 text-right">
                    <ul class="social-list">
                        <li>
                            <a href="#">
                                <img src="../images/facebook.png" alt="facebook-image">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../images/twitter.png" alt="twitter-image">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../images/linkedin.png" alt="linkedin-image">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- JavaScript -->
    <!-- JQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="js/upload.js"></script>
    <script src="js/script.js"></script>

    <script>
        $(function () {
            // on page load
            showHideNav();

            $(window).scroll(function () {
                showHideNav();
            });

            function showHideNav() {
                if ($(window).scrollTop() > 50) {
                    // show white navigation
                    $("nav").addClass("white-nav-top");
                    // logo
                    $(".navbar-brand img").attr("src", "../images/logo.png");
                } else {
                    // hide white navigation
                    $("nav").removeClass("white-nav-top");
                    $(".navbar-brand img").attr("src", "../images/top-logo.png");
                }
            }
        });
    </script>
</body>

</html>