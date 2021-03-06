<?php include "../includes/db.php";
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Notes Marketplace</title>

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
    <?php include "includes/header.php"; ?>
    <!-- End Navigation -->

    <!-- Content -->
    <section id="content">
        <div class="container">

            <div class="row heading">
                <div class="col-md-6 col-sm-12 p-0">
                    <h3 class="heading-1">Dashboard</h3>
                </div>

                <div class="col-md-6 col-sm-12 text-right p-0">
                    <a class="btn btn-general" href="#">Add Note</a>
                </div>
            </div>

            <div class="row" style="margin-bottom: 60px;">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <p class="text-center card-count">20</p>
                                    <p class="text-center count-text">Numbers of Notes in Review for Publish</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <p class="text-center card-count">103</p>
                                    <p class="text-center count-text">Numbers of New Notes Downloaded (Last 7 days)</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <p class="text-center card-count">223</p>
                                    <p class="text-center count-text">Numbers of New Registrations (Last 7 days)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row heading">
                <div class="col-md-6 col-sm-6 p-0">
                    <h3 class="heading-2">Published Notes</h3>
                </div>

                <div class="col-md-6 col-sm-6 search-2 ">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 inner-search p-0">
                            <img src="../images/search-icon.png" class="form-control-feedback" alt="search-icon">
                            <input class="input-search" type="search" placeholder="Search">
                            <a class="btn btn-general" role="button">Search</a>
                        </div>
                        <div class="col-md-4 col-sm-4 search-dropdown">
                            <select class="form-control customDropDown-Multiple">
                                <option>Select month</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="table-top table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">Sr No.</th>
                                <th scope="col">Title</th>
                                <th scope="col">Category</th>
                                <th scope="col" class="text-center">Attachment Size</th>
                                <th scope="col" class="text-center">Sell Type</th>
                                <th scope="col">Price</th>
                                <th scope="col">Publisher</th>
                                <th scope="col" class="text-center">Published Date</th>
                                <th scope="col" class="text-center">Number of Downloads</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row" class="text-center">1</td>
                                <td class="td-blue">Data Science</td>
                                <td>Science</td>
                                <td class="text-center">10 KB</td>
                                <td class="text-center">Free</td>
                                <td>$0</td>
                                <td>Pritesh Panchal</td>
                                <td class="text-center">09-10-2020, 10:10</td>
                                <td class="text-center td-blue">10</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <img src="../images/dots.png" alt="dot-image">
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Download Notes</a>
                                            <a class="dropdown-item" href="#">View More Details</a>
                                            <a class="dropdown-item" href="#">Unpublish</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-center">2</td>
                                <td class="td-blue">Accounts</td>
                                <td>Commerce</td>
                                <td class="text-center">23 MB</td>
                                <td class="text-center">Paid</td>
                                <td>$22</td>
                                <td>Rahil Shah</td>
                                <td class="text-center">09-10-2020, 10:10</td>
                                <td class="text-center td-blue">10</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <img src="../images/dots.png" alt="dot-image">
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Download Notes</a>
                                            <a class="dropdown-item" href="#">View More Details</a>
                                            <a class="dropdown-item" href="#">Unpublish</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-center">3</td>
                                <td class="td-blue">Social Studies</td>
                                <td>Social</td>
                                <td class="text-center">3 MB</td>
                                <td class="text-center">Paid</td>
                                <td>$56</td>
                                <td>Anish Patel</td>
                                <td class="text-center">09-10-2020, 10:10</td>
                                <td class="text-center td-blue">10</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <img src="../images/dots.png" alt="dot-image">
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Download Notes</a>
                                            <a class="dropdown-item" href="#">View More Details</a>
                                            <a class="dropdown-item" href="#">Unpublish</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-center">4</td>
                                <td class="td-blue">AI</td>
                                <td>IT</td>
                                <td class="text-center">1 MB</td>
                                <td class="text-center">Free</td>
                                <td>$0</td>
                                <td>Vijay Vaishnav</td>
                                <td class="text-center">09-10-2020, 10:10</td>
                                <td class="text-center td-blue">34</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <img src="../images/dots.png" alt="dot-image">
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Download Notes</a>
                                            <a class="dropdown-item" href="#">View More Details</a>
                                            <a class="dropdown-item" href="#">Unpublish</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-center">5</td>
                                <td class="td-blue">Lorem ipsum</td>
                                <td>Lorem</td>
                                <td class="text-center">105 KB</td>
                                <td class="text-center">paid</td>
                                <td>$90</td>
                                <td>Mehul Patel</td>
                                <td class="text-center">09-10-2020, 10:10</td>
                                <td class="text-center td-blue">9</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <img src="../images/dots.png" alt="dot-image">
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Download Notes</a>
                                            <a class="dropdown-item" href="#">View More Details</a>
                                            <a class="dropdown-item" href="#">Unpublish</a>
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

        </div>
    </section>
    <!-- End Content -->

    <hr class="p-0 m-0">

    <!-- Footer -->
    <?php include "includes/footer.php"; ?>
    <!-- End Footer -->

    <!-- JavaScript -->
    <!-- JQuery -->
    <script src="js/jquery.js"></script>

    <!-- Popper JS -->
    <script src="js/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="js/script.js"></script>
</body>

</html>