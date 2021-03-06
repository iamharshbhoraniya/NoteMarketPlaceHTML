<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Download | Notes Marketplace</title>

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
        .title {
            margin-top: 20px;
            margin-bottom: 20px;
            font-family: 'Open Sans', sans-serif;
            font-weight: 600;
            line-height: 38px;
            color: #6255a5;
        }

        textarea {
            border: 1px solid #d1d1d1;
            height: 130px !important;
            border-radius: 3px;
        }

        /* rating */
        .rate {
            float: left;
            height: 20px;
            margin-bottom: 30px;
        }

        .rate:not(:checked)>input {
            position: absolute;
            top: -9999px;
        }

        .rate:not(:checked)>label {
            float: right;
            width: 46px;
            height: 46px;
            margin-right: 18px;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
            font-size: 30px;
            color: #ccc;
        }

        .rate:not(:checked)>label:before {
            content: url("../images/star-white.png");
        }

        .rate>input:checked~label {
            content: url("../images/star.png");
        }

        .rate:not(:checked)>label:hover,
        .rate:not(:checked)>label:hover~label {
            content: url("../images/star.png");
        }

        .rate>input:checked+label:hover,
        .rate>input:checked+label:hover~label,
        .rate>input:checked~label:hover,
        .rate>input:checked~label:hover~label,
        .rate>label:hover~input:checked~label {
            content: url("../images/star.png");
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
                                        <a class="dropdown-item" href="MyProfile.php">My Profile</a>
                                        <a class="dropdown-item active" href="MyDownload.php">My Download</a>
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
                                <li class="nav-item"><a class="nav-link active" href="AddNotes.php">Sell Your Notes</a>
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
                                            <a class="dropdown-item" href="MyProfile.php">My Profile</a>
                                            <a class="dropdown-item active" href="MyDownload.php">My Download</a>
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

    <!-- Content -->
    <section id="content">
        <div class="container">

            <div class="row heading">
                <div class="col-md-6 col-sm-6 p-0">
                    <h3 class="heading-1">My Download</h3>
                </div>

                <div class="col-md-6 col-sm-6 text-right search-1 p-0">
                    <img src="../images/search-icon.png" class="form-control-feedback" alt="search-icon">
                    <input class="input-search" type="search" placeholder="Search">
                    <a class="btn btn-general">Search</a>
                </div>
            </div>

            <div class="row">
                <div class="table-top table-responsive">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th class="text-center" scope="col">Sr No.</th>
                                <th scope="col">Note Title</th>
                                <th scope="col">Category</th>
                                <th scope="col">Buyer</th>
                                <th scope="col">Phone no.</th>
                                <th scope="col">Sell Type</th>
                                <th scope="col">Price</th>
                                <th scope="col">Download Date/Time</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center" scope="row">1</td>
                                <td class="td-blue">Data Science</td>
                                <td>Science</td>
                                <td>testing123@gmail.com</td>
                                <td>+91 9874563527</td>
                                <td>Paid</td>
                                <td>$250</td>
                                <td>27 Nov 2020, 11:24:34</td>
                                <td class="text-center">
                                    <img src="../images/eye.png" alt="eye-image">
                                </td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <img src="../images/dots.png" alt="dot-image">
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Download Notes</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#exampleModal">Add
                                                Reviews/Feedback</a>
                                            <a class="dropdown-item" href="#">Report as Inappropriate</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" scope="row">2</td>
                                <td class="td-blue">Accounts</td>
                                <td>Commere</td>
                                <td>testing123@gmail.com</td>
                                <td>+91 9874563527</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>27 Nov 2020, 11:24:34</td>
                                <td class="text-center">
                                    <img src="../images/eye.png" alt="eye-image">
                                </td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <img src="../images/dots.png" alt="dot-image">
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Download Notes</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#exampleModal">Add
                                                Reviews/Feedback</a>
                                            <a class="dropdown-item" href="#">Report as Inappropriate</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" scope="row">3</td>
                                <td class="td-blue">Social Studies</td>
                                <td>Social</td>
                                <td>testing123@gmail.com</td>
                                <td>+91 9874563527</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>27 Nov 2020, 11:24:34</td>
                                <td class="text-center">
                                    <img src="../images/eye.png" alt="eye-image">
                                </td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <img src="../images/dots.png" alt="dot-image">
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Download Notes</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#exampleModal">Add
                                                Reviews/Feedback</a>
                                            <a class="dropdown-item" href="#">Report as Inappropriate</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" scope="row">4</td>
                                <td class="td-blue">AI</td>
                                <td>IT</td>
                                <td>testing123@gmail.com</td>
                                <td>+91 9874563527</td>
                                <td>Paid</td>
                                <td>$158</td>
                                <td>27 Nov 2020, 11:24:34</td>
                                <td class="text-center">
                                    <img src="../images/eye.png" alt="eye-image">
                                </td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <img src="../images/dots.png" alt="dot-image">
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Download Notes</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#exampleModal">Add
                                                Reviews/Feedback</a>
                                            <a class="dropdown-item" href="#">Report as Inappropriate</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" scope="row">5</td>
                                <td class="td-blue">Lorem ipsum</td>
                                <td>Lorem</td>
                                <td>testing123@gmail.com</td>
                                <td>+91 9874563527</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>27 Nov 2020, 11:24:34</td>
                                <td class="text-center">
                                    <img src="../images/eye.png" alt="eye-image">
                                </td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <img src="../images/dots.png" alt="dot-image">
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Download Notes</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#exampleModal">Add
                                                Reviews/Feedback</a>
                                            <a class="dropdown-item" href="#">Report as Inappropriate</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" scope="row">6</td>
                                <td class="td-blue">Data Science</td>
                                <td>Science</td>
                                <td>testing123@gmail.com</td>
                                <td>+91 9874563527</td>
                                <td>Paid</td>
                                <td>$555</td>
                                <td>27 Nov 2020, 11:24:34</td>
                                <td class="text-center">
                                    <img src="../images/eye.png" alt="eye-image">
                                </td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <img src="../images/dots.png" alt="dot-image">
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Download Notes</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#exampleModal">Add
                                                Reviews/Feedback</a>
                                            <a class="dropdown-item" href="#">Report as Inappropriate</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" scope="row">7</td>
                                <td class="td-blue">Accounts</td>
                                <td>Commere</td>
                                <td>testing123@gmail.com</td>
                                <td>+91 9874563527</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>27 Nov 2020, 11:24:34</td>
                                <td class="text-center">
                                    <img src="../images/eye.png" alt="eye-image">
                                </td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <img src="../images/dots.png" alt="dot-image">
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Download Notes</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#exampleModal">Add
                                                Reviews/Feedback</a>
                                            <a class="dropdown-item" href="#">Report as Inappropriate</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" scope="row">8</td>
                                <td class="td-blue">Social Studies</td>
                                <td>Social</td>
                                <td>testing123@gmail.com</td>
                                <td>+91 9874563527</td>
                                <td>Free</td>
                                <td>$0</td>
                                <td>27 Nov 2020, 11:24:34</td>
                                <td class="text-center">
                                    <img src="../images/eye.png" alt="eye-image">
                                </td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <img src="../images/dots.png" alt="dot-image">
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Download Notes</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#exampleModal">Add
                                                Reviews/Feedback</a>
                                            <a class="dropdown-item" href="#">Report as Inappropriate</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" scope="row">9</td>
                                <td class="td-blue">AI</td>
                                <td>IT</td>
                                <td>testing123@gmail.com</td>
                                <td>+91 9874563527</td>
                                <td>Paid</td>
                                <td>$250</td>
                                <td>27 Nov 2020, 11:24:34</td>
                                <td class="text-center">
                                    <img src="../images/eye.png" alt="eye-image">
                                </td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <img src="../images/dots.png" alt="dot-image">
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Download Notes</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#exampleModal">Add
                                                Reviews/Feedback</a>
                                            <a class="dropdown-item" href="#">Report as Inappropriate</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" scope="row">10</td>
                                <td class="td-blue">Lorem ipsum</td>
                                <td>Lorem</td>
                                <td>testing123@gmail.com</td>
                                <td>+91 9874563527</td>
                                <td>Free</td>
                                <td>$115</td>
                                <td>27 Nov 2020, 11:24:34</td>
                                <td class="text-center">
                                    <img src="../images/eye.png" alt="eye-image">
                                </td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <img src="../images/dots.png" alt="dot-image">
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Download Notes</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#exampleModal">Add
                                                Reviews/Feedback</a>
                                            <a class="dropdown-item" href="#">Report as Inappropriate</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-12 num">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <img src="../images/left-arrow.png" alt="left-arrow">
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link active" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <img src="../images/right-arrow.png" alt="right-arrow">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" style="margin-top: 100px">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title title" id="exampleModalLabel">Add Review</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <img src="../images/close.png" alt="close-image" aria-hidden="true">
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row p-0 m-0">
                                <div class="form-group">
                                    <div class="rate">
                                        <input type="radio" id="star5" name="rate" value="5" />
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" id="star4" name="rate" value="4" />
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" name="rate" value="3" />
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" name="rate" value="2" />
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" name="rate" value="1" />
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputComment1">Comments <span>*</span></label>
                                <textarea name="comments" class="form-control" id="exampleInputComment1"
                                    placeholder="Comments..." rows="3"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="form-group">
                                <a href="#" id="btnSubmit" class="btn">SUBMIT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Content -->

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

    <!-- Popper Js -->
    <script src="js/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="js/script.js"></script>
</body>

</html>