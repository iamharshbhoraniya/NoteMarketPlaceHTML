<?php include "../includes/db.php";
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members | Notes Marketplace</title>

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
            <form>
                <div class="row heading">
                    <div class="col-md-6 col-sm-6 p-0">
                        <h3 class="heading-1">Members</h3>
                    </div>

                    <div class="col-md-6 col-sm-6 text-right p-0 search-1">
                        <img src="../images/search-icon.png" class="form-control-feedback" alt="search-icon">
                        <input class="input-search" type="search" placeholder="Search">
                        <a class="btn btn-general">Search</a>
                    </div>
                </div>

                <div class="row">
                    <div class="table-top table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center" scope="col">Sr No.</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Joining Date</th>
                                    <th class="text-center" scope="col">Under Review Notes</th>
                                    <th class="text-center" scope="col">Published Notes</th>
                                    <th class="text-center" scope="col">Downloaded Notes</th>
                                    <th class="text-center" scope="col">Total Expenses</th>
                                    <th class="text-center" scope="col">Total Earnings</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center" scope="row">1</td>
                                    <td>Khyati</td>
                                    <td>Patel</td>
                                    <td>khyatipatel@gmail.com</td>
                                    <td>09-10-2020, 10:10</td>
                                    <td class="text-center table-td td-blue">19</td>
                                    <td class="text-center table-td td-blue">10</td>
                                    <td class="text-center table-td td-blue">22</td>
                                    <td class="text-center table-td td-blue">$220</td>
                                    <td class="text-center">$117</td>
                                    <td class="text-center">
                                        <div class="dropdown">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <img src="../images/dots.png" alt="dot-image">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="MemberDetails.php">View More Details</a>
                                                <a class="dropdown-item" href="#">Deactive</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" scope="row">2</td>
                                    <td>Rahul</td>
                                    <td>Shah</td>
                                    <td>rahulshah@gmail.com</td>
                                    <td>10-10-2020, 11:25</td>
                                    <td class="text-center table-td td-blue">4</td>
                                    <td class="text-center table-td td-blue">5</td>
                                    <td class="text-center table-td td-blue">4</td>
                                    <td class="text-center table-td td-blue">$70</td>
                                    <td class="text-center">$100</td>
                                    <td class="text-center">
                                        <div class="dropdown">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <img src="../images/dots.png" alt="dot-image">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="MemberDetails.php">View More Details</a>
                                                <a class="dropdown-item" href="#">Deactive</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" scope="row">3</td>
                                    <td>Suman</td>
                                    <td>Trivedi</td>
                                    <td>shumantrivedi@gmail.com</td>
                                    <td>11-10-2020, 01:00</td>
                                    <td class="text-center table-td td-blue">12</td>
                                    <td class="text-center table-td td-blue">11</td>
                                    <td class="text-center table-td td-blue">17</td>
                                    <td class="text-center table-td td-blue">$886</td>
                                    <td class="text-center">$978</td>
                                    <td class="text-center">
                                        <div class="dropdown">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <img src="../images/dots.png" alt="dot-image">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="MemberDetails.php">View More Details</a>
                                                <a class="dropdown-item" href="#">Deactive</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" scope="row">4</td>
                                    <td>Raj</td>
                                    <td>Malhotra</td>
                                    <td>rajmalhotra@gmail.com</td>
                                    <td>12-10-2020, 10:10</td>
                                    <td class="text-center table-td td-blue">2</td>
                                    <td class="text-center table-td td-blue">123</td>
                                    <td class="text-center table-td td-blue">28</td>
                                    <td class="text-center table-td td-blue">$1284</td>
                                    <td class="text-center">$15254</td>
                                    <td class="text-center">
                                        <div class="dropdown">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <img src="../images/dots.png" alt="dot-image">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="MemberDetails.php">View More Details</a>
                                                <a class="dropdown-item" href="#">Deactive</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" scope="row">5</td>
                                    <td>Niya</td>
                                    <td>Patel</td>
                                    <td>niyapatel@gmail.com</td>
                                    <td>13-10-2020, 11:25</td>
                                    <td class="text-center table-td td-blue">20</td>
                                    <td class="text-center table-td td-blue">1</td>
                                    <td class="text-center table-td td-blue">0</td>
                                    <td class="text-center table-td td-blue">$0</td>
                                    <td class="text-center">$69</td>
                                    <td class="text-center">
                                        <div class="dropdown">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <img src="../images/dots.png" alt="dot-image">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="MemberDetails.php">View More Details</a>
                                                <a class="dropdown-item" href="#">Deactive</a>
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
    <?php include "includes/footer.php"; ?>
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