<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Downloaded Notes | Notes Marketplace</title>

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

</head>

<body>
    <!-- Navigation -->
    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container p-0">
                <div class="row">

                    <!-- Logo -->
                    <div class="col-md-4 navbar-header">
                        <a class="navbar-brand text-left" href="Dashboard.php">
                            <img src="../images/logo.png" alt="logo">
                        </a>
                    </div>

                    <!-- Link -->
                    <div class="text-right col-md-8 collapse navbar-collapse p-0" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="Dashboard.php">Dashboard</a></li>
                            <li class="nav-item dropdown">
                                <a href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" class="nav-link nav-link-custom">
                                    Notes
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="NoteUnderReview.php">Notes Under Review</a>
                                    <a class="dropdown-item" href="PublishedNote.php">Published Notes</a>
                                    <a class="dropdown-item  active" href="DownloadedNote.php">Downloaded Notes</a>
                                    <a class="dropdown-item" href="RejectedNote.php">Rejected Notes</a>

                                </div>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="Members.php">Members</a></li>
                            <li class="nav-item"><a class="nav-link" href="SpamReports.php">Reports</a></li>
                            <li class="nav-item dropdown">
                                <a href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" class="nav-link nav-link-custom">
                                    Setting
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="ManageSyatemConfiguration.php">Manage System
                                        Configuration</a>
                                    <a class="dropdown-item" href="ManageAdministrator.php">Manage Administrator</a>
                                    <a class="dropdown-item" href="ManageCategory.php">Manage Category</a>
                                    <a class="dropdown-item" href="ManageType.php">Manage Type</a>
                                    <a class="dropdown-item" href="ManageCountry.php">Manage Countries</a>

                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="dropdown">
                                    <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <img src="../images/reviewer-1.png" width="30" height="30" alt="user-image"
                                            class="d-inline-block align-top avatar-header rounded-circle">
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="MyProfile.php">Update Profile</a>
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
                                <li class="nav-item"><a class="nav-link" href="Dashboard.php">Dashboard</a></li>
                                <li class="nav-item">
                                    <a href="#collapseExample1" data-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="collapseExample1"
                                        class="nav-link nav-link-custom">
                                        Notes
                                    </a>

                                    <div id="collapseExample1" class="collapse">
                                        <a class="dropdown-item" href="NoteUnderReview.php">Notes Under Review</a>
                                        <a class="dropdown-item" href="PublishedNote.php">Published Notes</a>
                                        <a class="dropdown-item  active" href="DownloadedNote.php">Downloaded Notes</a>
                                        <a class="dropdown-item" href="RejectedNote.php">Rejected Notes</a>
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="Members.php">Members</a></li>
                                <li class="nav-item"><a class="nav-link" href="SpamReports.php">Reports</a></li>
                                <li class="nav-item">
                                    <a href="#collapseExample2" data-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="collapseExample2"
                                        class="nav-link nav-link-custom">
                                        Setting
                                    </a>

                                    <div id="collapseExample2" class="collapse">
                                        <a class="dropdown-item" href="ManageSyatemConfiguration.php">Manage System
                                            Configuration</a>
                                        <a class="dropdown-item" href="ManageAdministrator.php">Manage
                                            Administrator</a>
                                        <a class="dropdown-item" href="ManageCategory.php">Manage Category</a>
                                        <a class="dropdown-item" href="ManageType.php">Manage Type</a>
                                        <a class="dropdown-item" href="ManageCountry.php">Manage Countries</a>

                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#collapseExample3" data-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="collapseExample3"
                                        class="nav-link nav-link-custom">
                                        <img src="../images/reviewer-1.png" width="30" height="30" alt="user-image"
                                            class="d-inline-block align-top avatar-header rounded-circle">
                                    </a>

                                    <div id="collapseExample3" class="collapse">
                                        <a class="dropdown-item" href="MyProfile.php">Update Profile</a>
                                        <a class="dropdown-item" href="ChangePassword.php">Change Password</a>
                                        <a class="dropdown-item" href="Login.php">LogOut</a>
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
            <form>
                <div class="row heading">
                    <div class="col-md-6 col-sm-6 p-0">
                        <h3 class="heading-1">Downloaded Notes</h3>
                    </div>
                </div>

                <div class="row heading">
                    <div class="col-md-6 col-sm-6" style="padding-left: 5px">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 search-dropdown">
                                <label>Note</label>
                                <select class="form-control customDropDown-Multiple">
                                    <option>Select note</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4 search-dropdown">
                                <label>Seller</label>
                                <select class="form-control customDropDown-Multiple">
                                    <option>Select seller</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4 search-dropdown">
                                <label>Buyer</label>
                                <select class="form-control customDropDown-Multiple">
                                    <option>Select buyer</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div id="dnotes-search" class="col-md-6 col-sm-6 text-right p-0 search-1"
                        style="align-items: flex-end">
                        <img src="../images/search-icon.png" class="form-control-feedback" alt="search-icon"
                            style="bottom: 8px">
                        <input class="input-search" type="search" placeholder="Search">
                        <a class="btn btn-general btn-search" role="button">Search</a>
                    </div>
                </div>

                <div class="row">
                    <div class="table-top table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center" scope="col">Sr No.</th>
                                    <th scope="col">Note Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Buyer</th>
                                    <th scope="col"></th>
                                    <th scope="col">Seller</th>
                                    <th scope="col"></th>
                                    <th scope="col">Sell Type</th>
                                    <th scope="col">Price</th>
                                    <th class="text-center" scope="col">Downloaded<br>Date/Time</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center" scope="row">1</td>
                                    <td class="td-blue">Software Engineer</td>
                                    <td>IT</td>
                                    <td>Rahul Shah</td>
                                    <td>
                                        <img src="../images/eye.png" alt="eye-image">
                                    </td>
                                    <td>Khyati Patel</td>
                                    <td>
                                        <img src="../images/eye.png" alt="eye-image">
                                    </td>
                                    <td>Paid</td>
                                    <td>$145</td>
                                    <td class="text-center">25-11-2020, 11:08</td>
                                    <td class="text-center">
                                        <div class="dropdown">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <img src="../images/dots.png" alt="dot-image">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Notes</a>
                                                <a class="dropdown-item" href="#">View More Details</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" scope="row">2</td>
                                    <td class="td-blue">Computer Basic</td>
                                    <td>Computer</td>
                                    <td>Rahul Shah</td>
                                    <td>
                                        <img src="../images/eye.png" alt="eye-image">
                                    </td>
                                    <td>Nikunj Shah</td>
                                    <td>
                                        <img src="../images/eye.png" alt="eye-image">
                                    </td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td class="text-center">20-11-2020, 11:08</td>
                                    <td class="text-center">
                                        <div class="dropdown">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <img src="../images/dots.png" alt="dot-image">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Approve</a>
                                                <a class="dropdown-item" href="#">Download Notes</a>
                                                <a class="dropdown-item" href="#">View More Details</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" scope="row">3</td>
                                    <td class="td-blue">Human Body</td>
                                    <td>Science</td>
                                    <td>Rahul Shah</td>
                                    <td>
                                        <img src="../images/eye.png" alt="eye-image">
                                    </td>
                                    <td>Raj Shah</td>
                                    <td>
                                        <img src="../images/eye.png" alt="eye-image">
                                    </td>
                                    <td>Paid</td>
                                    <td>$204</td>
                                    <td class="text-center">08-11-2020, 04:07</td>
                                    <td class="text-center">
                                        <div class="dropdown">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <img src="../images/dots.png" alt="dot-image">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Approve</a>
                                                <a class="dropdown-item" href="#">Download Notes</a>
                                                <a class="dropdown-item" href="#">View More Details</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" scope="row">4</td>
                                    <td class="td-blue">world war 2</td>
                                    <td>History</td>
                                    <td>Rahul Shah</td>
                                    <td>
                                        <img src="../images/eye.png" alt="eye-image">
                                    </td>
                                    <td>Niya Patel</td>
                                    <td>
                                        <img src="../images/eye.png" alt="eye-image">
                                    </td>
                                    <td>Paid</td>
                                    <td>$58</td>
                                    <td class="text-center">17-10-2020, 12:30</td>
                                    <td class="text-center">
                                        <div class="dropdown">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <img src="../images/dots.png" alt="dot-image">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Approve</a>
                                                <a class="dropdown-item" href="#">Download Notes</a>
                                                <a class="dropdown-item" href="#">View More Details</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" scope="row">5</td>
                                    <td class="td-blue">Accounting</td>
                                    <td>Accounts</td>
                                    <td>Rahul Shah</td>
                                    <td>
                                        <img src="../images/eye.png" alt="eye-image">
                                    </td>
                                    <td>Rohit Gajera</td>
                                    <td>
                                        <img src="../images/eye.png" alt="eye-image">
                                    </td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td class="text-center">12-12-2019, 17:45</td>
                                    <td class="text-center">
                                        <div class="dropdown">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <img src="../images/dots.png" alt="dot-image">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Approve</a>
                                                <a class="dropdown-item" href="#">Download Notes</a>
                                                <a class="dropdown-item" href="#">View More Details</a>
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
            </form>
        </div>
    </section>

    <hr class="p-0 m-0">

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <!-- Copyright -->
                <div class="col-md-6 col-sm-2 foot-text text-left">
                    <p>Version : 1.1.24</p>
                </div>
                <!-- Social Icon -->
                <div class="col-md-6 col-sm-10 foot-text col-sm-4 text-right">
                    <p>Copyright &copy; TatvaSoft All Rights Reserved.</p>
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